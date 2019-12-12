<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cocktails</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
    <?php
    include_once('components/header.php');
    include_once('components/nav.php');
    ?>
    <div class="back-image">

    <main>
        <!-- <a class="btn add" href="create.php">+</a> -->
        <section>
            <a class="tile" href="single.php">
                <img alt="Cocktail name">
                <p>Cocktail name</p>
            </a>
        </section>
    </main>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="assets/js/login.js"></script>
</body>
</html>