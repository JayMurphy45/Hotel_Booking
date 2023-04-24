<?php
//create credentials
if ($_SERVER['REQUEST_METHOD'] === ['POST']) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    //validate form data
    $errors = [];
    if (empty($username)) {
        $errors[] = 'Username is required';
    }
    if (empty($password)) {
        $errors[] = 'Password is required';
    }
    if ($password !== $confirmPassword) {
        $errors[] = 'Passwords do not match';
    }

    //no errors store in file
    if (empty($errors)) {
        $file = 'users.txt';
        $data = $username . ':' . password_hash($password, PASSWORD_DEFAULT) . "\n";
        file_put_contents($file, $data, FILE_APPEND | LOCK_EX);
        header('Location: login.php'); //relocate to login.php
        exit;
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Signup</title>
    <link rel="stylesheet" href="css/form.css">
</head>

<body>
    <!--- Print error if credentials are incorrect----->
    <?php if (isset($errors)) { ?>
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

    <p><a href="../LogIn.php">Login</a></p>
</body>

</html>