<?php

require_once ("Database.php");

class OcjenaModel
{
    private $conn;
    private $table="ocjene";

    public $predmet;
    public $ocjena;
    public $id_student;

    public function __construct($db)
    {
        $this->conn=$db;
    }

    public function dohvatiOcjene()
    {
        $query="SELECT * FROM ".$this->table;
        $stmt=$this->conn->prepare($query); 
        $stmt->execute();
        return $stmt;
    }

    public function dodajOcjenu()
    {
        $query="INSERT INTO ".$this->table." (predmet, ocjena, id_student) VALUES (:predmet, :ocjena, :id_student)";
        $stmt=$this->conn->prepare($query);
        $this->predmet=htmlspecialchars(strip_tags($this->predmet));
        $this->ocjena=htmlspecialchars(strip_tags($this->ocjena));
        $this->id_student=htmlspecialchars(strip_tags($this->id_student));
        $stmt->bindParam(":predmet", $this->predmet);
        $stmt->bindParam(":ocjena", $this->ocjena);
        $stmt->bindParam(":id_student", $this->id_student);
        $stmt->execute();
    }


}

?>