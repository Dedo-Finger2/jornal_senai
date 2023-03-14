<?php
    namespace App\Model
    {
        class NovoDia
        {
            protected $data;
            protected $aviso;
            protected $conexao;

            public function __construct()
            {
                $this->conexao = new \mysqli("localhost", "root", "", "jornal_senai");
            }

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
                //$this->conexao = new \mysqli("localhost", "root", "", "jornal_senai");

                $sql = $this->conexao->prepare("INSERT INTO day(data, aviso) VALUES (?,?)");
                $sql->bind_param("ss", $this->data, $this->aviso);
                $sql->execute();
                $sql->close();
                
            }

            public function delete($id)
            {
                $sql = $this->conexao->prepare("DELETE FROM day WHERE id=?");
                $sql->bind_param("s", $id);
                $sql->execute();
                $sql->close();
            }

            public function update($novo_data, $novo_aviso, $id)
            {
                //$this->conexao = new \mysqli("localhost", "root", "", "jornal_senai");

                $this->data = $novo_data;
                $this->aviso = $novo_aviso;
            
                $sql = $this->conexao->prepare("UPDATE day SET data=?, aviso=? WHERE id=?");
                $sql->bind_param("ssi", $this->data, $this->aviso, $id);
                $sql->execute();
                $sql->close();
            }

        }
    }

    