<?php
session_start();

if (!isset($_SESSION['login']) || !$_SESSION['login']) {
    header('location: login');
    exit();
}

$username = $_SESSION['username'];

require __DIR__ . '/lorem.phtml';
