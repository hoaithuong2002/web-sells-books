$(document).ready(function () {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('.button-show-author').on('click', function () {
        let authorId = $(this).attr('id');
        $.ajax({
            url: "http://localhost:8000/api/author/show/" + authorId,
            method: 'GET',
            success: function (res) {
                console.log(res[0]);
                $('#author-name').text('Ten Tac Gia: ' + res[0].name);
                $('#author-year').text('Nam sinh:' + res[0].year);
                $('#author-amount').text('So Luong Tac Pham: ' + res[0].amount);
                $('#author-nationality').text('Quoc Tich: ' + res[0].nationality);
                $('#author-link').text('href :' + res[0].link);
                $('.author-img').attr('src', "http://127.0.0.1:8000/storage/" + res[0].avatar);
                $('#show-author').click()
            },
            error: function (err) {

            }
        })

    });
});


