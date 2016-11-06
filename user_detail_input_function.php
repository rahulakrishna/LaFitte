<?php

function redirect($url, $permanent = false){
    header('Location: ' . $url, true, $permanent ? 301 : 302);
    exit();
}

$servername="localhost";
$username="lafitte";
$password="joelhrishirahul";

$dbname="lafitte";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$user="joelninan";

$name=$_GET['name'];
$weight=$_GET['weight'];
$height=$_GET['height'];

$city=$_GET['city'];
$state=$_GET['state'];
$country=$_GET['country'];
$sql="UPDATE `users` SET `name` = '$name', `height` = '$height', `weight` = '$weight', `city` = '$city', `state` = '$state', `country` = '$country' WHERE `users`.`id` = '$user';";
$result=$conn->query($sql);
redirect("user_info.php");
?>