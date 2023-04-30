<?php

//create credentials
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    //validate form data
    $errors = [];
    if (empty($username))
    {
        $errors[] ='Username is required';
    }
    if (empty($password))
    {
        $errors[] = 'Password is required';
    } else if (strlen($password) < 8 || !preg_match("#[0-9]+#", $password) || !preg_match("#[a-z]+#", $password) || !preg_match("#[A-Z]+#", $password)) {
        $errors[] = 'Password must be a minimum of 8 characters long and contain at least one uppercase letter, one lowercase letter, and one number.'; //Password Validation
    }
    if ($password !== $confirmPassword)
    {
        $errors[] = 'Passwords do not match';
    }

    //no errors store in file
    if (empty($errors)) {
        $file = 'users.txt';
        $data = $username . ':' . password_hash($password, PASSWORD_DEFAULT) . "\n";
        file_put_contents($file, $data, FILE_APPEND | LOCK_EX);
        header('Location: LogIn.php');
        exit;
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="/public/css/form.css">
</head>
<body>

<!--- Print error if credentials are incorrect----->
<?php if (!empty($errors)) { ?>
    <?php foreach ($errors as $error) { ?>
        <div><?php echo $error; ?></div>
    <?php } ?>
<?php } ?>

    <h1>Sign Up</h1>
<form method="post">

    <label>Username:</label>
    <input type="text" name="username"><br>

    <label>Password:</label>
    <input type="password" name="password"><br>

    <label>Confirm Password:</label>
    <input type="password" name="confirm_password"><br>

    <button type="submit">Sign Up</button>
</form>

<p><a href="LogIn.php">Login</a></p>

</body>
</html>
