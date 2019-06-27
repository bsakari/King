<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <script src="../bootstrap/js/jquery-3.4.0.js"></script>
    <script src="../bootstrap/js/popper.min.js"></script>
    <script src="../bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="../bootstrap/css/styles.css">
    <script type="text/javascript" src="../bootstrap/js/custom.js"></script>
</head>
<body onload=display_ct(); class="vMarksBody">

<?php
if (isset($_GET['fName'])){
    $firstName = $_GET['fName'];
    $secondName = $_GET['sName'];
    $lastName = $_GET['lName'];
    $admissionNumber = $_GET['admNumber'];
    $Mathematics = $_GET['mMaths'];
    $English = $_GET['mEnglish'];
    $kiswahili = $_GET['mKiswahili'];
    $sst = $_GET['mSst'];
    $cre = $_GET['mCre'];
    $science = $_GET['mScience'];
    $totalmarks = $_GET['mTotalmarks'];
    $meanmarks = $_GET['mMeanmarks'];
    $grade = $_GET['mGrade'];


}
?>

        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 reportttl">
                <h4>kodSpace School Report Card</h4>
            </div>
            <div class="col-md-3"></div>
        </div>

        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 report_user_info">
                <table class="table">
                    <tr>
                        <td>Full Name:</td>
                        <td><?php echo $firstName." ".$secondName." ".$lastName;?></td>
                    </tr>
                    <tr>
                        <td>Admission Number:</td>
                        <td><?php echo $admissionNumber;?></td>
                    </tr>
                </table>
                <table class="table">
                    <tr>
                        <th>Subject</th>
                        <th>Marks</th>
                    </tr>
                    <tr>
                        <td>Mathematics:</td>
                        <td><?php echo $Mathematics;?></td>
                    </tr>
                    <tr>
                        <td>English:</td>
                        <td><?php echo $English;?></td>
                    </tr>
                    <tr>
                        <td>Kiswahili:</td>
                        <td><?php echo $kiswahili;?></td>
                    </tr>
                    <tr>
                        <td>Social Studies:</td>
                        <td><?php echo $sst;?></td>
                    </tr>
                    <tr>
                        <td>C.R.E:</td>
                        <td><?php echo $cre;?></td>
                    </tr>
                    <tr>
                        <td>Science:</td>
                        <td><?php echo $science;?></td>
                    </tr>
                </table>
                <table class="table">
                    <tr>
                        <td><h5>Total Marks:</h5></td>
                        <td><?php echo $totalmarks;?></td>
                        <td><h5>Mean Marks:</h5></td>
                        <td><?php echo $meanmarks;?></td>
                        <td><h5>Grade:</h5></td>
                        <td><?php echo $grade;?></td>
                    </tr>
                </table>
            </div>
            <div class="col-md-3"></div>

        </div>
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6 reportttlbtm">
        <a class="aprint" href="#">Print.</a>
        <a class="aback" href="viewStuentsMarks.php">Back</a>
    </div>
    <div class="col-md-3"></div>
</div>
</body>
</html>