<?php

	session_start();
	$con = mysqli_connect('localhost','root',' ');
	mysqli_select_db($con, 'userregistration');
	//set_include_path("index.html");
	//$mark=$_POST['userscore'];
	 //echo '<script type="text/JavaScript">
     //</script>'
     //$somevar = $_GET["userScore"]; //puts the uid varialbe into $somevar
	?>

<!DOCTYPE html>
<html>
<head>
	<title>MY profile</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="apti1.css">
		<link rel="javascript" type="text/javascript" href="js/script.js">
		<link rel="icon" href="images/logo.jpeg" type="image/icon type">
		<style>
			.logout{
				float:right;
				border-radius: 0.5rem;
				border: none;
				text-align: center;
				color: #fff;
				font-size: 21px;
				padding: 10px;
				width: 125px;
				text-decoration: none;
				background-color:#44C513;
				transition: all 0.4s;
				cursor: pointer;
				margin: 1px;
				font-family: "Lobster", serif;
				box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
				display:inline;
				margin-left:1.5rem;
			  }

		</style>


</head>

<body>
	<a href="apti.html" ><img src="images/logo2.jpeg" height="80px" ></a>
		<a class="logout" href="logout.php"> LOGOUT </a>


		<div class="header">
			<ul>
				<li><a href="apti1.html">Home</a></li>
				<li><a href="ar.html">Aptitude</a></li>
				<li><a href="interview.html">Interview</a></li>
				<li><a href="test.php">Online test</a></li>
				<li style="float:right;"><a href="contactus.html">Queries</a></li>
				<li style="float:right;"><a href="profile.php">Profile</a></li>

			</ul>
		</div>
		<br>
	<h1><center><style="color: green;">My Profile</style></center></h1>
	<br>
	<h2>
		Welcome <?php echo $_SESSION['username']; ?>
	</h2>
	<!--<h3>
		Test Attempted
		<table>
			<tr>
				<th> Topic</th>
				<th> Score</th>
			</tr>
			<tr>
				<th> Profit & Loss</th>
				<th> 
					<?php// echo $_GET['userScore'];?>
				
				</th>
			</tr>

-->
	<h2>Happy Learning!!</h2>
</body>
</html>
