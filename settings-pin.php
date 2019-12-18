<?php
    $pageTitle = 'Set pin';
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
include_once('components/header.php');
include_once('components/nav.php');

if (isset($_GET['signup'])) {
    $confirmLink = 'mybar.php';
} else {
    $confirmLink = 'settings.php';
}
?>

<main>

    <section class="form">
        <p>Bartenders from your bar can use a pin code to get access to your bar's cocktails.</p>
        <form class="form login" method="POST">
            <?php
                if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
                    echo "<h5>Enter pin:</h5>";
                } else {
                    echo "<h5>Confirm pin:</h5>";
                }
            ?>
            <div id="pin-field">
                <input type="password" class="input-large pinput" maxlength="1">
                <input type="password" class="input-large pinput" maxlength="1">
                <input type="password" class="input-large pinput" maxlength="1">
                <input type="password" class="input-large pinput" maxlength="1">
            </div>
            <?php
            if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
                echo "<button class='btn btn-blue'>Next</button>";
            } else {
                echo "<a href=".$confirmLink." class='btn btn-blue'>Confirm</a>";
            }
            ?>
        </form>
    </section>
</main>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="assets/js/login.js"></script>
</body>
</html>
