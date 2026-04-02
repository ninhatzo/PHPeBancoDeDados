<?php
    define('HOST', 'localhost');
    define('DATABASENAME', 'crud_fabrica');
    define('USER', 'root');
    define('PASSWORD', '');

    class Conecte {

        protected $conexao;

        function __construct() {
            $this->conectaBD();
        }

        function conectaBD() { 
            try {
                $this->conexao = new PDO('mysql:host='.HOST.';dbname='.DATABASENAME, USER, PASSWORD);
            } catch(PDOException $e) {
                echo "Erro!". $e->getMessage();
                die();
            }
        }
    }

?>