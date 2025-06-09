<?php
    session_start();
    unset($_SESSION['staffID']);
    unset($_SESSION['password']);
    session_destroy();
    echo "<meta http-equiv=\"refresh\" content=\"1;URL=homepage.php\">";
?>