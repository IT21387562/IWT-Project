<!DOCTYPE html>

<html>
	<title> Health Insurance Management System </title>
	<link rel="stylesheet" href="styles/shriwanthi.css">
    <script src="js\myscript.js"></script>
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
	<div id="Doctors">
	    <h1 id="doc_h">OUR OWN PANEL OF DOCTORS</h1>
		
	       <br>
	            <button type="button" id="doc1" class="bttn" onclick="loadDocInformation('doc1')">Cardiologist : Doctor Samanthi Fernando</button>
	            <button type="button" id="doc2" class="bttn" onclick="loadDocInformation('doc2')">ENT Surgeon :Doctor Aron Ferdinanduz</button>      
	            <button type="button" id="doc3" class="bttn" onclick="loadDocInformation('doc3')">Cancer Specialist :Doctor Edman Diaz</button>
				<button type="button" id="doc4" class="bttn" onclick="loadDocInformation('doc4')">General Physician :Dr. Sukshma Singh</button>
				
				<br>
				
				<img src="images\doctors.jpg" id="docts">
				<p id="para"></p>
				
	        </div>
			
	</div>
	
	<br>
	<hr>
	<br>
	
	
	<div id="appointment">
	    <h1 id="appt_h">PLACE AN ONLINE APPOINTMENT WITH ONE OF OUR DOCTORS<h1>
		    <form method="post" action="appoimentForm.php">
			
		        <fieldset id="fld">
				
				    <legend id="leg">Personal Information</legend>
					    <div id="f_1">
					        <br>
		                    Full Name : <input type="text"  name="fname" required ><br>
							Insurance ID : <input type="text" name="I_id" required>
							<br>
							<br>
						</div>
				</fieldset>
				<fieldset id="fld">
				    <legend id="leg">Doctor's Information</legend>
					<div id="f_1">
					        <br>
		                    Doctor's Name : <input type="text" name="d_name" required><br>
							Preffered Hospital : <select name="h_name" id="h_id">
							<option value="none"></option>
							<option value="Asiri">Asiri Hospital</option>
							<option value="Durdans">Durdans Hospital</option>
							<option value="Hemas">Hemas Hospital</option>
							<option value="Nawaloka">Nawaloka Hospital</option>
							</select>
							<br>
							<br>
					</div>
		        </fieldset>
				<fieldset id="fld">
				    <legend id="leg">Appointment Information</legend>
					<div id="f_1">
					        <br>
							Preffered Date : <input type="date" min="2022-07-01" max="2022-12-31" name="a_date">
							<br>
							Preffered Time : <input type="time" min="08:00" max="20:00" name="a_time">
	                        <br>
							
                            <br>							
		        </fieldset>
				<br>
                        <input type="submit" id="f_submit" name="sbt" value="Place Appointment">
                        <input type="reset" value="Reset form" id="f_reset">						
	            </form>
				<br>
				
				
	</div>
	
	<br>
	<hr>
	<br>
	
	
	<div id="Hospitals">
	    <h1 id="hosp_h">OUR COLLABORATIVE HOSPITALS</h1>
	        
	            <button type="button" id="hos1" class="bttn" onclick="loadHospitalInformation('hos1')">Hemas Hospital</button>
	       	    <button type="button" id="hos2" class="bttn" onclick="loadHospitalInformation('hos2')">Nawaloka Hospital</button>
	            <button type="button" id="hos3" class="bttn" onclick="loadHospitalInformation('hos3')">Asiri Hospital</button>
	       	    <button type="button" id="hos4" class="bttn" onclick="loadHospitalInformation('hos4')">Durdans Hospital</button>
				<br>
				
				<img src="images\Hospital.jpg" id="hosp">
				<p id="para_hosp"></p>
	            <br>
	</div>
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