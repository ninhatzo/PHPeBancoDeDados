<?php

    require_once('./configuration/Conecte.php');

    class veiculosModel extends Conecte {
        private $veiculo;

        function __construct() {
            parent::__construct();
            $this-> veiculo='veiculos';
        }

        function getAll() {
            $sqlSelect = $this->conexao->query("SELECT * FROM $this->veiculo");
            $resultQuery = $sqlSelect->fetchAll();
            return $resultQuery;
        }

        function insert($modelo,$cor) {
            $sqlSelect = $this->conexao->prepare("INSERT INTO $this->veiculo  (modelo,cor) VALUES (?, ?)");
            return  $sqlSelect->execute([$modelo,$cor]);
        }

        function edit($id, $modelo, $cor) {
            $sqlSelect = $this->conexao->prepare("UPDATE $this->veiculo SET $modelo = ?, $cor = ? WHERE id = ?");
            return $resultQuery = $sqlSelect->fetchAll();
        }
        
        function delete($id) {
            $sqlSelect = $this->conexao->prepare("DELETE FROM $this->veiculo WHERE id = ?");
            return $sqlSelect->execute([$id]);
        }

        function getId($id) {
            $sqlSelect = $this->conexao->query("SELECT * FROM $this->veiculo WHERE id = $id");
            return $resultQuery = $sqlSelect->fetchAll();
        }
    }

?>