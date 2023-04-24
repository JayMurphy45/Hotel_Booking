<?php
require_once('config.php');

if ($_POST['Submit']) {
    //check if username and passwords match
    if ($_POST['username'] == $username && ($_POST['password'] == $password)) {

        $_SESSION['username'] = $username; //store username to session
        $_SESSION['Active'] = true;
        header("location::index.php"); // redirect browser
        exit;//terminate code
    } else {
        
        echo 'Incorrect username or password';
    }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="public/css/form.css">
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

        <button type="submit">Login</button>

    </form>

    <p><a href="SignUp.php">Sign Up</a></p>

</body>

</html>