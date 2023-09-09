<?php

require_once ("Database.php");

class StudentModel
{
    private $conn;
    private $table="studenti";

    public $ime;
    public $prezime;

    public function __construct($db)
    {
        $this->conn=$db;
    }

    public function dohvatiStudente()
    {
        $query="SELECT * FROM ".$this->table;
        $stmt=$this->conn->prepare($query); 
        $stmt->execute();
        return $stmt;
    }

    public function dodajStudenta()
    {
        $query="INSERT INTO ".$this->table." (ime, prezime) VALUES (:ime, :prezime)";
        $stmt=$this->conn->prepare($query);
        $this->ime=htmlspecialchars(strip_tags($this->ime));
        $this->prezime=htmlspecialchars(strip_tags($this->prezime));
        $stmt->bindParam(":ime", $this->ime);
        $stmt->bindParam(":prezime", $this->prezime);
        $stmt->execute();
    }
    

}

?>