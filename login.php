<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bartender login</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
<?php
    session_start();
    
    if(!empty($_SESSION)) { 
        header ('location: mybar.php');
    }

    // validate login credentials

    if(!empty($_POST['pin1']) && !empty($_POST['pin2']) && !empty($_POST['pin3']) && !empty($_POST['pin4'])){
        $_SESSION['bartender'] =  'bt1';
        header('Location: mybar.php');
    } 

    include_once('components/header.php');
    include_once('components/nav.php');

    ?>

    <div class="back-image"></div>

    <main>
        <!-- <span data-error class="error-box"></span> -->
        <div class="select-style-1">
            <select name="bar-select-drop" id="bar-select-drop">
                <option value="0">Kea Bar</option>
                <option value="1">Kea Bar</option>
                <option value="2">Another bar</option>
                <option value="3">A third bar</option>
            </select>
        </div>

        <form class="form" method="POST">
            <p>Enter pin:</p>
            <div id="pin-field">
                <input type="password" class="input-large pinput" maxlength="1" name="pin1">
                <input type="password" class="input-large pinput" maxlength="1" name="pin2">
                <input type="password" class="input-large pinput" maxlength="1" name="pin3">
                <input type="password" class="input-large pinput" maxlength="1" name="pin4">
            </div>
            <button class="btn btn-blue" data-login>Log in</button>
            <a href="login-manager.php">Administrative login</a>
            <!-- <button class="btn" data-register>Register</button> -->
        </form>
    </main>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="assets/js/login.js"></script>
</body>
</html>
