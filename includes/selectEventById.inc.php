<?php
   include_once('./conexionBD.php');
   if(!isset($_GET['id']))
        return false;
   
   $sql="SELECT * FROM eventos WHERE ideventos = :id ";
   try{
      $consulta = $conexion->prepare($sql);
      $consulta->bindParam('id',$_GET['id']);
      $consulta->execute();
      $evento = $consulta->fetch();
    }catch(PDOException $e ){
    	echo "Error ejecutando la consulta".$e;
    }
   
    echo "{\"nombre\" : \"".$evento['nombrevento']."\",\"descripcion\":\"".$evento['descripcion']."\",\"localizacion\":\"".$evento['localizacion']."\",\"precio\":".$evento['precio']."}";

?>