<?php
include_once 'includes/connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registation form</title>
    <link rel="stylesheet" href="styles\regstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/reg.js"></script>
</head>
<body class="bd">

    <!-- Body of Form starts -->
  	<div class="container">
        <form action="connect.php" method="post" autocomplete="on">
          <!--First name-->
              <div class="box">
            <label for="firstName" class="fl fontLabel"> First Name: </label>
                  <div class="new iconBox">
              <i class="fa fa-user" aria-hidden="true"></i>
            </div>
                  <div class="fr">
                          <input type="text" name="firstName" placeholder="First Name"
                class="textBox" autofocus="on" required>
                  </div>
                  <div class="clr"></div>
              </div>
              <!--First name-->
  
  
          <!--Second name-->
              <div class="box">
            <label for="secondName" class="fl fontLabel"> Seconed Name: </label>
                  <div class="fl iconBox"><i class="fa fa-user" aria-hidden="true"></i></div>
                  <div class="fr">
                          <input type="text" required name="secondName"
                placeholder="Last Name" class="textBox">
                  </div>
                  <div class="clr"></div>
              </div>
              <!--Second name-->
  
  
              <!---Phone No.------>
              <div class="box">
            <label for="phone" class="fl fontLabel"> Phone No.: </label>
                  <div class="fl iconBox"><i class="fa fa-phone-square" aria-hidden="true"></i></div>
                  <div class="fr">
                          <input type="text" required name="phoneNo" maxlength="10" placeholder="Phone No." class="textBox">
                  </div>
                  <div class="clr"></div>
              </div>
              <!---Phone No.---->
  
  
              <!---Email ID---->
              <div class="box">
            <label for="email" class="fl fontLabel"> Email ID: </label>
                  <div class="fl iconBox"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                  <div class="fr">
                          <input type="email" required name="email" placeholder="Email Id" class="textBox">
                  </div>
                  <div class="clr"></div>
              </div>
              <!--Email ID----->

               <!---address---->
               <div class="box">
                <label for="email" class="fl fontLabel"> address: </label>
                      <div class="fl iconBox"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                      <div class="fr">
                              <input type="text" required name="address" placeholder="Address" class="textBox">
                      </div>
                      <div class="clr"></div>
                  </div>
                  <!--address----->

                  <!---DOB---->
               <div class="box">
                <label for="date" class="fl fontLabel"> Date of Brth: </label>
                      <div class="fl">
                            <input type="date" required name="date">
                      </div>
                      <div class="clr"></div>
                  </div>
                  <!--BOB----->
                  
  
  
              <!---Password------>
              <div class="box">
            <label for="password" class="fl fontLabel"> Password:</label>
                  <div class="fl iconBox"><i class="fa fa-key" aria-hidden="true"></i></div>
                  <div class="fr">
                          <input type="Password" required name="password" placeholder="Password" class="textBox">
                  </div>
                  <div class="clr"></div>
              </div>
              <!---Password---->
              <!---Re-Password------>
              <div class="box">
                <label for="password" class="fl fontLabel">com-password:</label>
                      <div class="fl iconBox"><i class="fa fa-key" aria-hidden="true"></i></div>
                      <div class="fr">
                              <input type="Password" required name="Re-password" placeholder="Confirm Password" class="textBox"><br>
                      </div>
                      <div class="clr"></div>
                  </div>
                  <!---Password---->
  
              <!---Gender----->
              <div class="box radio">
            <label for="gender" class="fl fontLabel"> Gender: </label>
                      <input type="radio" name="Gender" value="Male" required> Male &nbsp; &nbsp; &nbsp; &nbsp;
                      <input type="radio" name="Gender" value="Female" required> Female
              </div>
              <!---Gender--->

              <!---Membership type----->
              <div class="box radio">
                <label for="membership" class="fl fontLabel" name="membership"> Membership Type: </label>
                <select>
                    <option name="membership" value="p">Platinum</option>
                    <option name="membership" value="g">Golden</option>
                    <option name="membership" value="s">Silver</option>
                </select>
                  </div>
                  <!---Membership Type--->
  
  
              <!--Terms and Conditions------>
              <div class="box terms">
                      <input type="checkbox" id="chk" onclick="Myfunction()" name="Terms" required> &nbsp; I accept the terms and conditions
              </div>
              <!--Terms and Conditions------>
  
  
  
              <!---Submit Button------>
              <div class="box" style="background: #2d3e3f">
                      <input type="Submit" name="Submit" class="submit" value="SUBMIT">
                      <p id="text" style="display: none;">Check box is checked!</p>
              </div>
              <!---Submit Button----->
        </form>
    </div>

    
</body>
</html>