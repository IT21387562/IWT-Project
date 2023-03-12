<!DOCTYPE html>

<html>
	<title> Health Insurance Management System </title>
	<link rel="stylesheet" href="styles/shriwanthi.css">
    <script src="js\myscript.js"></script>
	<?php
	require 'config.php';
	?>
<body>
	<div class="top">
		<img src="images/logo.png" width="140" height="100" class="logo">
		<div class="topic">
			<h1>HI INSURANCE</h1>
		</div>
		<img src="images/usernew.webp" width="50" height="50" class="user">
		<div>
				<a href="User Accout.html"><button type="button"><span></span>use profile</button></a>
				<a href="login.php"><button type="button"><span></span>Sign out</button></a>
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
	<div id="appointment">
	    
            <?php
			    echo "<h1> Appointment Details.</h1><hr ><br>";
			    echo "Name :".$_POST["fname"]."<br>";
				echo "Insuree ID :".$_POST["I_id"]."<br>";
				echo "Doctor's Name :".$_POST["d_name"]."<br>";
				echo "Preferred Hospital :".$_POST["h_name"]."<br>";
				echo "Date :".$_POST["a_date"]."<br>";
				echo "Time :".$_POST["a_time"]."<br>";
				echo "***You will be notified of Appointment confirmation Via Email*** ";
				
				  
				   $I_Name=$_POST["fname"];
				   $I_ID=$_POST["I_id"];
				   $D_Name=$_POST["d_name"];
                   $H_Name=$_POST["h_name"];
                   $A_Date=$_POST["a_date"];
                   $A_Time=$_POST["a_time"];
                   $sql = "INSERT INTO Appointment(Insuree_name,Insuree_id,Doctor_name,Hospital_name,Date,Time) VALUES('$I_Name','$I_ID','$D_Name','$H_Name','$A_Date','$A_Time')" ;

                    $con-> query($sql);

                   


                    $con->close();
			?>
			<br>
			<a href="Appointment.php">
			<button type="button" value="Close">Close</button>
			</a>
	<br>
	<br>
	</div>
	
	
	<br>
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
</html>