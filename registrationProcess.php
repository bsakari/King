<?php
session_start();
if (isset($_POST['btn_reg'])){
    $conn = mysqli_connect("localhost","root","","userregistration");
    $name = $_POST['user'];
    $pass = $_POST['password'];
    $privilege = $_POST['privilege'];

    $selectQuery = "SELECT * FROM usertable WHERE name='$name'";

    $result = mysqli_query($conn,$selectQuery);

    $num = mysqli_num_rows($result);

    if ($num==1){
        echo "Username Already Exixsts <a href='login.php'>Ok</a>";
        die();
    }else{
        $regQuery = "INSERT INTO `usertable`(`name`, `password`,`rank`) VALUES ('$name','$pass','$privilege')";
        $register = mysqli_query($conn,$regQuery);
        if (!$register){
            echo "Registration Failed";
        }else{
            echo "Registration successful<br>$privilege";
            header('location:registration.php');
        }
    }
}

?>