<nav>
    <a class="tab" href="mybar.php">
        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M18.8779 9.75579L29.4737 10.6695L21.4421 17.64L23.8442 28L14.7368 22.5032L5.62947 28L8.04632 17.64L0 10.6695L10.5958 9.77053L14.7368 0L18.8779 9.75579ZM9.19574 23.0926L14.7368 19.7474L20.2926 23.1074L18.8189 16.8L23.7115 12.5558L17.2568 11.9958L14.7368 6.04211L12.2315 11.9811L5.77679 12.5411L10.6694 16.7853L9.19574 23.0926Z"
                fill="#<?php
                  if ($_SERVER['REQUEST_URI'] === '/mybar.php') {
                      echo 'FFFFFF';
                  } else {
                      echo 'BEBEBE';
                  }
                ?>"/>
        </svg>
        <span <?php
            if ($_SERVER['REQUEST_URI'] === '/mybar.php') {
                echo' style="color:#FFFFFF" ';
            }?> >
            My Bar
        </span>
    </a>
    <div class="line"></div>
    <a class="tab" href="index.php">
        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M26.25 3.75H3.75V6.25L13.75 17.5V23.75H7.5V26.25H22.5V23.75H16.25V17.5L26.25 6.25V3.75ZM18.4625 11.25L15 15.1375L11.5375 11.25H18.4625ZM7.075 6.25L9.2875 8.75H20.7125L22.9375 6.25H7.075Z"
                fill="#<?php
                  if ($_SERVER['REQUEST_URI'] === '/index.php' || $_SERVER['REQUEST_URI'] === '/') {
                      echo 'FFFFFF';
                  } else {
                      echo 'BEBEBE';
                  }
               ?>"/>
        </svg>
        <span <?php
            if ($_SERVER['REQUEST_URI'] === '/index.php' || $_SERVER['REQUEST_URI'] === '/') {
                echo' style="color:#FFFFFF" ';
            }?> >
            Classic
        </span>
    </a>
</nav>