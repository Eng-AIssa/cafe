<div dir="rtl" class="modal fade" id="add_item" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">اضافة صنف جديد</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-right">
                <form method="post" action="files/add_item.php" id="add_item_form" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="item-name" class="col-form-label">اسم الصنف</label>
                        <input type="text" class="form-control" name="item-name" id="item-name" required>
                    </div>
                    <div class="form-group">
                        <label for="item-description" class="col-form-label">الوصف:</label>
                        <input type="text" class="form-control" name="item-description" id="item-description" required>
                    </div>
                    <div class="form-group">
                        <label for="item-price" class="col-form-label">السعر</label>
                        <input type="number" class="form-control" name="item-price" id="item-price" required>
                    </div>
                    <div class="form-group">
                        <label for="item-quantity" class="col-form-label">الكمية</label>
                        <input type="number" class="form-control" name="item-quantity" id="item-quantity" required>
                    </div>
                    <div class="form-group">
                        <label for="item-category" class="col-form-label">الفئة</label>
                        <select class="form-control" name="item-category" id="item-category" required>
                            <?php $categories = get_categories(); foreach($categories as $category): ?>
                            <option value="<?php echo $category['category_id'] ?>"><?php echo $category['category_title'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="item-image" class="col-form-label">صورة الصنف</label>
                        <input type="file" class="form-control" name="item-image" id="item-image" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
            <button form="add_item_form" type="submit" class="btn btn-primary">اضافة</button>
                <button type="button" class="btn btn-secondary m-2" data-dismiss="modal">اغلاق</button>
            </div>
        </div>
    </div>
</div>

<script>
    $('#add_item').on('show.bs.modal', function(event) {})
</script>