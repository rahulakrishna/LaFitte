<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Welcome to LaFitte!</title>
    <link rel="stylesheet" href="bower_components/materialize/dist/css/materialize.min.css">

    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="bower_components/materialize/dist/js/materialize.js"></script>

    <link rel="stylesheet" href="public/style.css">
    <?php

    function redirect($url, $permanent = false)
    {
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

    $name=$_GET['ch_name'];
    $target=$_GET['ch_target'];

    $sql="INSERT INTO `challenges` (`name`, `target`) VALUES ('$name', '$target')";
    $result=$conn->query($sql);
    redirect("dashboard.php");


</head>
<body id="login">
    <div class="container">
        <div class="orange-text center">
            <h3>Welcome to The DBMS project which will feature listing of Gyms and Challenges and Trainees</h3>
        </div>
    </div>


</body>
</html>