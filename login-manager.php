<?php
    $pageTitle = 'Manager login';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OhShaker - <?=$pageTitle?></title>
    <style>
        body {
            background-color: #000000;
            transition: opacity 50ms;
            opacity: 0;
        }
    </style>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:700&display=swap" rel="stylesheet">
</head>
<body>
    <?php
    session_start();
    
    if(!empty($_SESSION)) {
        header ('location: mybar.php');
    }
    // validate login credentials

    if (isset($_POST['nameField'])) {
        $_SESSION['manager'] =  'm1';
        header('Location: mybar.php');
    }

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

        <form class="form manager-login" method="POST">
            <span style="height: 34.5px; display: block;"></span>
            <!-- <span data-error class="error-box hidden"></span> -->
            <div>
                <input name="nameField" placeholder="Username or email" class="inputEdit" type="text">
            </div>
            <button class="btn btn-blue" data-login >Log in</button>
            <a class="btn" id="bartenderRegisterBtn" href="signup.php">Register</a>
            <a href="login.php">Bartender login</a>
        </form>
    </main>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="assets/js/login.js"></script>

</body>
</html>
