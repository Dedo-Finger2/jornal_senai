<?php
    namespace App\Controller
    {
    use App\Model\NovoDia;
    require_once '../../model/Model.php';
        class DataController extends NovoDia
        {
            
            public function setDia($data, $aviso)
            {
                if($data != "" && $aviso != "")
                {
                    $this->setData($data);
                    $this->setAviso($aviso);
                    $this->save();
                } else {
                    echo "Dados inválidos!";
                }
            }

            public function deleteDia()
            {

            }

            public function updateDia($data, $aviso, $id)
            {
                if(isset($data) && isset($aviso))
                {
                    $this->update($data, $aviso, $id);
                }
                               
            }

        }
    }
