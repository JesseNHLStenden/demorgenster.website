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
        <div class="long-info">Insert longer descript there.</div>
    </div>
</body>

</html>