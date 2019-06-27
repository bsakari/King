<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
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
    <div class="login-box">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <!-- Login-->
                    <h2>Login Here</h2>
                    <form action="validation.php" method="post">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="user" class="form-control" required placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required placeholder="Password">
                        </div>
                        <input type="submit" value="Login" class="btn btn-primary btn-block" name="btn_log">
                    </form>

            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</div>


<?php


?>

</body>
</html>