<?php

require_once ("OcjenaModel.php");
require_once ("AllView.php");

class OcjenaController
{
    private $model;
    private $view;

    public function __construct($model, $view)
    {
        $database=new Database();
        $db=$database->connect();
        $this->model=new OcjenaModel($db);
        $this->view=new AllView();
    }

    public function prikaziOcjene()
    {
        $ocjene=$this->model->dohvatiOcjene()->fetchAll(PDO::FETCH_ASSOC);
        $this->view->ispisOcjena($ocjene);
    }

    public function dodajOcjenu($predmet, $ocjena, $id_student)
    {
        $this->model->predmet=$predmet;
        $this->model->ocjena=$ocjena;
        $this->model->id_student=$id_student;
        $this->model->dodajOcjenu();
    }

}

?>