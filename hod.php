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
    <title>HOD</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/jquery-3.4.0.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="bootstrap/css/styles.css">
    <script type="text/javascript" src="bootstrap/js/custom.js"></script>
</head>
<body onload=display_ct();>
<div class="container">
    <div class="clock">
        <span id='ct' ></span>
    </div>
    <a href="logout.php">Logout</a>
    <h1>Welcome HOD <?php    echo $_SESSION['username']; ?></h1>
</div>

</body>
</html>