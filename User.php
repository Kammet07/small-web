<?php
require __DIR__ . '/DB.php';

class User
{
    public function addUser($username, $password)
    {
        $db = new DB;
        $connection = $db->connect();

        if ($db instanceof DB) {
            $password = password_hash($password, PASSWORD_BCRYPT);

            $stmt = $connection->prepare("INSERT INTO small_web.users (username, password) VALUES (?, ?)");
            $stmt->bind_param("ss", $username, $password);
            $stmt->execute();
        }
    }

//    public function verificateUser($username, $password)
//    {
//        $conn = new DB;
//
//        if ($conn instanceof DB) {
//            $sql = "select ";
//        }
//    }
}