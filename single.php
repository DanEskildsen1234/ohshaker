<?php
    $pageTitle = 'Yummy cocktail';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
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

    include_once('components/header.php');
    include_once('components/nav.php');
    ?>

<main>
    <article>
        <?php
            if (isset($_SESSION['manager'])) {
                echo '
                    <a href="edit.php">
                        <img id="editButton" src="assets/img/cocktail-icons/edit.svg" alt="link to edit page">
                    </a>';
            }
        ?>
        <img class="cocktail-thumb-img singleImg" src="assets/img/cocktails/1-cropped-thumb.jpg" alt="Cocktail img">
        <div id="attributeContainer">
            <div class="attribute">
                    <img src="assets/img/cocktail-icons/cubed.svg" alt="Cocktail img">
                <div class="attributeText">cubed</div>
            </div>
            
            <div class="attribute">
                <img src="assets/img/cocktail-icons/stirred.svg" alt="Cocktail img">
                <div class="attributeText">stirred</div>
            </div>
        </div>
        <div id="ingredientsContainer">
            <h1>Ingredients<h1>
            <div>3cl Vodka</div>
            <div>6cl Cranberry Juice</div>
            <div>Dash of lime</div>
        </div>

        <div id="methodContainer">
            <h1>Method<h1>
            <ol> 
                <li>Fill the lowball glass with ice cubes</li>
                <li>Pour vodka into glass</li>
                <li>Pour cranberry into glass</li>
                <li>Stir</li>
                <li>Squeeze and garnish dash of lime over cocktail</li>
            </ol>
        </div>
    </article>
</main>

</body>
</html>