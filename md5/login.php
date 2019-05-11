<?php
	$username = $_POST['username'];
	$passwd = $_POST['password'];
	//set a md5 not in the world;
	if($username=="admin" && md5($passwd)=="0e394748910394873823912398437829"){
		echo "y0u Ar3 a HaCK3R".'<br>'.'<br>';
		system("cat flag_md5.txt");
	}else{
		echo "username or password is wrong"."<br>";
		echo "please come back";
	}
?>
