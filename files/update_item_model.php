<div class="modal fade" id="<?php echo $item['ITEM_NAME'] . $item['ITEM_ID'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">تعديل معلومات الصنف</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="update_item.php" id="form<?php echo $item['ITEM_ID'] ?>" enctype="multipart/form-data">
                    <input name="id" type="hidden" value="<?php echo $item['ITEM_ID'] ?>">
                    <input name="img" type="hidden" value="<?php echo $item['ITEM_IMG'] ?>">
                    <div class="form-group">
                        <label for="item-name" class="col-form-label">اسم الصنف</label>
                        <input type="text" class="form-control" name="item-name" id="item-name" value="<?php echo $item['ITEM_NAME'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="item-description" class="col-form-label">الوصف:</label>
                        <input type="text" class="form-control" name="item-description" id="item-description" value="<?php echo $item['ITEM_DWSCREPTION'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="item-price" class="col-form-label">السعر</label>
                        <input type="number" class="form-control" name="item-price" id="item-price" value="<?php echo $item['ITEM_PRICE'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="item-quantity" class="col-form-label">الكمية</label>
                        <input type="number" class="form-control" name="item-quantity" id="item-quantity" value="<?php echo $item['ITEM_QUANTITY'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="item-category" class="col-form-label">الفئة</label>
                        <select class="form-control" name="item-category" id="item-category">
                            <?php $categories = get_categories(); foreach($categories as $category): ?>
                            <option value="<?php echo $category['category_id'] ?>"><?php echo $category['category_title'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="item-image" class="col-form-label">صورة الصنف</label>
                        <input type="file" class="form-control" name="item-image" id="item-image" >
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                <button form="form<?php echo $item['ITEM_ID'] ?>" type="submit" class="btn btn-primary">حفظ التغيرات</button>
            </div>
        </div>
    </div>
</div>

<script>
    $('#<?php echo $item['ITEM_NAME'] . $item['ITEM_ID'] ?>').on('show.bs.modal', function(event) {})
</script>