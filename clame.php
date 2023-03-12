<!DOCTYPE html>
<html>
<head>
	<title>New claim</title>
	<link rel="stylesheet" type="text/css" href="./styles/contactcss.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./js/givealert.js"></script>


</head>
<body>
	<h1>New Claim Form</h1>
	


	<div class="container">
    <form action="insert.php" method="post">

    <label for="name">Insurens Name</label><br>
    <input type="text" id="nm" name="name" required> <br>
	<label for="ID">Insurens ID</label><br>
    <input type="text" id="ID" name="ID"  required> <br>
    <label for="nic">NIC</label><br>
    <input type="text" id="nic" name="nic" required><br>
	<label for="pi">Policy ID</label><br>
    <input type="text" id="pi" name="pi"  required><br>
	<label for="claim">Type of claim</label><br>
    <input type="text" id="claim" name="claim" required><br>

    <div style="display:flex;flex-direction:row;padding:12px">
    <label for="bill">Upload Scaned copy of bill</label><br>
    <input type="file" id="bill" name="bill"><br>
    </div>

	
    <div style="display:flex;flex-direction:row;padding:12px">
	<label for="rep">Upload Scaned copy of report</label><br>
    <input type="file" id="rep" name="rep"><br>
</div>

    <input type="submit" value="Submit" onclick="givefeedback()">
    <input type="reset" value="Reset" class="reset">

  </form>
</div>

</body>
</html>