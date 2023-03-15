<?php
use App\Controller\Controller;
use App\Controller\DataController;
use App\Model\NovoDia;
    require_once('../Controller.php');

    extract($_POST);


    if(isset($dados))
    {
        //echo "inserção de dados destivada por hora.";
        $dia = new DataController();
        $dia->setDia($data, $aviso);
        header("Location: ../../../index.html");
    
    } elseif(isset($view)) 
    {
        header("Location: ../../view/data/index.php");
    
    } elseif(isset($update)) 
    {
        $dia = new DataController();
        $dia->updateDia($novo_data, $novo_aviso, $id);

        header("Location: ../../view/data/index.php");
    } elseif(isset($deleted))
    {
        $dia = new DataController();
        $dia->deleteDia($delete_id);

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
