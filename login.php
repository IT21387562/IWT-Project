<?php
include_once 'includes/connection.php';
?>
<?php
          /*  if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                    echo "<p>Fill in all fields<p>";
                }
                elseif ($_GET["error"] == "wronglogin") {
                    echo "<p>Incorrect email or password!<p>";
                }
            }*/

			if(isset($_POST['loginbtn'])){
				$errors=array();

				if(!isset($_POST['email'])|| strlen(trim($_POST['email']))<1){
					$errors[]='User nanme invaild';
				}
				if(!isset($_POST['password'])|| strlen(trim($_POST['password']))<1){
					$errors[]='invaild Password';
				}

				if(empty($errors)){

					$user=mysqli_real_escape_string($connection,$_POST['email']);
					$password=mysqli_real_escape_string($connection,$_POST['password']);

					$quary="SELECT*FROM register
							where Email='{$user}'
							AND pswrd='{$password}'
							LIMIT 1";

				$result_set = mysqli_query($connection,$quary);

				if($result_set){
					if(mysqli_num_rows($result_set)==1){
						header('Location:home_A.html');
					}
					else{
						$errors[]='invalid username / passord';
					}
				}else{
					$errors[]='Database quary faill';
				}
			}
		}
		
        ?>

<!DOCTYPE html>

<html>
	
<head>
	<title> Health Insurance Management System </title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="styles/login.css">

</head>

<body>
	<div class="top">
		<img src="images/logo.png" width="140" height="100" class="logo">
		<div class="topic">
			<h1>HI INSURANCE</h1>
		</div>
		<img src="images/usernew.webp" width="50" height="50" class="user">
		<div>
			<button type="button" class="topBtn"><span></span>LOG IN</button>
			<a href="Registation form.php"><button type="button" class="topBtn"><span></span>SIGN IN</button></a>
		</div>
	</div>
	<hr>
	
	<div class="navigation">
		<ul>
		<li><a href="Home.html" > HOME </a> </li>
			<li><a href="login.php"> OUR PRODUCT </a> </li>
			<li><a href="login.php">COLLABORATIONS  </a> </li>
			<li><a href="login.php"> NEWS </a> </li>
			<li><a href="login.php"> ABOUT US </a> </li>
			<li><a href="login.php"> CONTACT US</a> </li>
			<li><a href="login.php"> Feedback</a> </li>
		</ul>
		<div class="search">
			<input type="text" placeholder="Search...">
		</div>
		
	</div>
	<hr>
	<br>
	
	<div class="login-container">
		<form class="login-form" action="login.php" method="post">
			<h1>Login</h1>
			<input type="text" name="email" class="username" placeholder="Email/NIC">
			<input type="password" name="password" class="password" placeholder="Password">
			<div class="login">
				<input type="checkbox" class="remember-me" value="Remember me">
				<label for="remember-me">Remember me</label>
				<button type="submit" name="loginbtn" class="loginbtn">LOG IN</button>				
			</div>
			<div class="signup">
				<h5>Don't have an account?</h5>
				<a href="Registation form.php"><h5 style="color: #20B2AA; ">Sign Up</h5></a>
			</div>

			
		</form>
		
	</div>

	
	
	
	<br>
	<hr>
	
	
	<div class="bottom">
		<img src="images/logo.png" width="180" height="140" class="logo">
		<div class="text">
		    <ul>
				<li><h2> Help & Support</h2></li><br>
				<li><a href="#"><h4> How to Claim </h4></li><br>
				<li><a href="#"><h4> Support for Members </h4></li><br>
	            <li><a href="#"><h4> Member FAQ </h4></li>
			</ul>
		</div>
		
	</div>
</body>
</html>	