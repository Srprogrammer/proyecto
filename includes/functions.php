<?php
function comprobarLogin($email,$pass){
    include('conexionBD.php');
    $sql='SELECT * FROM usuarios WHERE email = :email AND contrasena = :pass';
    try{
        $consulta = $conexion->prepare($sql);
        $consulta->bindParam(':email',$email);
        $consulta->bindParam(':pass',md5($pass));
        $consulta->execute();
        if($consulta -> rowCount() !=1){
            $devuelvo = 0;
        }else{ 
            $resultado = $consulta->fetch();
            $devuelvo = 1 ;
       }     
    }catch(PDOException $e){
         echo "{'estado':'Ocurrio un error. Comprueba que hayas introducido correctamente los datos PDO .'}";
    }
    $conexion=NULL;
    return $devuelvo;
}
function Redirect($url, $code = 302)
{
    if (strncmp('cli', PHP_SAPI, 3) !== 0)
    {
        if (headers_sent() !== true)
        {
            if (strlen(session_id()) > 0) // if using sessions
            {
                session_regenerate_id(true); // avoids session fixation attacks
                session_write_close(); // avoids having sessions lock other requests
            }

            if (strncmp('cgi', PHP_SAPI, 3) === 0)
            {
                header(sprintf('Status: %03u', $code), true, $code);
            }

            header('Location: ' . $url, true, (preg_match('~^30[1237]$~', $code) > 0) ? $code : 302);
        }

        exit();
    }
}
function numeroDeEventos(){
     include('conexionBD.php');
     $sql="SELECT Count(t1.idEventos) AS 'numero' FROM eventos t1";
     try{
        $consulta = $conexion->prepare($sql);
        $consulta->execute();
        $resultado = $consulta->fetch();
     }catch(PDOException $e){
        return "ocurrio un error";
     }
     $conexion=null;
    return $resultado['numero'];
}
function numeroDeUsuarios(){
     include('conexionBD.php');
     $sql="SELECT Count(t1.email) AS 'numero' FROM usuarios t1";
     try{
        $consulta = $conexion->prepare($sql);
        $consulta->execute();
        $resultado = $consulta->fetch();
     }catch(PDOException $e){
        return "ocurrio un error";
     }
     $conexion=null;
    return $resultado['numero'];
}
function numeroDeComentarios(){
     include('conexionBD.php');
     $sql="SELECT Count(t1.idcomentarios) AS 'numero' FROM comentarios t1";
     try{
        $consulta = $conexion->prepare($sql);
        $consulta->execute();
        $resultado = $consulta->fetch();
     }catch(PDOException $e){
        return "ocurrio un error";
     }
     $conexion=null;
    return $resultado['numero'];
}
function numeroDeCategorias(){
     include('conexionBD.php');
     $sql="SELECT Count(t1.idcategoria) AS 'numero' FROM categorias t1";
     try{
        $consulta = $conexion->prepare($sql);
        $consulta->execute();
        $resultado = $consulta->fetch();
     }catch(PDOException $e){
        return "ocurrio un error";
     }
     $conexion=null;
    return $resultado['numero'];
}
function informacionEventos(){
    include('conexionBD.php');
    $sql="SELECT * FROM eventos";
    try{
        $consulta = $conexion->prepare($sql);
        $consulta->execute();
        $resultado = $consulta->fetchAll();
    }catch(PDOException $e){
        echo "ERROR";
    }
    return $resultado;
}
function informacionUsuarios(){
    include('conexionBD.php');
    $sql="SELECT * FROM usuarios";
    try{
        $consulta = $conexion->prepare($sql);
        $consulta->execute();
        $resultado = $consulta->fetchAll();
    }catch(PDOException $e){
        echo "ERROR";
    }
    return $resultado;
}
function devuelveCategorias(){
    include('conexionBD.php');
    $sql="SELECT * FROM categorias";
    try{
        $consulta = $conexion->prepare($sql);
        $consulta->execute();
        $resultado = $consulta->fetchAll();
    }catch(PDOException $e){
        echo "ERROR";
    }
    return $resultado;  
}
function href ($link, $text, $class) {
    return "<a href=\"$link\">$text</a>";
}
function img ($src, $alt) {
    return "<img class =\"$class\" border=0 src=\"$src\" alt=\"$alt\" />";
}
?>