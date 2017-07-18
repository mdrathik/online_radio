<?php

class Connection
{
    public    $conn = "";
    protected $host = "localhost";
    protected $dbname = "online_radio";
    protected $user = "root";
    protected $pass = "";

    function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->pass);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }


}

?>