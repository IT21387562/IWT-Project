<?php
	if(isset($_POST["submitbtn"]))
	{
		$fname = $_POST['fname'];
        $mail = $_POST['mail'];
		$feedback= $_POST['feedback'];
		$type = $_POST['type'];
		
		require 'connect.php';
		
		$stmt = "insert into FORM (fname,mail,feedback,type)
        values('$fname','$mail','$feedback','$type')";

		if($conn->query($stmt)){
        echo "Inserted successfully";
        }
        else{
        echo "Error:". $conn->error;
        }

        $conn->close();

	}		
?>
<!DOCTYPE html>

<html>
	<title> Health Insurance Management System </title>
	<link rel="stylesheet" href="styles/amandi.css">

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
	<hr>
	<br>

	<!--ADD BODY HERE!-->

	<h1 class="topic1" align="center" >Feedback Form</h1>
		<div class="form">
		<form method="post">
			<label color="#fff"> Name : </label> </br>
			<input type="text" id='name' placeholder="Name" width="100%" required name="fname"></br></br>
			<label> E-mail : </label> </br>
			<input type="text" id='mail' placeholder="abc@gmail.com" width="100%" required name="mail"></br></br>
			<label> Feedback : </laber> </br>
			<textarea rows="8" cols="60" name="feedback" > </textarea> </br></br>
			<label> Membership Type : </label> </br>
			<select name="type"> 
				<option> Select a type </option>
				<option> Platinum </option>
				<option> Gold </option>
				<option> Silver </option>
				<option> Bronze </option>
			</select> </br></br>
			<button type="submit" class="button1" name="submitbtn"> Submit </button> </br>
			<button type="reset" class="button2"  onclick ="openPopup()"> Reset </button>
			<div class="popup" id="popup">
				<img src="../IMAGES/popup.jpg" width="50" height="50">
				<h1> R E S E T ! </h1>
				<p> Please Fill the form Again. Thank You ! </p>
				<button type="button" onclick ="closePopup()"> OK </button>
			</div>
		</form>	
	</div> 
	
	<h1 class="topic2" align="center"> Location Map </h1>
	<div class="container">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d38053.06531089399!2d79.85948549895984!3d6.921847719130031!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25755e928e7ff%3A0x85482fe919ac9ca1!2sBattaramulla!5e0!3m2!1sen!2slk!4v1652022712483!5m2!1sen!2slk"
		width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
		</iframe>	
	</div>

	<br>
	<hr>
	
	<div class="bottom">
		<img src="../IMAGES/logo.png" width="180" height="140" class="logo">
		<div class="text">
		    <ul>
				<li><h2> Help & Support</h2></li><br>
				<li><a href="#"><h4> How to Claim </h4></li><br>
				<li><a href="#"><h4> Support for Members </h4></li><br>
	            <li><a href="#"><h4> Member FAQ </h4></li>
			</ul>
		</div>
		
	</div>
          
    <script>
		let popup = document.getElementById("popup");
		
		function openPopup()
		{
			popup.classList.add("open-popup");
		}
		function closePopup()
		{
			popup.classList.remove("open-popup");
		}
    </script>

</body>
</html>