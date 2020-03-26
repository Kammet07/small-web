<?php

class DB
{
    private $servername;
    private $username;
    private $password;
    public $connection;

    public function __construct($servername = "localhost", $username = "small-web", $password = "SmallWeb123")
    {
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;

    }

    public function connect()
    {
        $this->connection = new mysqli($this->servername, $this->username, $this->password);
        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }

        return $this->connection;
    }

    public function close()
    {
        mysqli_close($this->connection);
    }


}