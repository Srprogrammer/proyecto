<?php
include_once('../conexionBD.php');
if(isset($_POST['filtro']))
    $sql="SELECT * FROM eventos WHERE titulo like '%".$_POST['filtro']."%'";
else
    $sql="SELECT * FROM eventos";
$consulta = $conexion->prepare($sql);
$consulta->execute();
$eventos = $consulta->fetchAll();
echo "{";
$cont=0;
foreach($eventos as $evento){
    if($cont == 0 )
        echo   "{\" idEvento\" : ".$evento['ideventos'].", \"evento\" : ";
    else
          echo   " ,{ \"idEvento\" : ".$evento['ideventos'].", \"evento\" : ";
    echo "{\"nombre\" : \"".$evento['nombrevento']."\",\"descripcion\":\"".$evento['descripcion']."\",\"localizacion\":\"".$evento['localizacion']."\",\"precio\":".$evento['precio']."}}";
    $cont++;
}

echo "}";
?>