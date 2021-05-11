<?php
include_once 'conexion.php';

class Lectura extends DB{
    function getLecturas(){
        $query = $this->conectar()->query('SELECT * FROM lectura');
        return $query;
    }
}

?>