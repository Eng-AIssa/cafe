<?php

function get_name($id,$type){

global $con;


if($type == "student"){
	$query = "SELECT STUDENT_NAME FROM student_information WHERE STUDENT_ID=$id";
}
elseif($type == "employee"){
	$query = "SELECT EMPLOYEE_NAME FROM employee_information WHERE EMPLOYEE_ID=$id";
}
else{
	return "this type of users is not registered";
}

$resul = mysqli_query($con,$query);

$result = mysqli_fetch_assoc($resul);

if($type=="student")
return $result["STUDENT_NAME"];
else
return $result["EMPLOYEE_NAME"];
}

?>