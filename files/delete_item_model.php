<div dir="rtl" class="modal fade" id="<?php echo 'model' . $item['ITEM_ID'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">حذف الصنف</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-right">
                هل انت متاكد من رغبتك في حذف الصنف ؟
                <form method="post" action="files/delete_item.php" id="<?php echo 'delete' . $item['ITEM_ID'] ?>">
                    <input type="hidden" class="form-control" name="delete-id" id="delete-id" value="<?php echo $item['ITEM_ID'] ?>">
                </form>
            </div>
            <div class="modal-footer text-right">
                <button form="<?php echo 'delete' . $item['ITEM_ID'] ?>" type="submit" class="btn btn-primary">حذف</button>
                <button type="button" class="btn btn-secondary m-2" data-dismiss="modal">الغاء</button>
            </div>
        </div>
    </div>
</div>