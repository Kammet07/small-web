<?php
require __DIR__ . '/DB.php';

session_start();

if (!isset($_SESSION['login']) || !$_SESSION['login']) {
    header('location: login');
    exit();
} else {
    $DB = new DB();

    $DB->close();

    session_destroy();
    header('location: registration');
    exit();
}
