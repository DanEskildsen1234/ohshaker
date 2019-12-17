<?php
    $pageTitle = 'Settings';
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
        session_start();

        if(isset($_POST['logout'])) { 
            header('Location: logout.php');
        }

        include_once('components/header.php');
        include_once('components/nav.php');

        if(isset($_SESSION['user'])) {
            // user display
        }

        ?>
        <main>
            <section class="form settings">
            <?php
            if(isset($_SESSION['manager'])) {
            echo '
                <p>Bartenders from your bar can use a pin code to get access to your bar\'s cocktails.</p>
                <a class="btn" href="settings-pin.php" data-logout>Set pin</a>
                <h5>Your bar</h5>
                <div>
                    <input value="KEA Bar" placeholder="Bar name" class="inputEdit">
                </div>
                <div>
                    <input value="Example Road 12" placeholder="Address" class="inputEdit">
                    <input value="2400" placeholder="Zip" class="inputEdit">
                    <input value="Copenhagen NV" disabled class="inputEdit">
                    <input value="Denmark" class="inputEdit">
                </div>
                <h5>You</h5>
                <div>
                    <input value="John" placeholder="First name" class="inputEdit">
                    <input value="Doe" placeholder="Last name" class="inputEdit">
                </div>
                <div>
                    <input value="email@example.com" placeholder="Email" class="inputEdit">
                </div>
                <a class="btn btn-blue" href="index.php">Save</a>
            
                <form method="post">
                    <input type="submit" name="logout" class="btn" value="Log out"/>
                </form>
            ';
            }
            if(isset($_SESSION['bartender'])) {
                echo '
                    <h5>Your bar</h5>
                    <div>
                        <input value="KEA Bar" disabled class="inputEdit">
                    </div>
                    <form method="post">
                        <input type="submit" name="logout" class="btn" value="Log out"/>
                    </form>
                ';
            }
            if(empty($_SESSION)) {
                echo'
                    <p>Login with your profile to change your settings</p>
                    <a href="login.php" class="btn-blue btn">Log in</a>
                    ';
            }
            ?>
        </section>
    </main>
</body>
</html>
