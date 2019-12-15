<nav>
<?php 
session_start();
if(!isset($_SESSION['manager'])){
    echo '<a class="tab" href="login.php">';
}
else {
    echo '<a class="tab" href="mybar.php">';
}
?>
        <div>
            <!-- object allows for fallback image -->
            <object class="nav-icon" data="assets\gfx\icon\toggle\star.svg" type="image/svg+xml">
                <!-- <img src="assets\gfx\icon\toggle\star.png" /> -->
            </object>
        </div>
        <div>
            My Bar
        </div>
    </a>
    <div id="line1"></div>
    <div id="line2"></div>
    <a class="tab" href="index.php">
        <div>
            <!-- object allows for fallback image -->
            <object class="nav-icon" data="assets\gfx\icon\toggle\local.svg" type="image/svg+xml">
                <!-- <img src="assets\gfx\icon\toggle\star.png" /> -->
            </object>
        </div>
        <div>
            Classic
        </div>
    </a>
</nav>