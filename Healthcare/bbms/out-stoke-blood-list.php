<?php

 include('connection.php');
 session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Out stoke Blood List</title>
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
        <h1>Out Stoke Blood List</h1>
        <center><div id="form">
            <form action="" method="POST">
            <table>
                <tr>
                <td ><center><b><font color="blue">Name</font></b></center></td>
                <td ><center><b><font color="blue">Mobile No</font></b></center></td>
                <td ><center><b><font color="blue">Blood Group</font></b></center></td>
                </tr>  
                <tr>
                <td ><center><b>abc</b></center></td>
                <td ><center><b>123456789</b></center></td>
                <td ><center><b>O+</b></center></td>
                </tr>  
                <tr>
                <td ><center><b>pqr</b></center></td>
                <td ><center><b>345678129</b></center></td>
                <td ><center><b>AB+</b></center></td>
                </tr> 
                <tr>
                <td ><center><b>xyz</b></center></td>
                <td ><center><b>456781239</b></center></td>
                <td ><center><b>B+</b></center></td>
                </tr> 
            </table>
        </form>
        <?php
        $q=$db->query("SELECT * FROM out_stoke_b");
        while($r1=$q->fetch(PDO::FETCH_OBJ))
        {
            ?>
            <tr>
                <td><center><?=$r1->name;?></center></td>
                <td><center><?=$r1->mno;?></center></td>
                <td><center><?=$r1->bname;?></center></td>
                </tr>

            <?php
        }
        ?>
        </div> </center>

        
    </div>
    <div id="footer"  style="height:70px"><h4 align="center"></h4></br>
    <p align="center"><a href="logout.php"><font color="white">Logout</font></a></p>
</div>

</div>
</div>

</body>

</html>