<?php

require_once ("StudentModel.php");
require_once ("AllView.php");

class StudentController
{
    private $model;
    private $view;

    public function __construct($model, $view)
    {
        $database=new Database();
        $db=$database->connect();
        $this->model=new StudentModel($db);
        $this->view=new AllView();
    }

    public function prikaziStudente()
    {
        $studenti=$this->model->dohvatiStudente()->fetchAll(PDO::FETCH_ASSOC);
        $this->view->ispisStudenta($studenti);
    }

    public function dodajStudenta($ime, $prezime)
    {
        $this->model->ime=$ime;
        $this->model->prezime=$prezime;
        $this->model->dodajStudenta();
    }

}

?>