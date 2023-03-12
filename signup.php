<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/signup.css">
</head>
<body>
    <section class="signup-form">
        <h2>Sign Up</h2>
        <form action="includes/signup.inc.php" method="post">
            <input type="text" name="f_name" placeholder="First Name">
            <input type="text" name="l_name" placeholder="Last Name">
            <input type="date" name="DOB" placeholder="Date Of Birth">
            <input type="text" name="NIC" placeholder="NIC">
            <input type="text" name="Address" placeholder="Address">
            <input type="text" name="Email" placeholder="Email">
            <input type="password" name="Password" placeholder="Password">
            <input type="password" name="PasswordRepeat" placeholder="Repeat Password">
            <button type="submit" name="submit">SIGN UP</button>
        </form>
        <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                    echo "<p>Fill in all fields<p>";
                }
                elseif ($_GET["error"] == "inavlidNIC") {
                    echo "<p>invalid NIC!<p>";
                }
                elseif ($_GET["error"] == "inavlidEmail") {
                    echo "<p>Invalid Email!<p>";
                }
                elseif ($_GET["error"] == "passwordsdontmatch") {
                    echo "<p>Password doesn't match!<p>";
                }
                elseif ($_GET["error"] == "statementfailed") {
                    echo "<p>Something went wrong, try agian!<p>";
                }
                elseif ($_GET["error"] == "userisalreadyregistered") {
                    echo "<p>You are already registered, Try another email or a NIC!<p>";
                }
                elseif ($_GET["error"] == "none") {
                    echo "<p>Succesfully registered, Welcome to HI INSURANCE!<p>";
                }
            }
        ?>
    </section>

    
</body>
</html>