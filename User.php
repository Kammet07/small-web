<?php
require __DIR__ . '/DB.php';

class User
{
    public function addUser($username, $password)
    {
        $conn = new DB;
        $connection = $conn->connect();

        if ($conn instanceof DB) {
            $password = password_hash($password, PASSWORD_ARGON2ID);

            $stmt = $connection->prepare("INSERT INTO small_web.users (username, password) VALUES (?, ?)");
            $stmt->bind_param("ss", $username, $password);
            $stmt->execute();
        }
    }

    public function verificateUser($username, $password)
    {
        $conn = new DB;
        $connection = $conn->connect();

        $conn = new DB;

        if ($conn instanceof DB) {
            $stmt = $connection->prepare("select password from small_web.users where username like ?");
            $stmt->bind_param("s", $username);
            $stmt->execute();

            $connection->
        }
    }
}