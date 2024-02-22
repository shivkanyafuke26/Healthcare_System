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
<h1 style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; ADMIN <span style="margin-left:30%  ;margin-top:5px">SEARCH PATIENT
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
<form method="post" action="searchpatient.php" class="patientsearch">

	<?php include ('../../datalayer/errors.php') ;?>

	<div class="input-group">
		<label style="font-weight: bold; font-size: 30px">Search By:</label>
		<label style="font-weight: bold">*Patient ID</label>
		<label style="font-weight: bold">*Patient Name</label>
		<input type="text" name="PID" >

	</div>
	<div class="input-group">
		<button type="submit" name="SearchP" class="btn">Search</button>
	</div>
		</form>
	</form>
		<?php 

         if (isset($_POST['SearchP'])) {

         ?>	<table class="table3" >
         	<caption style="margin-left: 34px;padding: 10px;font-weight: bold;font-size: 30px;" class="asd">Patient Information</caption>>
		<tr>
		<th>PatientID</th>
		<th>Name</th>
		<th>Address</th>
		<th>Contact Number</th>
		<th>Email</th>
		<th>BloodGroup</th>
		</tr> <?php  
		$PID =$mysqli -> real_escape_string($_POST['PID']);
		$sqlP="SELECT  * FROM  patients   WHERE 	UserID=('$PID') OR Name=('$PID') " ;
		$resultP=$mysqli->query($sqlP);
		if(mysqli_num_rows($resultP)==1){
			while ($rowP=$resultP->fetch_assoc()) {
				echo "<tr><td>".$rowP["UserID"]."</td><td>".$rowP["Name"]."</td><td>".$rowP["Address"]."</td><td>".$rowP["ContactNumber"]."</td><td>".$rowP['Email']."</td><td>".$rowP['Bloodtype']."</td></tr>";
			}
			echo "</table";	
		}
	}?>
 </table>
			<?php 	
				 if (isset($_POST['SearchP'])) {
         ?>	<table id="customers">
         	<caption style="margin-left: 34px;padding: 10px;font-weight: bold;font-size: 30px;" class="asd">Treatment History</caption>>
		<tr>
		<th>PatientID</th>
		<th>PatientName</th>
		<th>Treatment</th>
		<th>Doctor's Note</th>	
		</tr> <?php  
		$PID =$mysqli -> real_escape_string($_POST['PID']);

		$sqlP2="SELECT  * FROM  description   WHERE descID=('$PID') OR descName=('$PID') " ;
		$resultP2=$mysqli->query($sqlP2);
		if(mysqli_num_rows($resultP2)>1){
			while ($rowP2=$resultP2->fetch_assoc()) {

				echo "<tr><td>".$rowP2["descID"]."</td><td>".$rowP2["descName"]."</td><td>".$rowP2["treatment"]."</td><td>".$rowP2['Note']."</td></tr>";
			}
			echo "</table";
		}
	}?>
 </table>

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


