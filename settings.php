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
        <h2>Your information</h2>
        <div>
            <input value="John" placeholder="First name" class="inputEdit">
            <input value="Doe" placeholder="Last name" class="inputEdit">
        </div>
        <div>
            <input value="email@example.com" placeholder="Email" class="inputEdit">
        </div>
        <div>
            <input value="Example Road 12" placeholder="Address" class="inputEdit">
            <input value="2400" placeholder="Zip" class="inputEdit">
            <input value="Copenhagen NV" disabled class="inputEdit disabled">
            <input value="Denmark" class="inputEdit">
        </div>

    </section>
    <button class="btn btn-blue" data-logout>Logout</button>
</main>
</body>
</html>
