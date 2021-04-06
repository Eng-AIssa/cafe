<div dir="rtl" class="modal fade" id="add-category" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">اضافة فئة جديدة</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-right">
                <form method="post" action="files/add_category.php" id="add-category-form">
                    <div class="form-group">
                        <label for="category-name" class="col-form-label">اسم الفئة الجديدة</label>
                        <input type="text" class="form-control" name="category-name" id="category-name" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer text-right">
                <button form="add-category-form" type="submit" class="btn btn-primary">اضافة</button>
                <button type="button" class="btn btn-secondary m-2" data-dismiss="modal">الغاء</button>
            </div>
        </div>
    </div>
</div>