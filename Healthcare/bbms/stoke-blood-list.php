<?php

 include('connection.php');
 session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Donor Registration</title>
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
        <h1>Stoke Blood List </h1>
        <center><div id="form">
            <table>
                <tr>
                <td><center><b><font color="blue">Name</font></b></center></td>
                <td><center><b><font color="blue">QTY</font></b></center></td>

                </tr>
                 <tr>
                    <td><center>O+</center></td>
                    <td><center>
                        <?php
                        $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='O+'");
                         echo $row=$q->rowcount();
                        ?>
                    </center></td>
                </tr>
                <tr>
                    <td><center>AB+</center></td>
                    <td><center>
                    <?php
                        $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='AB+'");
                         echo $row=$q->rowcount();
                        ?>
                    </center></td>
                </tr>
                <tr>
                    <td><center>AB-</center></td>
                    <td><center>
                    <?php
                        $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='AB-'");
                         echo $row=$q->rowcount();
                        ?>
                    </center></td>
                </tr>
                <tr>
                    <td><center>A+</center></td>
                    <td><center>
                    <?php
                        $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='A+'");
                         echo $row=$q->rowcount();
                        ?>
                    </center></td>
                </tr>
               
                <tr>
                    <td><center>B+</center></td>
                    <td><center>
                    <?php
                        $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='+'");
                         echo $row=$q->rowcount();
                        ?>
                    </center></td>
                </tr>
                
            </table>
        </center>
        </div>
        
    </div>
    <div id="footer"  style="height:70px"><h4 align="center"></h4></br>
    <p align="center"><a href="logout.php"><font color="white">Logout</font></a></p>
</div>

</div>
</div>

</body>

</html>