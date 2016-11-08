<!DOCTYPE html>
<html>
<head>
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <!--<script src="bower_components/semantic/dist/semantic.min.js"></script>-->
    <script src="bower_components/materialize/dist/js/materialize.js"></script>

    <link rel="stylesheet" href="bower_components/materialize/dist/css/materialize.min.css">
    <link rel="stylesheet" href="public/dash.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LaFitte</title>
</head>
<?php

error_reporting(E_ALL);

$servername="localhost";
$username="lafitte";
$password="joelhrishirahul";

$dbname="lafitte";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$user="joelninan";

$sql="SELECT * FROM users WHERE `users`.`id` = '$user'";
$result=$conn->query($sql);
?>
<body>
<div class="navbar-fixed">
    <nav class="orange">
        <div class="nav-wrapper">
            <a href="#!" class="brand-logo">Put Fitness!</a>
            <!-- activate side-bav in mobile view -->
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="gyms.php">Gyms</a></li>
                <li><a href="trainees.php">Trainees</a></li>
                <li><a href="dashboard.php">Dashboard</a> </li>
                <li class="user-welcome"><a href="user_detail_input.php">Welcome, Joel</a></li>
            </ul>
            <!-- navbar for mobile -->
            <ul class="side-nav" id="mobile-demo">
                <li><a href="gyms.php">Gyms</a></li>
                <li><a href="trainees.php">Trainees</a></li>
                <li><a href="dashboard.php">Dashboard</a> </li>
                <li class="user-welcome"><a href="user_detail_input.php">Welcome, Joel</a></li>
            </ul>
        </div>
    </nav>
</div>

<div class="container">
    <div class="center">
        <?php
            if($result->num_rows>0){
             while ($row=$result->fetch_assoc()){
                 ?>
            <div class="col s8 push-s4">
                <h3 class="green">Body Details</h3>
            </div>
        <?php
                 echo '<h4>'.$row["name"].'</h4><br>';
                 echo '<h5>'.$row["height"].' cm</h5><br>';
                 echo '<h5>'.$row["weight"].' kg</h5><br>';
                 echo '<h4>Address Details</h4>';

                 echo '<h5>'.$row["city"].', '.$row["state"].', '.$row["country"].'</h5>';
             }
            }
        ?>
    </div>
</div>

<script type="text/javascript">
        $(document).ready(function () {
            $('.slider').slider();
            $('.button-collapse').sideNav();

        });
    </script>
</body>
</html>