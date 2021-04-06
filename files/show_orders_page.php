<?php
$result = show_orders();
if (!$result) :
	include_once "error_page.php";
else :
?>

	<div class="container mb-5">

		<div class="row m-5">
			<h1 class="col-12 text-center"> قائمة الطلبات الواردة </h1>
		</div>


		<!-- جدول الطلبات-->
		<table id="myTable" class="table text-center mt-3" dir="rtl">
			<thead>
				<div class="row">

					<tr>
						<th scope="col">رقم الطلب</th>
						<th scope="col">اسم العميل</th>
						<th scope="col">تاريخ الطلب</th>
						<th scope="col">حالة الطلب</th>
						<th scope="col">طريقة الدفع</th>
						<th scope="col">عرض</th>
						<th scope="col">تحديث</th>
					</tr>
			</thead>

			<tbody>

				<?php foreach ($result as $row) : ?>

					<tr>
						<th class="pt-4" scope="row"> <?php echo  $row['ORDER_ID'] ?> </th>
						<td class="pt-4"> <?php echo get_name($row['user_id'], $row['user_type']) ?> </td>
						<td class="pt-4"> <?php echo $row['ORDER_DATE'] ?> </td>
						<td class="pt-4"> <?php echo $row['ORDER_STATE'] ?> </td>
						<td class="pt-4"> <?php echo $row['PAY_METHOD'] ?> </td>


						<!-- ارجاع معلومات الطلب لعرضها-->
						<?php $orders = get_order($row['ORDER_ID']); ?>

						<!-- عرض الطلب-->
						<td class="pt-4">
							<p>
								<button class="btn btn-outline-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo get_name($row['user_id'], $row['user_type']) . $row['ORDER_ID'] ?>" aria-expanded="false" aria-controls="<?php echo get_name($row['user_id'], $row['user_type']) . $row['ORDER_ID'] ?>">عرض الطلب</button>
							</p>

							<div class="collapse" id="<?php echo get_name($row['user_id'], $row['user_type']) . $row['ORDER_ID'] ?>">
								<div class="card card-body" style="min-width:220px; margin-right:15px;">
									<?php foreach ($orders as $item) : ?>
										الطلب: <?php echo get_item($item['ITEM_ID']); ?> | الكمية: <?php echo $item['QUANTITY'] ?>
										</br>
									<?php endforeach; ?>
								</div>
							</div>
						</td>
						<!-- نهاية عرض الطلب-->

						<td class="pt-4"> <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#<?php echo get_name($row['user_id'], $row['user_type']) . $row['ORDER_ID'] ?>">تحديث الحالة</button></td>

						<!-- المودل المستخدم لتحديث حالة الطلب-->
						<?php include "files/order_state_model.php";  ?>

					</tr>

				<?php endforeach; ?>

			</tbody>

		</table>
	</div>


	<!--نهاية محتوى الصفحة -->
<?php endif; ?>


<!-- اضافة السكربتات -->
<?php include_once "files/needed_scripts.php"; ?>

<script>
	$(document).ready(function() {
		$('#myTable').DataTable({
			"lengthMenu": [3, 1, 2, 5, 10, 15]
		});
	});
</script>
