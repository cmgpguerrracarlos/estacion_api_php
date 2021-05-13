<?php
include_once 'conexion.php';

class Lectura extends DB{
    function getLecturas(){
        $query = $this->conectar()->query('SELECT * FROM lectura');
        return $query;
    }

    function setLectura($id,$fecha,$tem,$pres,$vel,$dir,$rsolar,$ruv,$hum){
        $query = $this->conectar()->query("INSERT INTO lectura VALUES ($id,'$fecha',$tem,$pres,$vel,$dir,$rsolar,$ruv,$hum)");
        return $query;
    }


}

?>