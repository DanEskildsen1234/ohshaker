<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manager login</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
    <?php
    include_once('components/header.php');
    include_once('components/nav.php');
    ?>

    <div class="back-image"></div>

    <main>
        <div class="select-style-1">
            <select name="bar-select-drop" id="bar-select-drop">
                <option value="0">Kea Bar</option>
                <option value="1">Kea Bar</option>
                <option value="2">Another bar</option>
                <option value="3">A third bar</option>
            </select>
        </div>

        <section class="form">
            <span style="height: 51px; display: block;"></span>
            <!-- <span data-error class="error-box hidden"></span> -->
            <input placeholder="Username or email" class="input-large input-text" type="text">
            
            <button class="btn btn-blue" data-login>Login</button>
            <a class="btn" id="bartenderRegisterBtn" href="signup.php">Register your bar</a>
            <a href="login.php">Bartender login</a>
        </section>
    </main>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="assets/js/login.js"></script>

</body>
</html>
