<?php include '../../datalayer/bookserver.php'; ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
}
header{
	width: 100%;
	height: 100px;
	background-color: #000080;
	color: #f1f1f1;
}
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #000080;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 100px;
}

.sidenav a {
  padding: 8px 8px 18px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #fff;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}
.headerP{
	width: 15%;
	margin-top: 60px;
	color: white;
	background: #000080;
	text-align: center;
	border-radius: 10px 10px 5px 5px;
	border-bottom: none; 
	border :1px solid #000080;
	padding: 10px;
	margin-left:40px ;
}
.infoP{
margin-left:-1px; 
margin-top:0px ;
width: 40%;
padding: 20px;
border :3px solid #000080 ;
background: white; 
border-radius: 10px 10px 10px 10px;
}
.infoP1{
	margin-left:500px; 
	margin-top:0px ;
	width: 40%;
	padding: 20px ;
	border:none ;
background: white; 
}
.xd{
	margin-left:40% ;
	width: 30%;
	text-align: center;
	margin-top:60px; 
	background-color: #000080; 
	color: #f1f1f1;
}
.xa
{
	margin-left:40% ;
	margin-top:0px; 
	background-color: #f1f1f1; 
	color: #000080;
	height: 200px;
	width: 50%;
	padding: 5px 10px;
	font-size: 16px;
	border-radius: 5px;
	border:1px solid grey;
	}
	
.btn{
	margin :0 50% 0 80%;
	padding: 10px 30px 10px 30px;
	font-size: 15px;
	color: white;
	background: #000080;
	border:none;
	border-radius: 5px;
}
.btn1{
	border-radius: 5px;
	margin-left: 80%; 
	background: #000080;
	color: white;
	border:none;padding: 10px 20px 10px 20px;
	}
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 90%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #000080;
  color: white;
	
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>
<header></br>
<h1 style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; ADMIN <span style="margin-left:35%  ;margin-top:5px">User Dashboard
</span></h1>
	
</header>

</br></br>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			<a href=" index.php">MyInfo</a>
			<a href=" book.php">Book Appointment</a>
			<a href=" view.php">View Appointment</a>
			<a href="cancel.php">Cancel Booking</a>
			<a href=" searchdoctor.php">Search Doctor</a>
			<a href="donate.php">Donate Organ</a>
			<a href="searchdonor.php">Search Donar</a>
			<a href="../../signup/index.php">Logout</a>
</div>

	<div class="headerP" >
	<h2>My Information</h2>
</div>



<form method="post" action="index.php"  class="infoP">

    




<div class="contentP" style="font-weight: bold;">



	<label>ID: <?php echo "" .isset($_SESSION['UserID']);?></label>

	 	   <br>
	 	   <br>
	 	   <label> Email : <?php echo $col['Email']; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Name : <?php echo $col['Name']; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Address : <?php echo $col['Address']; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Contact Number : <?php echo $col['ContactNumber']; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Blood Type : <?php echo $col['Bloodtype']; ?></label>
	 	   	 	   <br>
	 	   <br>
    

	 	   </div>
    
	

	 	  
	
</div>
	<div class="input-group">
		<button type="submit" name="feedback" class="btn1">Send Feedback</button>
	</div>

  
</form>

	<?php  


	  if (isset($_POST['feedback'])) {
?>
<form method="post" action="index.php" class="infoP1">
<div class="input-group">
		<div  class="header" style="width: 50%;height: 50px;margin-top:-450px;color: white;background: #000080;text-align: center;border-radius: 10px 10px 5px 5px;border-bottom: none; border :1px solid #000080;padding: 10px 13px 10px 13px;margin-left:50%  ">
	<h2>Feedback</h2>
</div>
<textarea name="feedx" placeholder="Write something.." style="height:300px;width: 500px ; margin-top:0px;margin-left: 40%;border:2px solid #000080;border-radius: 10px" ></textarea>
<button type="submit" name="sendfeedback" class="btn" >Send</button>


	
</div>


 <?php  }
 

?>
</form>



</body>
</html>

<!--<?php if (isset($_SESSION['success'])) : ?> 
            <div class="error success" > 
                <h3> 
                    <?php
                         
                        unset($_SESSION['success']); 
                    ?> 
                </h3> 
            </div> 
        <?php endif ?> 

        $Patientsearch = mysqli_real_escape_string($mysqli,$_POST['Patientsearch']);
	
	$query="SELECT * FROM patients WHERE UserID=('$Patientsearch')";
	$result2=mysqli_query($mysqli,$query);

   
        <!-- information of the user logged in -->
        <!-- welcome message for the logged in user -->	
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
   
</body>
</html> 


