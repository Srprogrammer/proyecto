<?php
include_once('./conexionBD.php');
 if( !isset($_POST['nombreEvento'])|| !isset($_POST['fechaInicio']) || !isset($_POST['fechaFin']) || 
     !isset($_POST['horaInicio']) || !isset($_POST['horaFin']) || !isset($_POST['descripcion']) || 
    !isset($_POST['localizacion'])  || !isset($_POST['altura']) || !isset($_POST['latitud']) || !isset($_POST['precio'] ) )
        return false;
	
	$nombreEvento = $_POST['nombreEvento'];
	$fechaInicio = date('Y-m-d', strtotime(str_replace('/', '-', $_POST['fechaInicio'])));
	$fechaFin = date('Y-m-d', strtotime(str_replace('/', '-', $_POST['fechaFin'])));
	$horaInicio =  $_POST['horaInicio'] ;
	$horaFin = $_POST['horaFin'];
	$descripcion = $_POST['descripcion'];
	$localizacion = $_POST['localizacion'];
	$altura = $_POST['altura'];
	$latitud = $_POST['latitud'];
	$precio = $_POST['precio'];

/*
* La fecha debe estar en formato yyyy-mm-dd por lo que uso date() para darle formato
*
*/
$sql ="INSERT INTO eventos (nombrevento, fechainicio, fechafin, horainicio, horafin, descripcion, localizacion, altura, latitud, precio) VALUES ( :nombreEvento , :fechaInicio , :fechaFin , :horaInicio , :horaFin , :descripcion , :localizacion, :altura, :latitud, :precio)" ; 
try{
    $consulta = $conexion->prepare($sql) ;
    $consulta->execute(array('nombreEvento' => $nombreEvento, 'fechaInicio' => $fechaInicio , 'fechaFin' => $fechaFin, 'horaInicio' => $horaInicio, 'horaFin' => $horaFin, 'descripcion' => $descripcion, 'localizacion' => $localizacion, 'altura' => $altura , 'latitud' => $latitud , 'precio' => $precio));
}catch(PDOException $e ){
	echo "Error ejecutando la consulta".$e;
}

?>