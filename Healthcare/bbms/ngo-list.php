<?php

 include('connection.php');
 session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ngo List</title>
    <link rel="stylesheet"type="text/css"href="css/s1.css">
    <style type="text/css">
        td{
            width: 200px;
            height:40px;
        }

     </style>
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
        <h1>NGO List</h1>
        <center><div id="form">
            <form action="" method="POST">
            <table>
                <tr>
                <td ><b><font color="blue">Sr NO</font></b></td>
                <td ><b><font color="blue">Name of the Blood bank</font></b></td>
                <td ><b><font color="blue">Address</font></b></td>
                <td ><b><font color="blue">telephone</font></b></td>
                </tr>  
                <tr>
                <td ><b>1</b></td>
                <td ><b> ACTREC BLOOD BANK</b></td>
                <td ><b>2nd Floor, Jussawala Shodika,
                        Department of Transfusion Medicine,
                        ACTREC, Tata Memorial Centre, Sector
                        22, Kharghar, Navi Mumbai </b></td>
                <td ><b>022-21026290 </b></td>
                </tr>  
            </table>
        </form>
        
        
    </div>
    <div id="footer"  style="height:70px"><h4 align="center"></h4>
	</br>
    <p align="center"><a href="logout.php"><font color="white">Logout</font></a></p>
</div>

</div>
</div>

</body>

</html>