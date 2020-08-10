<?php

class Database
{


    // specify your own database credentials
    private $host = "localhost";
    private $db_name = "hpsafmvaal_church";
    private $Ausername = "hpsafmvaal_church";
    private $password = "hpsafmvaal2030";
    public $conn;

    // get the database connection
    public function getConnection()
    {

        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->Ausername, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->exec("set names utf8");

            return $this->conn;
        } catch (PDOException $e) {
            echo "Connection error: " . $e->getMessage();
        }
    }
}
