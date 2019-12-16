<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Settings</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
<?php
include_once('components/header.php');
include_once('components/nav.php');
?>

<main>
    <section class="form settings">
        <h2>Your bar</h2>
        <input value="KEA Bar" placeholder="Bar name" class="" maxlength="1">
        <p>Bartenders from your bar can use a pin code to get access to your bar's cocktails.</p>
        <a class="btn" href="settings-pin.php" data-logout>Set pin</a>
        <div>
            <input value="Example Road 12" placeholder="Address" class="" maxlength="1">
            <input value="2400" placeholder="Zip" class="" maxlength="1">
            <input value="Copenhagen NV" disabled class="" maxlength="1">
            <input value="Denmark" class="" maxlength="1">
        </div>
        <h2>You</h2>
        <div>
            <input value="John" placeholder="First name" class="" maxlength="1">
            <input value="Doe" placeholder="Last name" class="" maxlength="1">
        </div>
        <div>
            <input value="email@example.com" placeholder="Email" class="" maxlength="1">
        </div>

    </section>
    <button class="btn" data-logout>Logout</button>
</main>
</body>
</html>
