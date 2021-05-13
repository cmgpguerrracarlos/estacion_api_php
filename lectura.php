<?php
include_once 'conexion.php';

class Lectura extends DB{
    function getLecturas(){
        $query = $this->conectar()->query('SELECT * FROM lectura');
        return $query;
    }

    function setLectura($id,$fecha,$hora,$tem,$pres,$vel,$dir,$rsolar,$ruv,$hum){
        
        $fe = strtotime("Y:m:d", strtotime($fecha));
        $ho = strtotime("H:i:sa", strtotime($hora));
        $query = $this->conectar()->query("INSERT INTO lectura VALUES ($id,'$fecha','$hora','$tem','$pres','$vel','$dir','$rsolar','$ruv','$hum')");
        return $query;
    }


}

?>