<?php include('../datalayer/server.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<style>
	
*{
	margin: 0px;
	padding: 0px;
}
.Abody{
	font-size: 120%;
	background: #fff;

}
.Aheader{
	width: 30%;
	margin: 50px auto 0px;
	color: white;
	background: #000080;
	text-align: center;
	border: 2px solid #f2f2f2;
	border-bottom: none;
	border-radius: 10px 10px 0px 0px ;
	padding: 20px;
}
.Aform{

	width: 30%;
	margin:0px auto;
	padding: 20px;
	border: 2px solid #f2f2f2;
	background: white;
	border-radius: 0px 0px 10px 10px;

}


.input-groupA{
	margin: 10px 0px 10px 0px;
}

.input-groupA label{
	display: block;
	text-align: left;
	margin: 3px;

}

.input-groupA input{
	height: 30px;
	width: 93%;
	padding: 5px 10px;
	font-size: 16px;
	border-radius: 5px;
	border:2px solid grey;

}

.btnA{

	padding: 10px;
	font-size: 15px;
	color: white;
	background: #000080;
	border:none;
	border-radius: 5px;
}

.error{

	width: 92%;
	margin: 0px auto;
	padding: 10px;
	border:1px solid #a94442;
	color: #a94442;
	background: #f2dede;
	border-radius: 5px;
	text-align: left;
	
}
	</style>
</head>
<body class="Abody">
	<div class="Aheader">
	<h2>Admin Login</h2>
</div>

<form method="post" action="login3.php" class="Aform">

	<?php include ('../datalayer/errors.php')?>

	<div class="input-groupA">
		<label>Admin ID</label>
		<input type="text" name="adminID">
	</div>
	<div class="input-groupA">
		<label>Password</label>
		<input type="Password" name="adminpassword">



	<div class="input-groupA">
		<button type="submit" name="Login3" class="btnA"> Login</button>
		</div>
		
		<p>
		Not a member?<a href="http://localhost/Doctor_Patient/signup/index.php">Back </a></br>
		</p>

</form>

</body>
</html>