<?php
    include_once('conexionBD.php');
    if(!isset($_POST['email']) && !isset($_POST['pass']))
        return false;
    $sql='SELECT * FROM usuarios WHERE email = :email AND contrasena = :pass';
    try{
        $consulta = $conexion->prepare($sql);
        $consulta->bindParam(':email',$_POST['email']);
        $consulta->bindParam(':pass',md5($_POST['pass']));
        $consulta->execute();
        if($consulta -> rowCount() !=1){
            echo "{'estado':'Ocurrio un error. Comprueba que hayas introducido correctamente los datos .'}";
        }else{ 
            $resultado = $consulta->fetch();
            echo "{'estado': 'Login Completado', 'email' : '".$resultado['email']."', 'nombre' : '".$resultado['nombreusuario']."'}";
       }     
    }catch(PDOException $e){
         echo "{'estado':'Ocurrio un error. Comprueba que hayas introducido correctamente los datos PDO  .'}";
    }


?>