<!DOCTYPE html>
<html>
<head>
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <!--<script src="bower_components/semantic/dist/semantic.min.js"></script>-->
    <script src="bower_components/materialize/dist/js/materialize.js"></script>

    <link rel="stylesheet" href="bower_components/materialize/dist/css/materialize.min.css">
    <link rel="stylesheet" href="public/dash.css">
    <title>LaFitte</title>
</head>
<?php
/**
 * Created by PhpStorm.
 * User: rahul
 * Date: 11/5/16
 * Time: 10:04 PM
 */

error_reporting(1);

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


$id=$_GET['id'];
$name=$_GET['ch_name'];
$target=$_GET['ch_target'];
echo $id;
echo $name;
echo $target;

$sql="UPDATE `challenges` SET `name` = '$name', `target` = '$target' WHERE `challenges`.`id` = $id ; ";
$result=$conn->query($sql);

echo "<br>".$result;

redirect("dashboard.php");
?>