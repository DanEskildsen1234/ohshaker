<?php
    $pageTitle = 'Create';
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        include_once('components/header.php');
        include_once('components/nav.php');
    ?>  

    <!-- <div class="back-image"></div> -->
    
    <main>
        <article>
            <div id="cocktailEdit">
                <input type="file" id="imgUpload" style="display:none" onchange="putImage()"/> 
                <img id="target"> 
                <img class="cocktail-thumb-img" id="chooseImg" src="assets/img/cocktail-icons/image.svg" alt="Cocktail img"> 
                <div class="editSubtitle">Name</div>
                <input class="inputEdit" placeholder="Cocktail name" value="">
                <div id="editIngredients">
                    <div class="editSubtitle">Ingredients</div>
                    <input class="inputEdit" placeholder="Ingredient name and amount" value="">
                    <div class="btn addField">+</div>
                </div>
                <div id="editMethod">
                    <div class="editSubtitle">Method</div>
                    <input class="inputEdit" placeholder="Step" value="">
                    <div class="btn addField">+</div>
                </div>
                <div class="editSubtitle">Actions</div>
                <select id="select-action" name="state[]" multiple class="demo-default" placeholder="Select an action">
                    <option value="">Select an action...</option>
                    <option value="Cubed">Cubed ice</option>
                    <option value="Crushed">Crushed ice</option>
                    <option value="Shaken">Shaken</option>
                    <option value="Stirred">Stirred</option>
                </select>
                <div class="editSubtitle">Categories</div>
                <select id="select-category" name="state[]" multiple class="demo-default" placeholder="Select a category">
                    <option value="">Select a category...</option>
                    <option value="Vodka">Vodka</option>
                    <option value="Rum">Rum</option>
                    <option value="Whiskey">Whiskey</option>
                    <option value="Sours">Sours</option>
                    <option value="Other">Other</option>
                </select>
                <div class="btn btn-blue">Save</div>
                </div>
        </article>
    </main>
    <div id="navSpacer"></div>
    <script src="assets/js/cocktail.js"></script>
</body>
</html>
