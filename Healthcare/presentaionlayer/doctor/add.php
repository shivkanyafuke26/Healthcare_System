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
	height: 20px;
	width: 93%;
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
}
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>
<header></br>
<h1 style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; ADMIN <span style="margin-left:30%  ;margin-top:5px">ADD DESCRIPTION
</span></h1>
	
</header>

</br></br>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			<a href="index2.php">My Info</a>
			<a href="doctorapp.php">My Appointments</a>
			<a href=" searchpatient.php">Search Patient</a>
			<a href="add.php">Add Description</a>
			<a href="../../signup/index.php">Logout</a>
</div>
<form method="post" action="add.php" class="add">







	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">


			<div class="input-group">
		<label style="font-weight: bold;">PatientID</label>
	   	<input type="text" name="Patientsearch" class="xd">


	</div>





	<div class="input-group">
		<button type="submit" name="SearchPA" class="btn">Search</button>
	</div>











	<?php  


	  if (isset($_POST['SearchPA'])) {

	$Patientsearch = mysqli_real_escape_string($mysqli,$_POST['Patientsearch']);
	
	$query="SELECT * FROM patients WHERE UserID=('$Patientsearch')";
	$result2=mysqli_query($mysqli,$query);
	

	
		
	while ($row2=mysqli_fetch_assoc($result2)) {
?>

<div class="input-group">
		<label>Patient ID</label>
		<input type="text" name="descID" value="<?php echo $row2['UserID']; ?>">

	</div>
	<div class="input-group">
		<label>Name</label>
		<input type="text" name="descName" value="<?php echo $row2['Name']; ?>">
	</div>
	<div class="input-group">
		<label>Treatment</label>
		<input type="text" name="Treatment">
	</div>
	<div class="input-group-add">
		<label>Note</label>
		<input style="" type="text" name="Note">
	</div>
	 <div class="input-group">
			<button type="submit" name="AddD" class="btn">Add</button>
			</div>
	<?php  
	}
	 ?>
			 </div>	  
<?php 
}
	    ?>
	    <?php  
if (isset($_POST['AddD'])) {
	include ('../../datalayer/errors.php');
	    	$errors=array();

	$descID 			= $mysqli -> real_escape_string($_POST['descID']);
	$descName 			= $mysqli -> real_escape_string($_POST['descName']);
	$treatment 			= $mysqli -> real_escape_string($_POST['Treatment']);
	$note				= $mysqli -> real_escape_string($_POST['Note']);

if (empty($treatment)) {
	array_push($errors,"Treatment is required");
	# code...
}

if (empty($note)) {
	array_push($errors,"Your note is required");
	# code...
}
if(count($errors)==0){
	$sql7 = "INSERT INTO  description (descID,descName,treatment,note,doctorIDdesc) VALUES ('$descID','$descName','$treatment','$note','$doctorprofile') ";
	if ($mysqli -> query($sql7)) { ?>

	<h2 class="thanks"> <?php printf("Your Description Is Added",$mysqli->affected_rows);?></h2>
		<?php 
	}
}
}
?>

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


