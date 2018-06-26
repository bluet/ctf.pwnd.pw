<!DOCTYPE HTML>
<html>
<head>
	<title>Bulletin Board - try to hack admin and become admin</title>
	<script type="text/JavaScript">
		function gosubmit() {
        		if(document.getElementById("name").value.length>10||document.getElementById("memo").value.length>10) {
        	        	alert('input length limit reached');
        		} else {
        	        	document.forms[0].submit();
			}
		}
	</script>
</head>
<body>
	<form>
		Your name : <input type="text" name="name" maxlength="15" id="name">
		Your message : <input type="text" name="memo" maxlength="15" id="memo">
		<button type="button" onclick=gosubmit();>submit!</button>
	</form>
	<pre>
		Tip: XSS, Admin Cookie, Cookie Spoofing


	Info:
		留言板每隔 5 分鐘會清除掉舊資料。
		Admin 每 15 秒重讀一次頁面。
		一旦成為 Admin，頁面上方就會顯示 key。
		Admin 發文時，不論輸入的使用者名稱為何，都會顯示為 Admin。
		所有的題目都可以在有裝 Firefox + FireBug 的情況下解出，請不要用工具暴力破解，那反而解不出來。
	</pre>

<?php
$cookie_v = 'user';
$cookie_admin = 'mmmnmmmnmmmnmmmn';

//$r = rand ( 0, 999 );
//$key = "5" . md5 ( "key" . $r ) . $r;
$key = "wOw_Is_iT_g0od_to_E@t";

$name = strtolower ( $_GET ['name'] );
$msg = $_GET ['memo'];

if ($_COOKIE ["cookie"] == 'mmmnmmmnmmmnmmmn') {

//echo "<script>timedRefresh(30000)</script>";
	echo 'key is : ' . $key . '<br><hr>';
	
	$name = 'Admin';
	
	//if ($_GET ['skip'] != 1)
	//	setcookie ( "cookie", $cookie_v );
} else {
	setcookie ( "cookie", $cookie_v );
	
	if ($name == 'admin') {
		$name = 'fake_admin';
	}
}

if (strlen ( $name ) > 0 && strlen ( $msg ) > 0) {
	//echo "1";
	$fp = fopen ( "memo/memo.txt", "a+" );
	fputs ( $fp, 'Name : ' . $name . '<br>Message : ' . $msg . "\n" );
	header ( "location: bulletin_board.php" );
} else {
	$fp = fopen ( "memo/memo.txt", "r" );
	while ( ! feof ( $fp ) ) {
		$s = fgets ( $fp );
		echo $s . "<br><hr>";
	}
}

?>

</body>

</html>
