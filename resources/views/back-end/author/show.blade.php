<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Category  </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body row">
                <div class="col col-lg-4">
                    <img class="author-img"  src="http://127.0.0.1:8000/storage/avatars/00DNabhp9w3yma6n63v4Buc3yBjI3DZBKkDyLIvD.jpg"
                         alt="">
                </div>
                <div class="col col-lg-8">
                    <h4 id="author-name"> Tên tác giả : </h4>
                    <p id="author-year" class=" m-1"> Năm sinh :</p>
                    <p id="author-amount" class="m-1">Số lượng tác phẩm :</p>
                    <p id="author-nationality" class="m-1">Quốc tích :</p>
                    <p id="author-link" href="{{$author->link}}" class="m-1"> Link wiki</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
