<?php
include("connection.php");
session_start();


if(isset($_POST['save']))
{
    $myusername=$_POST['username'];
    $mypassword=$_POST['password'];
    

    $sql="SELECT id FROM auth WHERE user_name='$myusername' and password='$mypassword'";

    $ddd = mysql_num_rows(mysql_query($sql));

    if($ddd<1)
    {
        $error="Your Login Name or Password is invalid";
    }
    else{

//        session_register("myusername");
        $_SESSION['login_user']=$myusername;

        header("location:index.php");
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Title -->
    <title>Admin Panel| Recruiter's Advice</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta charset="UTF-8">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="Steelcoders">

    <!-- Styles -->
    <link type="text/css" rel="stylesheet" href="assets\plugins\materialize\css\materialize.min.css">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="assets\plugins\material-preloader\css\materialPreloader.min.css" rel="stylesheet">


    <!-- Theme Styles -->
    <link href="assets\css\alpha.min.css" rel="stylesheet" type="text/css">
    <link href="assets\css\custom.css" rel="stylesheet" type="text/css">


    <script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<div class="loader-bg"></div>
<div class="loader">
    <div class="preloader-wrapper big active">
        <div class="spinner-layer spinner-blue">
            <div class="circle-clipper left">
                <div class="circle"></div>
            </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
        </div>
        <div class="spinner-layer spinner-spinner-teal lighten-1">
            <div class="circle-clipper left">
                <div class="circle"></div>
            </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
        </div>
        <div class="spinner-layer spinner-yellow">
            <div class="circle-clipper left">
                <div class="circle"></div>
            </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
        </div>
        <div class="spinner-layer spinner-green">
            <div class="circle-clipper left">
                <div class="circle"></div>
            </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
        </div>
    </div>
</div>
<div class="mn-content fixed-sidebar">
    <header class="mn-header navbar-fixed">

        <nav class="cyan darken-1">
            <div class="nav-wrapper row">

            </div>
        </nav>
    </header>

    
    <main class="mn-inner">

        <span style="font-size: 30px;">Admin Login</span>


        <form  action="login.php" method="post"  >
            <div class="row">
                <div class="col s12" align="center">

                    <div class="input-field col s4"  ></div>

                    <div class="input-field col s4">

                        <input id="username" name="username" type="text"  class="validate">
                        <label for="username" class="">Username</label>

                    </div>
                    <div class="input-field col s4"  ></div>
                    </div>

                <div class="col s12" align="center">

                    <div class="input-field col s4"  ></div>


                    <div class="input-field col s4">
                        <input id="password" name="password" type="password"  class="validate">
                        <label for="password" class="">Password</label>
                    </div>

                    <div class="input-field col s4"  ></div>

                    </div>

                <div class="col s12" align="center">
                    <div class="input-field col s4"  ></div>

                    <div class="col s4">
                        <button class="waves-effect waves-light btn indigo m-b-xs" name="save" type="submit"><b style="font-size:25px;">lOGIN</b></button>
                    </div>
                    <div class="input-field col s4"  ></div>
                </div>

            </div>



        </form>
    </main>





































</div>
<div class="left-sidebar-hover"></div>

<!-- Javascripts -->
<script src="assets\plugins\jquery\jquery-2.2.0.min.js"></script>
<script src="assets\plugins\materialize\js\materialize.min.js"></script>
<script src="assets\plugins\material-preloader\js\materialPreloader.min.js"></script>
<script src="assets\plugins\jquery-blockui\jquery.blockui.js"></script>
<script src="assets\js\alpha.min.js"></script>
<script src="assets\js\pages\form_elements.js"></script>


</body>
</html>