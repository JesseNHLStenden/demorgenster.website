<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/login.css">
    <title>Login | De Morgenster</title>
</head>

<body>
    <form action="dbconn.php" method="post">
        <div class="login-container">
            <img src="./img/logo.png" alt="Morgenster logo">
            <label for="username">Gebruikersnaam</label>
            <input type="text" name="username" id="username" placeholder="Gebruikersnaam" required>
            <label for="password">Wachtwoord</label>
            <input type="password" name="password" id="password" placeholder="Wachtwoord" required>
            <input type="submit" name="submit" id="submit" value="Log In">
        </div>
    </form>
</body>

</html>