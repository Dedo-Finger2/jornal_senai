<?php
use App\Controller\Controller;
use App\Controller\DataController;
use App\Model\NovoDia;
    require_once('../Controller.php');

    extract($_POST);



    if(isset($dados))
    {
        echo "inserção de dados destivada por hora.";
        //$dia = new DataController();
        //$dia->setDia($data, $aviso);
    } elseif(isset($view)) {
        header("Location: ../../view/data/index.php");
    }


    //$dia = new DataController();
    //$dia->setDia($data, $aviso);
    /*
    if(!$dia->setDia($data, $aviso)){
        echo "Dados inseridos com sucesso!";
    } else {
        echo "algo deu errado, burrinho";
    }
    */
