<?php
    /**
    * Created by PhpStorm.
    * User: emobilis
    * Date: 6/22/19
    * Time: 3:13 PM
    */

    if (isset($_POST['btn_add'])){
    $conn = mysqli_connect("localhost","root","","userregistration");
    if (!$conn){
    echo "Connection Failed";
    }else{

    $firstName = $_POST['fname'];
    $secondName = $_POST['sname'];
    $lastName = $_POST['lname'];
    $admNumber = $_POST['admnumber'];
    $Mathematics = $_POST['maths'];
    $English = $_POST['english'];
    $Kiswahili = $_POST['kiswahili'];
    $SST = $_POST['sst'];
    $CRE = $_POST['cre'];
    $Science = $_POST['science'];
    $totalMarks = $Mathematics+$English+$Kiswahili+$SST+$CRE+$Science;
    $meanMark = $totalMarks/6;
    if ($meanMark<=10){
    $insertQuery = "INSERT INTO `student_marks`(`fname`, `sname`, `lname`, `adm_number`, `maths`, `english`, `kiswahili`, `sst`, `cre`, `science`, `totota_marks`, `mean_marks`, `grade`) VALUES (null ,'$firstName','$secondName','$lastName','$admNumber','$Mathematics','$English','$Kiswahili','$SST','$CRE','$Science','$totalMarks','$meanMark','E')";
    $inserting = mysqli_query($conn,$insertQuery);
    if (!$inserting){
    echo "Adding Marks Failed";
    }else{
    echo "Marks Added Successfully<br> <a href='../classteacher.php'>Ok</a>";

    }
    }elseif ($meanMark<=17){
    $insertQuery = "INSERT INTO `student_marks`(`fname`, `sname`, `lname`, `adm_number`, `maths`, `english`, `kiswahili`, `sst`, `cre`, `science`, `totota_marks`, `mean_marks`, `grade`) VALUES ('$firstName','$secondName','$lastName','$admNumber','$Mathematics','$English','$Kiswahili','$SST','$CRE','$Science','$totalMarks','$meanMark','D-')";
    $inserting = mysqli_query($conn,$insertQuery);
    if (!$inserting){
    echo "Adding Marks Failed";
    }else{
    echo "Marks Added Successfully<br> <a href='../classteacher.php'>Ok</a>";

    }
    }elseif ($meanMark<=24){
    $insertQuery = "INSERT INTO `student_marks`(`fname`, `sname`, `lname`, `adm_number`, `maths`, `english`, `kiswahili`, `sst`, `cre`, `science`, `totota_marks`, `mean_marks`, `grade`) VALUES ('$firstName','$secondName','$lastName','$admNumber','$Mathematics','$English','$Kiswahili','$SST','$CRE','$Science','$totalMarks','$meanMark','D')";
    $inserting = mysqli_query($conn,$insertQuery);
    if (!$inserting){
    echo "Adding Marks Failed";
    }else{
    echo "Marks Added Successfully<br> <a href='../classteacher.php'>Ok</a>";

    }
    }elseif ($meanMark<=31){
    $insertQuery = "INSERT INTO `student_marks`(`fname`, `sname`, `lname`, `adm_number`, `maths`, `english`, `kiswahili`, `sst`, `cre`, `science`, `totota_marks`, `mean_marks`, `grade`) VALUES ('$firstName','$secondName','$lastName','$admNumber','$Mathematics','$English','$Kiswahili','$SST','$CRE','$Science','$totalMarks','$meanMark','D+')";
    $inserting = mysqli_query($conn,$insertQuery);
    if (!$inserting){
    echo "Adding Marks Failed";
    }else{
    echo "Marks Added Successfully<br> <a href='../classteacher.php'>Ok</a>";

    }
    }elseif ($meanMark<=38){
    $insertQuery = "INSERT INTO `student_marks`(`fname`, `sname`, `lname`, `adm_number`, `maths`, `english`, `kiswahili`, `sst`, `cre`, `science`, `totota_marks`, `mean_marks`, `grade`) VALUES ('$firstName','$secondName','$lastName','$admNumber','$Mathematics','$English','$Kiswahili','$SST','$CRE','$Science','$totalMarks','$meanMark','C-')";
    $inserting = mysqli_query($conn,$insertQuery);
    if (!$inserting){
    echo "Adding Marks Failed";
    }else{
    echo "Marks Added Successfully<br> <a href='../classteacher.php'>Ok</a>";

    }
    }elseif ($meanMark<=17){
    $insertQuery = "INSERT INTO `student_marks`(`fname`, `sname`, `lname`, `adm_number`, `maths`, `english`, `kiswahili`, `sst`, `cre`, `science`, `totota_marks`, `mean_marks`, `grade`) VALUES ('$firstName','$secondName','$lastName','$admNumber','$Mathematics','$English','$Kiswahili','$SST','$CRE','$Science','$totalMarks','$meanMark','C')";
    $inserting = mysqli_query($conn,$insertQuery);
    if (!$inserting){
    echo "Adding Marks Failed";
    }else{
    echo "Marks Added Successfully<br> <a href='../classteacher.php'>Ok</a>";

    }
    }elseif ($meanMark<=52){
    $insertQuery = "INSERT INTO `student_marks`(`fname`, `sname`, `lname`, `adm_number`, `maths`, `english`, `kiswahili`, `sst`, `cre`, `science`, `totota_marks`, `mean_marks`, `grade`) VALUES ('$firstName','$secondName','$lastName','$admNumber','$Mathematics','$English','$Kiswahili','$SST','$CRE','$Science','$totalMarks','$meanMark','C+')";
    $inserting = mysqli_query($conn,$insertQuery);
    if (!$inserting){
    echo "Adding Marks Failed";
    }else{
    echo "Marks Added Successfully<br> <a href='../classteacher.php'>Ok</a>";

    }
    }elseif ($meanMark<=59){
    $insertQuery = "INSERT INTO `student_marks`(`fname`, `sname`, `lname`, `adm_number`, `maths`, `english`, `kiswahili`, `sst`, `cre`, `science`, `totota_marks`, `mean_marks`, `grade`) VALUES ('$firstName','$secondName','$lastName','$admNumber','$Mathematics','$English','$Kiswahili','$SST','$CRE','$Science','$totalMarks','$meanMark','B-')";
    $inserting = mysqli_query($conn,$insertQuery);
    if (!$inserting){
    echo "Adding Marks Failed";
    }else{
    echo "Marks Added Successfully<br> <a href='../classteacher.php'>Ok</a>";

    }
    }elseif ($meanMark<=66){
    $insertQuery = "INSERT INTO `student_marks`(`fname`, `sname`, `lname`, `adm_number`, `maths`, `english`, `kiswahili`, `sst`, `cre`, `science`, `totota_marks`, `mean_marks`, `grade`) VALUES ('$firstName','$secondName','$lastName','$admNumber','$Mathematics','$English','$Kiswahili','$SST','$CRE','$Science','$totalMarks','$meanMark','B')";
    $inserting = mysqli_query($conn,$insertQuery);
    if (!$inserting){
    echo "Adding Marks Failed";
    }else{
    echo "Marks Added Successfully<br> <a href='../classteacher.php'>Ok</a>";

    }
    }elseif ($meanMark<=73){
    $insertQuery = "INSERT INTO `student_marks`(`fname`, `sname`, `lname`, `adm_number`, `maths`, `english`, `kiswahili`, `sst`, `cre`, `science`, `totota_marks`, `mean_marks`, `grade`) VALUES ('$firstName','$secondName','$lastName','$admNumber','$Mathematics','$English','$Kiswahili','$SST','$CRE','$Science','$totalMarks','$meanMark','B+')";
    $inserting = mysqli_query($conn,$insertQuery);
    if (!$inserting){
    echo "Adding Marks Failed";
    }else{
    echo "Marks Added Successfully<br> <a href='../classteacher.php'>Ok</a>";

    }
    }elseif ($meanMark<=80){
    $insertQuery = "INSERT INTO `student_marks`(`fname`, `sname`, `lname`, `adm_number`, `maths`, `english`, `kiswahili`, `sst`, `cre`, `science`, `totota_marks`, `mean_marks`, `grade`) VALUES ('$firstName','$secondName','$lastName','$admNumber','$Mathematics','$English','$Kiswahili','$SST','$CRE','$Science','$totalMarks','$meanMark','A-')";
    $inserting = mysqli_query($conn,$insertQuery);
    if (!$inserting){
    echo "Adding Marks Failed";
    }else{
    echo "Marks Added Successfully<br> <a href='../classteacher.php'>Ok</a>";

    }
    }else{
    $insertQuery = "INSERT INTO `student_marks`(`fname`, `sname`, `lname`, `adm_number`, `maths`, `english`, `kiswahili`, `sst`, `cre`, `science`, `totota_marks`, `mean_marks`, `grade`) VALUES ('$firstName','$secondName','$lastName','$admNumber','$Mathematics','$English','$Kiswahili','$SST','$CRE','$Science','$totalMarks','$meanMark','A')";
    $inserting = mysqli_query($conn,$insertQuery);
    if (!$inserting){
    echo "Adding Marks Failed";
    }else{
    echo "Marks Added Successfully<br> <a href='../classteacher.php'>Ok</a>";

    }
    }

    }

    }


?>