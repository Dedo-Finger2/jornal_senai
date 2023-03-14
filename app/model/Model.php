<?php
    namespace App\Model
    {
        class NovoDia
        {
            protected $data;
            protected $aviso;
            protected $conexao;

            public function setData($data)
            {
                $this->data = $data;
            }

            public function getData()
            {
                return $this->data;
            }

            public function setAviso($aviso)
            {
                $this->aviso = $aviso;
            }

            public function getAviso()
            {
                return $this->aviso;
            }

            public function save()
            {
                $this->conexao = new \mysqli("localhost", "root", "", "jornal_senai");

                $sql = $this->conexao->prepare("INSERT INTO day(data, aviso) VALUES (?,?)");
                $sql->bind_param("ss", $this->data, $this->aviso);
                $sql->execute();
                
            }

            public function delete()
            {

            }

            public function update()
            {

            }

            public function list()
            {

            }

        }
    }

    