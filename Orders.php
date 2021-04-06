 <?php
 include_once "files/database_connection.php";
 include_once "helper_functions/check_session_fun.php";
 if(check_session()){
	include_once "helper_functions/show_orders_fun.php";
	include_once "helper_functions/get_user_name_fun.php";
	include_once "helper_functions/get_item_name_fun.php";
	include_once "helper_functions/get_order_details_fun.php";
	include_once "files/header.php";
	include_once "files/show_orders_page.php";
	include_once "files/footer.php";
 }
 else{
	header("refresh:3; url=Login.php");
    echo "<div style='background-color:skyblue; margin:300px 0px 0px 450px; width:450px; height:85px; font-size:40px; padding:20px; border-radius:3px; text-align: center;' >الرجاء تسجيل الدخول للاستمرار بالوصول للصفحة المطلوبة</div>";
 }
?>
