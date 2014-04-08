<?php
include_once('./conexionBD.php');
/**
* Compruebo que los datos no sean NULL
*/
    if( !isset($_POST['nombre']) || isset($_POST['email']) || isset($_POST['password']))
        return false;
/**
*  Codifico la contrasenia a md5
*/
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $pass = md5($_POST['password']);
    $sql = "INSERT INTO usuarios VALUES (:email,:nombre,:pass)";
    
	try{
        $consulta = $conexion->prepare($sql) ;
	    $consulta->execute(array('email' => $email , 'nombre' => $nombre , 'pass' => $pass));
	}catch(PDOException $e ){
    	echo "Error ejecutando la consulta<br/><br/>".$e;
	}
?>