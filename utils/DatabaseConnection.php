<?php

class DatabaseConnection {
    private $servername = "localhost";
    private $username = "development";
    private $password = "Development@123";
    private $dbname = "staff_jes";
    protected $conn;

    public function __construct() {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function closeConnection() {
        $this->conn->close();
    }
}
?>