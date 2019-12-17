<?php
    $pageTitle = 'My bar';
?>

!doctype html>
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
    session_start();
    if(empty($_SESSION)){
        header('Location: login.php');
    }
    include_once('components/header.php');
    include_once('components/nav.php');
    $Bar = 'Kea Bar';  
?>

<main>
    <section>
        <?php
            if(isset($_SESSION['manager'])){
                // add drink field
            }

            include('components/ordered.php');
        ?>
    </section>
</main>
</body>
</html>
