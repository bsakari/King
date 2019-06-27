<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/jquery-3.4.0.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="bootstrap/css/styles.css">
    <script type="text/javascript" src="bootstrap/js/custom.js"></script>
</head>
<body onload=display_ct();>

<div class="navigation row">
    <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
        <!-- Brand -->
        <a class="navbar-brand" href="#">Home</a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <form class="form-inline search" action="">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search">
                        <button class="btn btn-dark" type="submit">Search</button>
                    </form>
                </li
                <li class="nav-item">
                    <a href="registration.php" class="nav-link" name="btn_log">Register New User</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="users.php">View Users</a>
                </li>

                <li class="nav-item">

                </li>
                <!--Clock-->
                <li class="nav-item">
                    <a id="ct" class="nav-link"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
</div>

<div class="container">
   <div class="row">
       <table class="table table-hover table-dark">
           <tr>
               <th>Email</th>
               <th>Password</th>
               <th>Rank</th>
               <th>Remove</th>
               <th>Update</th>
           </tr>
           <?php
           $conn = mysqli_connect("localhost","root","","userregistration");
           if (!$conn){
               echo "Connection failed";
           }else{
               $selectQuery = "SELECT * FROM usertable";
               $selecting = mysqli_query($conn,$selectQuery);
               while ($row = mysqli_fetch_assoc($selecting)){
                   extract($row);
                   echo "
                    <tr>
                        <td>$name</td>
                        <td>$password</td>
                        <td>$rank</td>
                        <td><a href='#' class='btn btn-danger'>Remove</a></td>
                        <td><a href='#' class='btn btn-primary'>Update</a></td>            
                    </tr>";
               }
           }

           ?>
       </table>
   </div>
</div>

</body>
</html>