<?php

    require_once('Controller/controleVeiculos.php');
    
    $controller = new controleVeiculos();
    
    $acao = $_GET['a'] ?? 'index';
    $rotasPermitidas =['delete','insert','getId', 'edit'];

    if(in_array($acao, $rotasPermitidas)) {
        $controller->$acao();
    } else {
        $controller->index();
    }
    
    ?>