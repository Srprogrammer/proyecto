<?php
	$conexion = new PDO('mysql:host=localhost;dbname=proyectoeventos', 'root', '');
	$conexion->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
?>