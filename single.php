<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <title>OhShaker</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
    <?php
    include_once('components/header.php');
    include_once('components/nav.php');
    ?>

<main>
    <article>
        <a href="http://google.com">
        <img id="editButton" src="assets/img/cocktail-icons/edit.svg" alt="link to edit page">
</a>
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
                <li>Fill up the shaker with ice cubes</li>
                <li>Pour mint liqueur vodka into the shaker</li>
                <li>Shake well</li>
                <li>Strain into the glass</li>
            </ol>
        </div>

        <div id="navSpacer"></div>
    </article>
</main>

</body>
</html>