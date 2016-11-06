<!DOCTYPE html>
<html>
<head>
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <!--<script src="bower_components/semantic/dist/semantic.min.js"></script>-->
    <script src="bower_components/materialize/dist/js/materialize.js"></script>

    <link rel="stylesheet" href="bower_components/materialize/dist/css/materialize.min.css">
    <link rel="stylesheet" href="public/dash.css">
    <title>LaFitte</title>

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
</head>

<body>
<div class="navbar-fixed">
    <nav class="orange">
        <div class="nav-wrapper">
            <a href="#!" class="brand-logo">LaFitte</a>
            <!-- activate side-bav in mobile view -->
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="gyms.php">Gyms</a></li>
                <li><a href="trainees.php">Trainees</a></li>
                <li class="user-welcome"><a href="user_detail_input.php">Welcome, Joel</a></li>
            </ul>
            <!-- navbar for mobile -->
            <ul class="side-nav" id="mobile-demo">
                <li><a href="gyms.php">Gyms</a></li>
                <li><a href="trainees.php">Trainees</a></li>
                <li class="user-welcome"><a href="user_detail_input.php">Welcome, Joel</a></li>
            </ul>
        </div>
    </nav>
</div>

<div class="container">
    <div class="center">
        <form action="user_detail_input_function.php" method="get">
            <div class="row left-align">
                <?php
                if($result->num_rows>0){
                while ($row = $result->fetch_assoc()){
                ?>
                <h3 class=" col s12">Name</h3>
                <div class="input-field col s6 m6 l6">
                    <input id="name" name="name" type="text" class="validate col s12" value="<?php echo $row["name"];?>">
                    <label for="name">Name</label>
                </div>
                <h3 class="col s12">Body Details</h3>
                <div class="input-field col s6">
                    <input id="height" name="height" class="validate" type="text" value="<?php echo $row["height"];?>">
                    <label for="height">Height</label>
                </div>
                <div class="input-field col s6">
                    <input id="weight" name="weight" class="validate" type="text" value="<?php echo $row["weight"];?>">
                    <label for="weight">Weight</label>
                </div>
                <h3 class="col s12">Personal Details</h3>
                <div class="input-field col s6">
                    <input id="city" name="city" type="text" class="validate" value="<?php echo $row["city"];?>">
                    <label for="city">City</label>
                </div>
                <div class="input-field col s6">
                    <input id="state" name="state" type="text" class="validate" value="<?php echo $row["state"];?>">
                    <label for="state">State</label>
                </div>
                <div class="input-field col s6">
                    <input id="country" name="country" type="text" class="validate" value="<?php echo $row["country"];?>">
                    <label for="country">Country</label>
                </div>
                <input type="submit" class="col s12 btn yellow red-text" name="submit" id="submit">
            </div>

            <?php
                }
            }
            ?>
        </form>
    </div>
</div>

</body>
</html>