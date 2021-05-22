<?
include_once './lectura.php';

class Api{
    function getAll(){
        $lectura = new Lectura();
        $lecturas = array();
        // $lecturas["items"] = array();

        $res = $lectura->getLecturas();

        if($res->rowCount()){
            while ($row = $res->fetch(PDO::FETCH_ASSOC)){
                $item=array(
                    "id_estacion" => $row['id_estacion'],
                    "fecha" => $row['fecha'],
                    "temperatura" => $row['temperatura'],
                    "presion" => $row['presion'],
                    "velocidad_viento" => $row['velocidad_viento'],
                    "direccion_viento" => $row['direccion_viento'],
                    "radiacion_solar" => $row['radiacion_solar'],
                    "radiacion_uv" => $row['radiacion_uv'],
                    "humedad" => $row['humedad']
                );
                array_push($lecturas, $item);
            }
        
            echo json_encode($lecturas);
        }else{
            echo json_encode(array('mensaje' => 'No hay elementos'));
        }
    }

    function addLectura($lectura){
        $id=0;$fecha="";$tem=0;$pres=0;$vel=0;$dir=0;$sol=0;$uv=0;$hum=0;
        foreach($lectura as $ls){
            global $id;$fecha;$tem;$pres;$vel;$dir;$sol;$uv;$hum;
            $id= $ls['id_estacion'];
            $fecha=$ls['fecha'];
            $tem+=$ls['temperatura'];
            $pres+=$ls['presion'];
            $vel+=$ls['velocidad_viento'];
            $dir+=$ls['direccion_viento'];
            $sol+=$ls['radiacion_solar'];
            $uv+=$ls['radiacion_uv'];
            $hum+=$ls['humedad'];
        }
        
        
        $l = new Lectura();

        return $l->setLectura( $id,$fecha,$tem/6,$pres/6,$vel/6,$dir/6,$sol/6,$uv/6,$hum/6);
    }

}
