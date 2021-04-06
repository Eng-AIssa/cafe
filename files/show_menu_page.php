<style>
    .item_card {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-around;
        height: 450px;
        width: 300px;
        border: 1px solid black;
        border-radius: 2px;
        margin: 50px 10px 30px 10px;
    }

    .heading {
        margin: 50px 0px 0px 0px;
    }

    .add_item_button {
        width: 180px;
        height: 50px;
        margin: 50px 30px 20px 30px;
    }

    .card_image {
        width: 200px;
        height: 200px;
        margin-top: 10px;
    }
</style>
<?php $items = get_items(); ?>
<div class="container">

    <div class="row justify-content-center">
        <h1 class="heading">قائمة الاصناف المتاحة</h1>
    </div>
    <div class="row justify-content-center">
        <button type="button" class="btn btn-outline-secondary add_item_button" data-toggle="modal" data-target="#add-category">اضافة فئة جديدة</button>
        <button type="button" class="btn btn-outline-secondary add_item_button" data-toggle="modal" data-target="#add_item">اضافة صنف جديد</button>
    </div>
    <div class="row mb-4">
        <?php foreach ($items as $item) : ?>
            <div class="col-12 col-md-6 col-lg-4 justify-content-center">
                <div class="item_card">
                    <img class="card_image" src="images/<?php echo  $item['ITEM_IMG'] ?>">
                    <h3><?php echo $item['ITEM_NAME'] ?></h3>
                    <span> الكمية: <?php echo $item['ITEM_QUANTITY'] ?></br> </span>
                    <span> الفئة: <?php echo get_category($item['category_id']); ?> </span>
                    <h4><?php echo 'السعر: ' . $item['ITEM_PRICE'] ?></h4>
                    <div>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#<?php echo 'model' . $item['ITEM_ID'] ?>">حذف</button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#<?php echo $item['ITEM_NAME'] . $item['ITEM_ID'] ?>">تعديل</button>
                    </div>


                    <!-- مودل حذف الصنف-->
                    <?php include "files/delete_item_model.php"; ?>
                    <!-- مودل تعديل الصنف-->
                    <?php include "files/update_item_model.php"; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>


</div>