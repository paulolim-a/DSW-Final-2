<?php
    session_start();

    unset($_SESSION['user']);
    unset($_SESSION['pasw']);
    header('Location: login.php');

?>
