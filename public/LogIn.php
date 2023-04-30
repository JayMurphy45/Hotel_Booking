<?php
session_start();
require_once(__DIR__ . '/config.php');

if (isset($_POST['Submit'])) {
    $users = file('users.txt', FILE_IGNORE_NEW_LINES); // read the file as an array of lines
    foreach ($users as $user) {
        list($username, $hashed_password) = explode(':', $user); // split each line into username and hashed password
        if ($_POST['username'] == $username && password_verify($_POST['password'], $hashed_password)) { //Checks that the hashed password matches
        $_SESSION['username'] = $username; //Saves username to the seesion
        $_SESSION['Active'] = true;
        header("location: ../Booking.php"); //Redirects to the index page
            
        exit;
        }
    }
    echo 'Incorrect Username or Password';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/public/css/form.css">


</head>

<body>
    
    <?php if (isset($error)) { ?>
        <div><?php echo $error ?></div>
    <?php } ?>

    <h1>Login</h1>
    <form action="#" method="post">
        <label for="Username">Username</label>
        <input type="text" name="username">

        <label for="Password">Password</label>
        <input type="password" name="password">

        <button type="submit" name="Submit">Login</button>

    </form>

    <p><a href="SignUp.php">Sign Up</a></p>
<a href="http://localhost/Hotel_Booking/index.php"><strong>Back to home</strong></a>

</body>

</html>
