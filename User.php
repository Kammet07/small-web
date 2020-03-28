<?php
require __DIR__ . '/DB.php';

class User
{
    public function addUser($username, $password)
    {
        try {
            $conn = new DB;
            $connection = $conn->connect();

            if ($conn instanceof DB) {
                $password = password_hash($password, PASSWORD_ARGON2ID);

                $stmt = $connection->prepare("INSERT INTO small_web.users (username, password) VALUES (?, ?)");
                $stmt->bind_param("ss", $username, $password);
                $stmt->execute();
            }
        } catch (Exception $err) {
            echo $err->getMessage();
        }
    }

    public function verificateUser($username, $password)
    {
        $ans = null;
        try {
            $conn = new DB;
            $connection = $conn->connect();

            if ($conn instanceof DB) {
                $stmt = $connection->prepare("select password from small_web.users where username like ?");
                $stmt->bind_param("s", $username);
                $stmt->execute();

                $result = $stmt->get_result();
                if ($result->num_rows == 0){
                    echo "no user with this username";
                    $ans = false;
                } else {
                    $result= mysqli_fetch_assoc($result);
                    $result = $result["password"];
//                    echo $result;
                    $ans = password_verify($password, $result);
                }
            }
        } catch (Exception $err) {
            echo $err->getMessage();
        }

        return $ans;
    }
}