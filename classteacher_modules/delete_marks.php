<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 6/24/19
 * Time: 8:14 AM
 */

if (isset($_GET['adm_no'])){
    $adm_no = $_GET['adm_no'];
    $conn = mysqli_connect("localhost","root","","userregistration");
    if (!$conn){
        echo "Connection Failed";
    }else{
        $deleteQuery = "DELETE FROM `student_marks` WHERE adm_number=$adm_no";
        if (!$deleteQuery){
            echo "Error on query";
        }else{
        $deleting = mysqli_query($conn,$deleteQuery);
        if (!$deleting){
            echo "Deleting failed ".$adm_no;
        }else{
            header("location:viewStuentsMarks.php");
        }
        }
    }
}


?>