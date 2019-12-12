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
    include_once('components/header.php');
    include_once('components/nav.php');
    ?>

    <div class="back-image">

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

        <section class="form">
            <p>Enter pin:</p>
            <div id="pin-field">
                <input type="password" class="pinput" maxlength="1">
                <input type="password" class="pinput" maxlength="1">
                <input type="password" class="pinput" maxlength="1">
                <input type="password" class="pinput" maxlength="1">
            </div>
            <button class="btn btn-blue" data-login>Login</button>
            <a href="manager-login.php">Administrative login</a>
            <!-- <button class="btn" data-register>Register</button> -->
        </section>
    </main>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="assets/js/login.js"></script>
</body>
</html>
