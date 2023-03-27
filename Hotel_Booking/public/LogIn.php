<?php
session_start();

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];

    //check if user exists in file
    $file = 'users.txt';
    if(file_exists($file))
    {
        $lines = file($file);
        foreach ($lines as $line)
        {
            list($stored_username, $hashed_password) = explode(':', $line);
            if(trim($username) == trim($stored_username) && password_verify($password, trim($hashed_password)))
            {
                $_SESSION['username'] = $username;
                header('Location: home.php');
                exit;
            }
        }
    }
    $error = 'Invalid username or password';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php if (isset($error)) {?>
        <div><?php echo $error?></div>
    <?php } ?>

    <form>
        <label for="Username">username</label>
        <input type="text" name="username">

        <button type="submit">Login</button>

    </form>

    <a href="SighnUp.php">Sighn Up</a>

</body>
</html>
