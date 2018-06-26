<?php
$user = $_POST ['user'];
$name = $_POST ['name'];
//$r=rand(0,999);
$key=  "Wow_you_passed_the_admin_check";




if ($name == "admin") {
	echo "key is : ". $key;
}else 
	header("location: login_bypass_2.html");

?>
