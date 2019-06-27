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
    <title>Class Teacher</title>
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
        <a class="navbar-brand" href="classteacher.php">Home</a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="classteacher_modules/viewStuentsMarks.php">View Student Marks</a>
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
    <div class="clock">
        <span id='ct' ></span>
    </div>
    <div class="row tchattl">
        <h3 class="title">Add Students Marks</h3>
    </div>

                <!-- Add Student Marks-->
                <form action="classteacher_modules/addStudentsMarksProcess.php" method="post" class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" name="fname" class="form-control inpt" required placeholder="First Name">
                        </div>
                        <div class="form-group">
                            <input type="text" name="sname" class="form-control inpt" required placeholder="Second Name">
                        </div>
                        <div class="form-group">
                            <input type="text" name="lname" class="form-control inpt" required placeholder="Last Name">
                        </div>
                        <div class="form-group">
                            <input type="text" name="admnumber" class="form-control inpt" required placeholder="Admission Number">
                        </div>
                        <div class="form-group">
                            <input type="text" name="maths" class="form-control inpt" required placeholder="Mathematics">
                        </div>
                        <input type="reset" value="Refresh" class="btn btn-info btn-block" name="btn_refresh">
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" name="english" class="form-control inpt" required placeholder="English">
                        </div>
                        <div class="form-group">
                            <input type="text" name="kiswahili" class="form-control inpt" required placeholder="Kiswahili">
                        </div>
                        <div class="form-group">
                            <input type="text" name="sst" class="form-control inpt" required placeholder="Social Studies">
                        </div>
                        <div class="form-group">
                            <input type="text" name="cre" class="form-control inpt" required placeholder="C.R.E">
                        </div>
                        <div class="form-group">
                            <input type="text" name="science" class="form-control inpt" required placeholder="Science">
                        </div>
                        <input type="submit" value="Add" class="btn btn-primary btn-block" name="btn_add">
                    </div>
                </form>
                <div class="col-md-3"></div>

        </div>


</body>
</html>