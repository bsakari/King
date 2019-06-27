<?php
session_start();
if (isset($_POST['btn_log'])){
    $conn = mysqli_connect("localhost","root","","userregistration");
    $name = $_POST['user'];
    $pass = $_POST['password'];

    $selectQuery = "SELECT * FROM usertable WHERE name='$name' && password='$pass'";



    $result = mysqli_query($conn,$selectQuery);

    //Getting the Rank
    while ($row = mysqli_fetch_assoc($result)){
        extract($row);
    }

    $num = mysqli_num_rows($result);

    if ($num==1 && $rank == "admin"){
        $_SESSION['username'] = $name;
        header('location:admin.php');

    }elseif ($num==1 && $rank == "director"){
        $_SESSION['username'] = $name;
        header('location:director.php');

    }elseif ($num==1 && $rank == "principal"){
        $_SESSION['username'] = $name;
        header('location:principal.php');

    }elseif ($num==1 && $rank == "hod"){
        $_SESSION['username'] = $name;
        header('location:hod.php');

    }elseif ($num==1 && $rank == "classteach"){
        $_SESSION['username'] = $name;
        header('location:classteacher.php');
    }else{
        header('location:login.php');
    }
}

?>