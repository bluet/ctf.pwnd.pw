<?php
$db_host = "ctf.bluet.org";
$db_user = "newuser";
$db_pass = "123";
$db_name = "my_db";
$db_port = "33061";
$flag = "LSA {sqli is great?!}";

$user = $_POST['username'];
$pass = $_POST['password'];

if (!empty($_POST['username']) && !empty($_POST['password'])) {

    $mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name, $db_port);
    $sql = "SELECT * FROM account WHERE name = '$user' AND passwd = '$pass'";

    if (!$result = $mysqli->query($sql)) {
        echo "Query: " . $sql . "\n";
        echo "Errno: " . $mysqli->errno . "\n";
        echo "Error: " . $mysqli->error . "\n";
        exit;
    }
    if ($result->num_rows === 0) {
        echo "rows = 0?";
        exit;
    }

    $dbdata = $result->fetch_assoc();

    echo "Hi!".htmlentities($dbdata["name"])."<\br>";
    echo sprintf("You %s admin!", $dbdata["name"] === "admin" ? "are" : "are not")."<\br>";

    if ($dbdata["name"] === "admin") {
        printf("%s %s", htmlentities("hello admin this is your flag :"), $flag);
    }
}
