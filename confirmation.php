<?php
    $pageTitle = 'Confirmation';
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
</head>
<body>
    <?php
        include_once('components/header.php');
        include_once('components/nav.php');
    ?>

    <main>
        <section>
            <div>
                <h1 id="emailTitle">We've sent you an email!</h1>
                <div>In your inbox at <a href="">you@email.com</a> you will find information regarding
                login, <strong> keep this email </strong> as you will use it to log in to the OhShaker service.
                <img class="singleImg emailImg" src="assets/img/cocktail-icons/mail.svg" alt="Cocktail img"> 
                <a href="" class="emailTxt">you@email.com</a>
                <div class="emailBtn btn btn-blue">Resend email</div>
            </div>
        </section>
    </main>
</body>
</html>
