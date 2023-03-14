<?php
use App\Controller\Controller;
use App\Model\NovoDia;
    require_once('../Controller.php');

    extract($_POST);



    $dia = new Controller();
    if(!$dia->setDia($data, $aviso)){
        echo "Dados inseridos com sucesso!";
    } else {
        echo "algo deu errado, burrinho";
    }
