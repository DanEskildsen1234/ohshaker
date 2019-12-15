<header>
    <div class="logo-and-back">
        <?php
        if ($_SERVER['REQUEST_URI'] === './login.php' || $_SERVER['REQUEST_URI'] === '/'
            || $_SERVER['REQUEST_URI'] === '' || $_SERVER['REQUEST_URI'] === './index.php') {
            echo"
                <img data-logo class='nav icon logo' src='./assets/gfx/icon/toggle/logo.svg' type='image/svg+xml'>
                <img data-back class='nav icon back hidden' src='./assets/gfx/icon/toggle/arrow_back.svg' type='image/svg+xml'>
                ";
        } else {
            echo"<img data-back class='nav icon back' src='./assets/gfx/icon/toggle/arrow_back.svg' type='image/svg+xml'>";
        }
        ?>
    </div>
    <div class="search">
        <input class="hidden" type="text" placeholder="Search" data-search-input>
            <img class="icon nav search" data-open-search src="./assets/gfx/icon/toggle/search.svg" type="image/svg+xml">
    </div>
    <div class="settings">
        <a href="./settings.php">
            <img class="nav icon settings" src="./assets/gfx/icon/toggle/cog.svg" type="image/svg+xml">
        </a>
    </div>
</header>

<section data-search-results class="hidden">

</section>
<template data-search-item>
    <a>
        <p></p>
    </a>
</template>

<script src="assets/js/header.js"></script>

