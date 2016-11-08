<!DOCTYPE html>
<html>
<head>
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <!--<script src="bower_components/semantic/dist/semantic.min.js"></script>-->
    <script src="bower_components/materialize/dist/js/materialize.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
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

    error_reporting(E_ALL);
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

    $sql="SELECT * FROM `challenges` WHERE `challenges`.`id` = '$id'";
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
            </ul>
        </div>
    </nav>
</div>

<div class="container">
    <div class="row">
        <div class="col m4 push-m4 blue-grey card">
            <div class="card-content row">
            <form action="edit_challenge_input.php">
            <?php
            if($result->num_rows>0) {
                while ($row = $result->fetch_assoc()) {
            ?>
                    <input type="text" value="<?php echo $id; ?>" name="id" id="id" class="hiddendiv">
                    <input type="text" placeholder="Challenge" name="ch_name" id="ch_name" value="<?php echo $row['name'];?>">
                    <input type="date" placeholder="Target" name="ch_target" id="ch_target" value="<?php echo $row['target'];?>">
                    <input type="submit" class="btn col s12" name="submit" id="submit">

            <?php
                }
            }
            ?>
            </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
