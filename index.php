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


    if(isset($_POST['login']) && !empty($_POST['la_username']) && !empty($_POST['la_password'])){
            if($_POST['la_username']=="joel" && $_POST['la_password']=="thepasswordofjoel"){
                $msg="Success!";
                redirect("dashboard.php");
            }
            else{
                $msg="Invalid username or password";
            }
        }
        else{
            $msg="Enter the details please!";
        }
    ?>
</head>
<body id="login">
    <div class="container">
        <div class="orange-text center">
            <h1>Welcome to LaFitte!</h1>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col s6 push-s3">
                <div class="card col s12">
                    <div class="card-image">
                        <img src="public/images/back.jpg">
                    </div>
                    <div class="card-content">
                        <h4 class="center">Login</h4>
                        <h6 class="center"><?php echo $msg;?></h6>
                        <div class="center-align">
                            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                                <input type="text" id="la_username" name="la_username" placeholder="username">
                                <input type="password" id="la_password" name="la_password" placeholder="password">
                                <input type="submit" class="btn orange" name="login">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>