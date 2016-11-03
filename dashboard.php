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
    $servername="localhost";
    $username="lafitte";
    $password="joelhrishirahul";

    $dbname="lafitte";

    $conn=mysqli_connect($servername,$username,$password,$dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }


    $sql="SELECT * FROM challenges";
    $result=$conn->query($sql);
    ?>
    <body>
    <nav>
        <div class="nav-wrapper">
            <a href="#!" class="brand-logo">LaFitte</a>
            <!-- activate side-bav in mobile view -->
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="sass.html">Gyms</a></li>
                <li><a href="components.html">Trainees</a></li>
                <li class="user-welcome">Welcome, Joel</li>
            </ul>
            <!-- navbar for mobile -->
            <ul class="side-nav" id="mobile-demo">
                <li><a href="sass.html">Gyms</a></li>
                <li><a href="components.html">Trainees</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="center"><h1>Current challenges!</h1></div>
        <div class="row">
            <?php
            if($result->num_rows>0){
                while ($row=$result->fetch_assoc()){
                    echo '<div class="col s4"><div class="card"><div class="card-content"><div class="card-title">'.$row["name"]."</div> Target: ".$row["target"]."</div></div></div>";
                }
            }

            ?>

                <?php

                echo '<div class="col s4"><div class="card"><div class="card-title">'.$exercise[$i].'</div></div></div>';
                ?>
        </div>
    </div>

    </body>
</html>


