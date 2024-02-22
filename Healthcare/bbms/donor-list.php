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
        <h1>Donor List</h1>
        <center><div id="form">
            <table>
                <tr>
                    <td><center><b><font color="blue">Name</font></b></center></td>
                    <td><center><b><font color="blue">Father's Name</font></b></center></td>
                    <td><center><b><font color="blue">Address</font></b></center></td>
                    <td><center><b><font color="blue">City</font></b></center></td>
                    <td><center><b><font color="blue">Age</font></b></center></td>
                    <td><center><b><font color="blue">Blood Group</font></b></center></td>
                    <td><center><b><font color="blue">Mobile No</font></b></center></td>
                    <td><center><b><font color="blue">E-mail</font></b></center></td>
                </tr>
                <?php
                 $q=$db->query("SELECT * FROM donor_registration");
                 while($r1=$q->fetch(PDO::FETCH_OBJ  ))
                 {
                    ?>
                    <tr>
                    <td><center><?=$r1->name;?></center></td>
                    <td><center><?=$r1->fname;?></center></td>
                    <td><center><?=$r1->address;?></center></td>
                    <td><center><?=$r1->city;?></center></td>
                    <td><center><?=$r1->age;?></center></td>
                    <td><center><?=$r1->bgroup;?></center></td>
                    <td><center><?=$r1->mno;?></center></td>
                    <td><center><?=$r1->email;?></center></td>
                    
                </tr>

                    <?php
                 }
                ?>
                
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