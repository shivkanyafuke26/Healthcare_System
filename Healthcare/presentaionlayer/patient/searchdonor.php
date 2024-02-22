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
	
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>
<header></br>
<h1 style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; ADMIN <span style="margin-left:30%  ;margin-top:5px">Search Donar
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

	
<form method="post" action="searchdonor.php">

	<?php include ('../../datalayer/errors.php') ;?>

	<div class="input-group">
		<label style="font-weight: bold;">Search By:<br>*Blood Group<br>*Organ</label>
		<input type="text" name="dID3" >

	</div>

	<div class="input-group">
		<button type="submit" name="SearchD" class="btn">Search</button>
	</div>

	







		</form>
	</form>


	

		<?php 

         if (isset($_POST['SearchD'])) {

         ?>	<table id="customers" style="margin-left:10%">
		<tr>
		<th>DonorID</th>
		<th>DonorName</th>
		<th>DonorAddress</th>
		<th>DonorContactNumber</th>
		<th>DonorEmail</th>
		<th>DonorBloodGroup</th>
		<th>DonorOrgan</th>



		</tr> <?php  


		$dID3 =$mysqli -> real_escape_string($_POST['dID3']);

		$sql8="SELECT  * FROM  donor   WHERE donarblood=('$dID3') OR organ=('$dID3') ";
		$result8=$mysqli->query($sql8);
		if(mysqli_num_rows($result8)>=1){
			while ($row8=$result8->fetch_assoc()) {

				echo "<tr><td>".$row8["donarID"]."</td><td>".$row8["donarname"]."</td><td>".$row8["donaraddress"]."</td><td>".$row8["donarnumber"]."</td><td>".$row8['donaremail']."</td><td>".$row8['donarblood']."</td><td>".$row8['organ']."</td></tr>";
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


