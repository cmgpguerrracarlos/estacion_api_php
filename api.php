<?
include_once './lectura.php';

class Api{


    function getAll(){
        $lectura = new Lectura();
        $lecturas = array();
        $lecturas["items"] = array();

        $res = $lectura->getLecturas();

        if($res->rowCount()){
            while ($row = $res->fetch(PDO::FETCH_ASSOC)){
                $item=array(
                    "id_estacion" => $row['id_estacion'],
                    "fecha_hora" => $row['fecha_hora'],
                    "temperatura" => $row['temperatura'],
                    "presion" => $row['presion'],
                    "velocidad_viento" => $row['velocidad_viento'],
                    "direccion_viento" => $row['direccion_viento'],
                    "radiacion_solar" => $row['radiacion_solar'],
                    "radiacion_uv" => $row['radiacion_uv'],
                    "humedad" => $row['humedad']
                );
                array_push($lecturas["items"], $item);
            }
        
            echo json_encode($lecturas);
        }else{
            echo json_encode(array('mensaje' => 'No hay elementos'));
        }
    }
}
?>