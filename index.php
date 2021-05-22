<?php
    include_once 'api.php';

    $api = new Api();

    if($_SERVER['REQUEST_METHOD'] == "GET"){
        $api->getAll();
    }

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $dato = json_decode(file_get_contents('php://input'),true);
        $api->addLectura($dato);
        echo "<h1>Datos agregados</h1>";
    }
    
?>
