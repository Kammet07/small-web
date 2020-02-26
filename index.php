<?php


$url = $_SERVER['REQUEST_URI'];


switch ($url) {
    case 'login':
        $filename = 'login.php';
        break;
    case 'registration':
        $filename = 'registration.php';
        break;
    case 'lorem':
        $filename = 'lorem.php';
        break;
    case 'logout':
        $filename = 'logout.php';
        break;
    default:
        $filename = '404.php';
        break;
}

// TODO always initialize $filename
require $filename;
