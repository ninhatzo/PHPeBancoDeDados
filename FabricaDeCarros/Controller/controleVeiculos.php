<?php

    include_once ('./Model/Veiculos.php');

    
    class controleVeiculos {
        private $model;

        function __construct() {
            $this->model = new veiculosModel();
        }

        function index() {
            $resultData = $this->model->getAll();
            require_once __DIR__ . '/../Views/index.php';
        }

        function getAll() {
            $resultData = $this->model->getAll();
            require_once __DIR__ . '/../Views/index.php';
        }

        function insert() {
            $modelo = $_POST['modelo'] ?? null;
            $cor = $_POST['cor'] ?? null;
            
            $this->model->insert($modelo,$cor);
            header("location: index.php");
        }

        function edit() {
            $id = $_POST['id'] ?? null;
            $modelo = $_POST['modelo'] ?? null;
            $cor = $_POST['cor'] ?? null;
            $resultQuery = $this->model->edit($id,$modelo,$cor);
            require_once __DIR__ . 'index.php';
        }

        function getId() {
            $id = $_GET['id'] ?? null;
            $this->model->getId($id);
        }

        function delete() {
            $id = $_GET['id'] ?? null;

            if($id) {
                $this->model->delete($id);
            }

            header("location: index.php");
            exit;
        }
    }

?>