<?php 
if($_SESSION['Active'] == false){
    header("location::login.php");
    exit;
}



?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Booking</title>
    <link rel="stylesheet" href="css/form.css">
</head>
<body>
    <?php
        echo "<h1>Index Page</h1>";
        require("Layouts/Header.php");
    ?>
    
    <font size= 6>
    <p>Here is the websites index:</p>
    </font>
    
    <div class="div1">
    <center>
    <ul>
        <font size= 5>
        <li><a href="../Booking.php">Booking</a></li>
        <li><a href="CheckOut.php">Check Out</a></li>
        <li><a href="../LogIn.php">Login</a></li>
        <li><a href="../SignUp.php">Sign Up</a></li>
        <li><a href="userProfile.php">Profile</a></li>
        </font>
        
    </ul>
    </center>
    </div>
</body>
</html>