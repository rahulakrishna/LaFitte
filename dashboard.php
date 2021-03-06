<!DOCTYPE html>
<html>
    <head>
        <script src="bower_components/jquery/dist/jquery.min.js"></script>
        <script src="bower_components/materialize/dist/js/materialize.js"></script>

        <link rel="stylesheet" href="bower_components/materialize/dist/css/materialize.min.css">
        <link rel="stylesheet" href="public/dash.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
                <li class="user-welcome"><a href="user_info.php">Welcome, Joel</a></li>
            </ul>
            <!-- navbar for mobile -->
            <ul class="side-nav" id="mobile-demo">
                <li><a href="gyms.php">Gyms</a></li>
                <li><a href="trainees.php">Trainees</a></li>
                <li><a href="dashboard.php">Dashboard</a> </li>
                <li class="user-welcome"><a href="user_info.php">Welcome, Joel</a></li>
            </ul>
        </div>
    </nav>
    </div>

    <div class="container">
        <div class="center"><h1>Current challenges!</h1></div>
        <div class="row">
            <?php
            if($result->num_rows>0){
                while ($row=$result->fetch_assoc()){
                    echo '<div class="col m4 s12">
                                <div class="card">
                                    <div class="card-content row    ">
                                        <div class="card-title">'.$row["name"]."</div> 
                                        Target: ".$row["target"]."
                                        <br/>
                                        <a class='btn red col s6' href='delete_challenge.php?id=$row[id]'>Delete</a>
                                        <a class='btn blue col s6' href='edit_challenge.php?id=$row[id]'>Edit</a>
                                        </div>
                                    </div>
                                </div>";
                }
            }

            ?>
        </div>

        <div class="center">Add a Challenge</div>
        <form class="center" action="add_challenge.php" method="get">
            <input type="text" placeholder="Name" name="ch_name"><br>
            <input type="date" placeholder="Target" name="ch_target">
            <input type="submit" class="btn orange">
        </form>
    </div>

    <script type="text/javascript">
        $(document).ready(function () {
            $('.slider').slider();
            $('.button-collapse').sideNav();

        });
    </script>

    </body>
</html>


