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
.header{
	width: 30%;
	margin: 50px auto 0px;
	color: white;
	background: #000080;
	text-align: center;
	border: 1px solid #B0C4DE;
	border-bottom: none;
	border-radius: 10px 10px 0px 0px ;
	padding: 20px;
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

form{

	width: 30%;
	margin:0px auto;
	padding: 20px;
	border: 1px solid #B0C4DE;
	background: white;
	border-radius: 0px 0px 10px 10px;

}
.input-group{
	margin: 10px 0px 10px 0px;
	
}

.input-group label{
	display: block;
	text-align: left;
	margin: 5px;

}

.input-group input{
	height: 30px;
	width: 98%;
	padding: 5px 10px;
	font-size: 16px;
	border-radius: 5px;
	border:1px solid grey;

}
   
.xd{
  height: 30px;
	width: 98%;
	padding: 5px 10px;
	font-size: 16px;
	border-radius: 5px;
	border:1px solid grey;}  	
.btn{
	margin :0 50% 0 40%;
	padding: 10px 30px 10px 30px;
	font-size: 15px;
	color: white;
	background: #000080;
	border:none;
	border-radius: 5px;
}	
	
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>
<header></br>
<h1 style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; ADMIN <span style="margin-left:30%  ;margin-top:5px">Donate Organ
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
	<div class="header">
	<h2>Donate Organ</h2>
</div>

	<form method="post" action="donate.php">

	<?php include ('../../datalayer/errors.php'); ?>




	<?php  
if (isset($_POST['Donate'])) {

	$DUserID 			= $mysqli -> real_escape_string($_POST['DUserID']);
	$DUsername 			= $mysqli -> real_escape_string($_POST['DName']);
	$DAddress 			= $mysqli -> real_escape_string($_POST['DAddress']);
	$DContactNumber		= $mysqli -> real_escape_string($_POST['DContactNumber']);
	$DEmail 			= $mysqli -> real_escape_string($_POST['DEmail']);
	$Dbloodtype 		= $mysqli -> real_escape_string($_POST['Dbloodtype']);
	$Dorgan				= $mysqli -> real_escape_string($_POST['Organ']);
	




	if (empty($DUserID)) {
	array_push($errors,"UserID is required");
	# code...
}

if (empty($DUsername)) {
	array_push($errors,"UserName is required");
	# code...
}


if (empty($DAddress)) {
	array_push($errors,"Address is required");
	# code...
}

if (empty($DContactNumber)) {
	array_push($errors,"Contact Number is required");
	# code...
}


if (empty($DEmail)) {
	array_push($errors,"Email is required");
	# code...
}


if (empty($Dbloodtype)) {
	array_push($errors,"Bloodtype is required");
	# code...
}







if(count($errors)==0){



	$sql7 = "INSERT INTO  donor (donarID,donarname,donaraddress,donarnumber,donaremail,donarblood,organ) VALUES ('$DUserID','$DUsername','$DAddress','$DContactNumber','$DEmail','$Dbloodtype','$Dorgan') ";
	if ($mysqli -> query($sql7)) { ?>

	<h2 class="thanks"> <?php printf("Thanks For Donation",$mysqli->affected_rows);?></h2>
			
			
		<?php 



	}
}
}














?>


	<div class="input-group">
		<label>User ID</label>
		<input type="text" name="DUserID" value=" <?php echo "" .isset($_SESSION['UserID']);?> " >

	</div>


	<div class="input-group">
		<label>Name</label>
		<input type="text" name="DName" value="<?php echo $col['Name']; ?> " >


	</div>

	<div class="input-group">
		<label>Address</label>
		<input type="text" name="DAddress" value="<?php echo $col['Address']; ?>">

	</div>

	<div class="input-group">
		<label>Contact Number</label>
		<input type="text" name="DContactNumber" value=" <?php echo $col['ContactNumber']; ?>">


	</div>


	<div class="input-group">
		<label>Email address</label>
		<input type="text" name="DEmail" value="<?php echo $col['Email']; ?>">

	</div>

	<div class="input-group">
		<label>Blood type</label>
		<input type="text" name="Dbloodtype" value="<?php echo $col['Bloodtype']; ?>">

	</div>

	<div class="input-group">
		<label>Type Of Organ</label>
	   	<select name="Organ" class="xd">
	   		<option value="Blood">Blood</option>
	   		<option value="Heart">Heart</option>
	   		<option value="kidney">kidney</option>
	   		<option value="Eye">Eye</option>

	   	</select>

	<div class="input-group">
		<button type="submit" name="Donate" class="btn">Donate</button>
	</div>

</div>





</form>



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


