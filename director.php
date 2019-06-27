<?php
session_start();
if (!isset($_SESSION['username'])){
    header('location:login.php');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Director</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/jquery-3.4.0.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="bootstrap/css/styles.css">
    <script type="text/javascript" src="bootstrap/js/custom.js"></script>
</head>
<body onload=display_ct();>
<div class="navigation">
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="director.php">Home</a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="registration.php" class="nav-link" name="btn_log">Register New User</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="users.php">View Users</a>
                </li>

                <li class="nav-item">
                    <!-- Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        <?php    echo $_SESSION['username']; ?>
                    </a>
                    <div class="dropdown-menu">
                        <a href="logout.php">Logout</a>
                    </div>
                </li>
                </li>
                <!--Clock-->
                <li class="nav-item">
                    <a id="ct" class="nav-link"></a>
                </li>
            </ul>
        </div>
    </nav>
</div>

<div class="container">
    <div class="title row">
        <h5>kodSpace Director </h5>
    </div>
    <div class="row">
         <div class="col-md-2 col-sm-2 col-2 w">

         </div>
         <div class="col-md-4 col-sm-4 col-4 x">
             <a href="#">
                 Add Students
             </a>
         </div>
         <div class="col-md-4 col-sm-4 col-4  y">
             <a href="#">
                 View Enrolment
             </a>
         </div>
         <div class="col-md-2 col-sm-2 col-2 z">

         </div>
    </div>

    <div class="row">
        <div class="col-md-2 col-sm-2 col-2 a">

        </div>
        <div class="col-md-4 col-sm-4 col-4 b">
            <a href="#">
                Add Staff
            </a>
        </div>
        <div class="col-md-4 col-sm-4 col-4 c">
            <a href="#">
                View Staff
            </a>
        </div>
        <div class="col-md-2 col-sm-2 col-2 d">

        </div>
    </div>

</div>


</body>
</html>