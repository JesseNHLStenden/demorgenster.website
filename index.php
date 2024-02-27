<?php
session_start();
if (!isset($_SESSION['loggedIn'])) {
    header("Location: ./login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welkom! | De Morgenster</title>
</head>

<body>
    <div class="container">
        <img src="./img/logo.png" alt="Morgenster logo">
        <div class="short-info">Hello this is the landing page!</div>
        <div class="short-info">If you see this then you have succesfuly logged in.</div>
    </div>
    <form action="createUser.php" method="post">
            <h2>Create new user</h2>
            <br>
            <input type="text" name="username" id="username" placeholder="Gebruikersnaam" required>
            <br>
            <label for="password">Wachtwoord</label><br>
            <input type="password" name="password" id="password" placeholder="Wachtwoord" required><br>
            <input type="submit" name="submit" id="submit" value="Log In">
        </form>
</body>

</html>