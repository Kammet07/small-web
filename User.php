<?php

class User
{
    public function addUser($username, $password)
    {
        $conn = new DB;

        if ($conn instanceof DB) {
            password_hash($password, PASSWORD_BCRYPT);
            $query = "insert into small_web.users (username , password) values ($username, $password)";
        }
    }

    public function verificateUser($username, $password)
    {
        $conn = new DB;

        if ($conn instanceof DB) {
            $
        }
    }
}