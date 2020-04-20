<?php
require __DIR__ . '/DB.php';

class UserManager
{
    public function addUser(string $username, string $password)
    {
        $conn = new DB;
        $connection = $conn->connect();

        $password = password_hash($password, PASSWORD_ARGON2ID);

        $stmt = $connection->prepare("INSERT INTO small_web.users (username, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();

    }

    public function verify(string $username, string $password): bool
    {
        $conn = new DB;
        $connection = $conn->connect();

        if ($conn instanceof DB) {
            $stmt = $connection->prepare("select password from small_web.users where username like ?");
            $stmt->bind_param("s", $username);
            $stmt->execute();

            $result = $stmt->get_result();
            if ($result->num_rows == 0) {
                return false;
            } else {
                $result = mysqli_fetch_assoc($result);
                $result = $result["password"];
                return password_verify($password, $result);
            }
        } else {
            return false;
        }
    }
}