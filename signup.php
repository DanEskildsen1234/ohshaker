<?php
    $pageTitle = 'Register';
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
        <p>Bar register:</p>
        <section class="form">
            <!-- <span data-error class="error-box hidden"></span> -->
            <form action="">
                <input placeholder="Business name" class="input-small inputEdit input-text" type="text">
                <input placeholder="Administrator email" class="input-small inputEdit input-text" type="email">
                <input placeholder="Address" class="input-small inputEdit input-text" type="text">
                <input placeholder="Zip code" class="input-small inputEdit input-text" type="text">
                <input placeholder="County" class="input-small inputEdit input-text" type="text">
            </form>
            
            <a href="settings-pin.php?signup=true" class="btn btn-blue" id="signup-submit" data-login>Submit</a>
        </section>
    </main>
</body>
</html>
