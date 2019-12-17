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
    <link href="https://fonts.googleapis.com/css?family=Roboto:700&display=swap" rel="stylesheet">
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
    <section class="drink-layout add-drink-field">
        <?php 
            if(isset($_SESSION['manager'])){
                echo '
                <a class="tile" href="create.php">
                    <div class="tile-content">
                        <img class="cocktail-thumb-img" src="assets/img/cocktails/add.svg" alt="Cocktail img" type="image/svg+xml" id="add-img">
                    </div>
                </a>
                ';
            }
        ?>

        <a class="tile" href="single.php">
            <div class="tile-content" id="new-img-div">
                <label for="new-img-div" id="new-drink-label">NEW</label>
                <img class="cocktail-thumb-img" src="assets/img/cocktails/12-cropped-thumb.jpg" alt="Cocktail img">
                <p class="thumb-caption">Yummy drink</p>
            </div>
        </a>
    </section>

    <?php
        include('components/ordered.php');
    ?>

</main>
</body>
</html>
