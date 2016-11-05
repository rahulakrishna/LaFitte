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

$user="joel";

$sql="SELECT * FROM challenges";
$result=$conn->query($sql);
?>
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
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="get">
            <div class="input-field col s6">
                <input placeholder="Name" id="first_name" type="text" class="validate">
                <label for="first_name">First Name</label>
            </div>
        </form>
    </div>
</div>

</body>
</html>