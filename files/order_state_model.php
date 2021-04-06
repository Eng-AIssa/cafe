<!-- المودل المستخدم لتحديث حالة الطلب-->

<div class="row">


  <div class="modal fade" id="<?php  echo get_name($row['user_id'], $row['user_type']) . $row['ORDER_ID'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header" dir="rtl">
          <h5 class="modal-title" id="exampleModalLabel">تعديل حالة الطلب</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <form id="<?php echo get_name($row['user_id'], $row['user_type']) . $row['ORDER_ID']?>state" method="post" action="files/update_state.php">

            <div class="row" dir="rtl">

              <label class="col-2 p-0" for="inlineFormCustomSelect">حالة الطلب</label>
              <select name="state" class="custom-select mr-sm-2 col-6"  required>
                <option value="لم يتم اختيار قيمة" selected>اختر...</option>
                <option value="قيد التنفيذ">قيد التنفيذ</option>
                <option value="الطلب جاهز">تم</option>
                <option value="في الطريق">في الطريق</option>
              </select>

              <input type="hidden" name="order_id" value="<?php echo  $row['ORDER_ID'] ?>">

            </div>

          </form> 
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
          <button type="submit" class="btn btn-primary" form="<?php echo get_name($row['user_id'], $row['user_type']) . $row['ORDER_ID']?>state">حفظ التعديل</button>
        </div>
      </div>
    </div>
  </div>
</div>




<script>
  $('#<?php echo get_name($row['user_id'], $row['user_type']) . $row['ORDER_ID']?>state').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
  })
</script>