

<?php
$db_host = 'localhost';
$db_user = 'wargame';
$db_pass = 'qwertyQWERTY';
$db_name = 'wargame';
//$r=rand(0,999);
$key=  "you_can_never_guess_the_key";

//echo "test!";
$user = $_POST['uname'];
$pass = $_POST['upass'];
if ($user == '' || $pass == '')
{
	header('Location: login_bypass_1.php');
}
else
{

	$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);
	//$con = @mysql_connect($db_host, $db_user, $db_pass);
	//mysql_select_db($db_name, $con);
	$query = "SELECT uname,upass FROM wargame1 WHERE uname = '$user' AND upass = '$pass'";
	$result = $mysqli->query($query);

	//$rows = mysqli_num_rows($result);

	if (mysqli_num_rows($result))
	{
		echo 'logined! <br> key is :'.$key.'<br><br><br><br>';
	}
	else
	{
		echo "sorry :( <br>";
		header( "Refresh:5; url=wargame1.php", true, 303);
	}

	$mysqli->close();
	//$message  = mysql_error() .' : '. $query;
	//die($message);
}
?>

