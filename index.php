<?php
	session_start();
?>

<!DOCTYPE html>

<html>
	
<head>
	<title> Health Insurance Management System </title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="styles/styles.css">

</head>

<body>
	<div class="top">
		<img src="images/logo.png" width="140" height="100" class="logo">
		<div class="topic">
			<h1>HI INSURANCE</h1>
		</div>
		<img src="images/usernew.webp" width="50" height="50" class="user">
		
		<div>
			<?php
				if (isset($_SESSION["InsureeID"])) {
					echo '
					<a href="profile.php"><button type="button"><span></span>PROFILE</button></a>
					';

					echo '
					<a href="includes/logout.inc.php"><button type="button"><span></span>LOG OUT</button></a>
					';
				}
				else {
					echo '
					<a href="login.php"><button type="button"><span></span>LOG IN</button></a>
					';

					echo '
					<a href="Registation form.php"><button type="button"><span></span>SIGN IN</button></a>
					';
				}
			?>
			<!-- <a href="login.php"><button type="button"><span></span>LOG IN</button></a>
			<a href="signup.php"><button type="button"><span></span>SIGN IN</button></a> -->
		</div>
	</div>
	<hr>
	
	<div class="navigation">
		<ul>
			<li><a href="home_A.html"> HOME </a> </li>
			<li><a href="ourproducts.php"> OUR PRODUCT </a> </li>
			<li><a href="Appointment.php">COLLABORATIONS  </a> </li>
			<li><a href="news.html"> NEWS </a> </li>
			<li><a href="AboutUs.html"> ABOUT US </a> </li>
			<li><a href="Contact us.html"> CONTACT US</a> </li>
			<li><a href="contactus.php"> Feedback</a> </li>
		</ul>
	</div>
	<hr>
	<br>
	
	<!--ADD BODY HERE!-->
	
	
	<br>
	<hr>
	
	
	<div class="bottom">
		<img src="images/logo.png" width="180" height="140" class="logo">
		<div class="text">
		    <ul>
				<li><h2> Help & Support</h2></li><br>
				<li><a href="how to claim.html"><h4> How to Claim </h4></li><br>
				<li><a href="#"><h4> Support for Members </h4></li><br>
	            <li><a href="#"><h4> Member FAQ </h4></li>
			</ul>
		</div>
		
	</div>
</body>
</html>	