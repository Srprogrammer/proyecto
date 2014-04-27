<?php
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); // Expira en fecha pasada
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); // Siempre página modificada
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Pragma: no-cache"); // HTTP/1.0
include('./includes/conexionBD.php');
function comprobarSiExisteUser($nombre=""){
    include('./includes/conexionBD.php');
    if($nombre=="")
        return false;
    $sql2="SELECT * FROM usuarios WHERE nombreusuario = :nombre ";
    $consulta2 = $conexion->prepare($sql2);
    $consulta2->bindParam(':nombre',$nombre);
    $consulta2->execute();
    $resultado = $consulta2->rowCount();
    $conexion=null;
    return $resultado; 
}
if(isset($_POST['nombre']) && isset($_POST['email']) && isset($_POST['password'])){
    $sql="INSERT INTO usuarios VALUES (:email, :nombre, :password)";
    $existe=0;
    
   if(comprobarSiExisteUser($_POST['nombre'])==0){
        try {
            $consulta = $conexion->prepare($sql);
            $consulta->bindParam(':email',$_POST['email']);
            $consulta->bindParam(':nombre',$_POST['nombre']);
            $consulta->bindParam(':password',md5($_POST['password']));
            if($consulta->execute()){
                echo "<div class='alert alert-success text-center'>Te registraste con exito, gracias por confiar en nosotros. En breves seras redireccionado.</div>";
            }
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }else if(comprobarSiExisteUser($_POST['nombre'])==1){
        echo "<div class='alert alert-danger text-center'> El nombre de usuario ya existe. Seras redireccionado a la pagina de inicio. Disculpe las molestias. </div>";
    }
    $conexion=null;
    header('refresh:2;url=index.php');
}
?>
    <link href="css/bootstrap.css" rel="stylesheet">

    <div class="text-center">
                    <img src="http://www.travislayne.com/images/loading.gif" class="icon" />
                    <h4>Processing... </h4>
                </div>
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
