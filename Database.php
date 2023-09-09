<?php

class Database 
{
    private $host="localhost";
    private $db_name="evidencija";
    private $username="root";
    private $password="TrDd.655";
    private $conn;

    public function connect()
    {
        $this->conn=null;

        try
        {
            $this->conn=new PDO("mysql:host=".$this->host."; dbname=".$this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $e)
        {
            echo "Greška prilikom spajanja na bazu: ".$e->getMessage()."\n";
        }

        return $this->conn;
    }
}


?>