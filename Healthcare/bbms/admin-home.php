<?php

 include('connection.php');
 session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet"type="text/css"href="css/s1.css">
</head>    
<body>
 <div id="full">   
  <div id="inner_full">
    <div id="header"><a href="admin-home.php" style="text-decoration:none;color:white;"><h2 align="center">Blood Bank</a></h2></div>
    <div id="body">
        <br>
        <?php
         $un=$_SESSION['un'];
         if(!$un)
         {
            header("location:index.php");
         }
        ?>
        <h1>Welcome Admin</h1>
        <ul>
            <li><a href="donor-reg.php">Donor Registration</a></li>
            <li><a href="donor-list.php">Donor List</a></li>
            <li><a href="stoke-blood-list.php">Stoke Blood List</a></li>
        </ul><br><br><br><br>
        <ul>
            <li><a href="out-stoke-blood-list.php">Out Stoke Blood List</a></li>
            <li><a href="exchange-blood-list.php">Exchange Blood List</a></li>
            <li><a href="ngo-list.php">NGO List</a></li>
        </ul>
    </div>
    <div id="footer"  style="height:70px"><h4 align="center"></h4>
    <p align="center"><a href="logout.php"><font color="white">Logout</font></a></p>
</div>

</div>
</div>

</body>

</html>