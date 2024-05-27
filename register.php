<?php
require 'db.php';
require 'classes.php';
require 'header.php';

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = new User($conn);
    if ($user->register($username, $password)) {
        echo "Úspešne ste sa zaregistrovali!";
    } else {
        echo "Nepodarilo sa zaregistrovať.Skúste použiť iné meno alebo heslo.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/css.css">
</head>
<body>
<form class="auth-form" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username">
    <label for="password">Password:</label>
    <input type="password" id="password" name="password">
    <input type="submit" name="register" value="Register">
</form>
</form>
</body>
</html>