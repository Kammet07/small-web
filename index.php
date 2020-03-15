<?php
$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/login':
        require __DIR__ . '/login.php';
        break;
    case '/lorem':
        require __DIR__ . '/lorem.php';
        break;
    case '/logout':
        require __DIR__ . '/logout.php';
        break;
    case '/registration':
        require __DIR__ . '/registration.php';
        break;
    default:
        require __DIR__ . '/404.php';
        break;
}
