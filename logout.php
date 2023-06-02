<?php
if ($_SERVER['REQUEST_METHOD'] == "GET") {
    session_start();
    unset($_SESSION['user']);
    session_destroy();
    header('Location: login.php');
    exit();
}