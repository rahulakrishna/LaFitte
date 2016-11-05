<?php
/**
 * Created by PhpStorm.
 * User: rahul
 * Date: 11/5/16
 * Time: 9:39 PM
 */
    function redirect($url, $permanent = false){
        header('Location: ' . $url, true, $permanent ? 301 : 302);
        exit();
    }
    $id=$_GET['id'];
    echo $id;


    $servername="localhost";
    $username="lafitte";
    $password="joelhrishirahul";

    $dbname="lafitte";

    $conn=mysqli_connect($servername,$username,$password,$dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql="DELETE FROM `challenges` WHERE `challenges`.`id` = ".$id.";";

    $result=$conn->query($sql);

    echo $result;

    redirect("dashboard.php");
?>