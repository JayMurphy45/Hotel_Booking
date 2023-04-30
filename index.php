<?php 
session_start(); // Initialize the session

// Check if user is not logged in, then redirect to login page
if(!isset($_SESSION['username'])){
    header("Location: LogIn.php");
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
    <link rel="stylesheet" href="public/css/form.css">
    <link rel="stylesheet" href="public/css/navbar.css">
</head>
<body>
    <?php
        echo "<h1>Index Page</h1>";
        require("public/Layouts/Header.php");
    ?>
    
    <font size= 6>
    <p>Here is the websites index:</p>
    </font>
    
    <div class="div1">
    <center>
    <ul>
        <font size= 5>
        <li><a href="public\Booking.php">Booking</a></li>
        <li><a href="public\CheckOut.php">Check Out</a></li>
        <li><a href="public\LogIn.php">Login</a></li>
        <li><a href="public\SignUp.php">Sign Up</a></li>
        <li><a href="public\userProfile.php">Profile</a></li>
        </font>
        
    </ul>
    </center>
    </div>
</body>
</html>