function toDateString(date) {
    date = new Date(date);
    return date.toDateString();
}

$(document).ready(function () {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('button').click(function () {
        let html;

        let name = $('#nameCategory');
        let amount = $('#amountCategory');

        let btnClose = $('.btn-close');

        switch ($(this).text()) {
            case "Tạo":

                $('#titleAddCategory').show();
                $('#titleEditCategory').hide();
                $('#titleShowCategory').hide();
                $('#titleDeleteCategory').hide();
                $('#bodyAddAndEditCategory').show();
                $('#bodyShowCategory').hide();
                $('#bodyDeleteCategory').hide();
                $('#btnAddCategory').show();
                $('#btnUpdateCategory').hide();
                $('#btnDeleteCategory').hide();

                break;
            case "Thêm":
                btnClose.trigger('click');
                $.ajax({
                    url: window.origin + "/category/create",
                    method: 'POST',
                    data: {
                        name: name.val(),
                        amount: amount.val(),
                    },
                    success: function (res) {
                        html = "<tr>";
                        html += "<th scope=\"row\">" + res.id + "</th>";
                        html += "<td>" + res.name + "</td>";
                        html += "<td>" + res.amount + "</td>";
                        html += "<td>";
                        html += "<button type=\"button\" class=\"btn btn-primary show\" id=\"show_" + res.id + "\" data-bs-toggle=\"modal\" data-bs-target=\"#modal\">Xem</button>";
                        html += "<button type=\"button\" class=\"btn btn-secondary edit\" id=\"edit_" + res.id + "\" data-bs-toggle=\"modal\" data-bs-target=\"#modal\">Sửa</button>";
                        html += "<button type=\"button\" class=\"btn btn-danger delete\" id=\"delete_" + res.id + "\">Xóa</button>";
                        html += "</td>";
                        html += "</tr>";

                        $('#content').append(html);

                        name.val('');
                        amount.val('');
                    },
                    error: function (err) {

                    }
                })
                break;
            case "Xem":
                $.ajax({
                    url: window.origin + "/category/show/" + $(this).attr('id').slice(5),
                    method: 'GET',
                    success: function (res) {
                        console.log(res);

                        $('#titleAddCategory').hide();
                        $('#titleEditCategory').hide();
                        $('#titleShowCategory').show();
                        $('#titleDeleteCategory').hide();
                        $('#bodyAddAndEditCategory').hide();
                        $('#bodyShowCategory').show();
                        $('#bodyDeleteCategory').hide();
                        $('#btnAddCategory').hide();
                        $('#btnUpdateCategory').hide();
                        $('#btnDeleteCategory').hide();

                        $('#showCategoryCreatedDate').text(toDateString(res.created_at));
                        $('#showCategoryName').text(res.name);
                        $('#showCategoryPrice').text(res.price);
                        $('#showCategoryDesc').text(res.desc);

                    },
                    error: function (err) {

                    }
                })
                break;
            case "Sửa":
                let idEdit = $(this).attr('id').slice(5);
                $.ajax({
                    url: window.origin + "/category/edit/" + idEdit,
                    method: 'GET',
                    success: function (res) {

                        id.val(idEdit);
                        name.val(res.name);
                        price.val(res.price);
                        desc.val(res.desc);

                        $('#titleAddCategory').hide();
                        $('#titleEditCategory').show();
                        $('#titleShowCategory').hide();
                        $('#titleDeleteCategory').hide();
                        $('#bodyAddAndEditCategory').show();
                        $('#bodyShowCategory').hide();
                        $('#bodyDeleteCategory').hide();
                        $('#btnAddCategory').hide();
                        $('#btnUpdateCategory').show();
                        $('#btnDeleteCategory').hide();
                    },
                    error: function (err) {
                        console.log(err);
                    }
                })
                break;
            case "Lưu":
                btnClose.trigger('click');
                $.ajax({
                    url: window.origin + "/category/update/" + id.val(),
                    method: 'POST',
                    data: {
                        id: id.val(),
                        name: name.val(),
                        price: price.val(),
                        desc: desc.val()
                    },
                    success: function (res) {

                        $('#' + 'CategoryName_' + res.id).text(res.name);
                        $('#' + 'CategoryPrice_' + res.id).text(res.price);
                        $('#' + 'CategoryDesc_' + res.id).text(res.desc);

                        id.val('');
                        name.val('');
                        price.val('');
                        desc.val('');
                    },
                    error: function (err) {

                    }
                })
                break;
            case "Xóa":
                if ($(this).attr('id') === 'btnDeleteCategory'){
                    $.ajax({
                        url: window.origin + "/category/delete/" + id.val(),
                        method: 'GET',
                        success: function (res) {
                            $("#"+"row_"+id.val()).remove();
                            btnClose.trigger('click');
                        },
                        error: function (err) {
                            console.error(err);
                        }
                    })
                }else {
                    let idDelete = $(this).attr('id').slice(7);
                    id.val(idDelete);
                    $('#titleAddCategory').hide();
                    $('#titleEditCategory').hide();
                    $('#titleShowCategory').hide();
                    $('#titleDeleteCategory').show();
                    $('#bodyAddAndEditCategory').hide();
                    $('#bodyShowCategory').hide();
                    $('#bodyDeleteCategory').show();
                    $('#btnAddCategory').hide();
                    $('#btnUpdateCategory').hide();
                    $('#btnDeleteCategory').show();
                    $('#nameCategoryDelete').text(idDelete);
                }
                break;
        }
    });
});
