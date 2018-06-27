<?php
	
	
	$username = $_POST['username'];
	$password = $_POST['password'];

#	echo $username;
#	echo $password;

	if($username=='admin'){
		
		if($password=='0525'){
			echo "you r admin now!"."<br>";
			echo "LSA{u a3e so bruty}";
		}else{
			header("Refresh:3; url=index.html"); 
			echo "password wrong!"."<br>";
		}
	}else{
		header("Refresh:3; url=index.html"); 
		echo "all wrong!"."<br>";
	}

?>
