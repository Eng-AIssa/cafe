<?php 
include_once "files/database_connection.php";
include_once "helper_functions/check_session_fun.php";

if(check_session()){
include_once "helper_functions/get_items_fun.php";
include_once "helper_functions/get_category_name_fun.php";
include_once "helper_functions/get_categories_fun.php";
include_once "files/header.php";
include_once "files/show_menu_page.php";
include_once "files/add_item_model.php";
include_once "files/add_category_model.php";
include_once "files/footer.php";
include_once "files/needed_scripts.php";
}
else{
    header("refresh:3; url=Login.php");
    echo "<div style='background-color:skyblue; margin:350px 0px 0px 500px; width:450px; height:85px; font-size:40px; padding:20px; border-radius:3px; text-align: center;' >الرجاء تسجيل الدخول للاستمرار بالوصول للصفحة المطلوبة</div>";
}
?>