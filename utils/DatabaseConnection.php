<?php

class DatabaseConnection {
    private $servername = "192.168.100.11";
    private $port = '1433';
    private $username = "rms_login";
    private $password = "Rms12345";
    private $dbname = "dbjas_test";
    protected $conn;

    public function __construct() {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname, $this->port);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function closeConnection() {
        $this->conn->close();
    }
}
?>