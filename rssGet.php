<?php
	function mostrarDatos20M($filtro = ''){
		include_once 'conexionBD.php';
		if($filtro==''){
			$sql="SELECT * FROM noticias";
			$consulta = $conexion->prepare($sql);
		}else{
			$sql="SELECT * FROM noticias WHERE titulo LIKE '%$filtro%'";
			$consulta = $conexion->prepare($sql);
		}
		$consulta->execute();
		$resultado = $consulta->fetchAll();
		foreach($resultado as $noticia){
			
			$id = $noticia['idNoticia'];
			$titulo = stripslashes($noticia['Titulo']);
			$link = stripslashes($noticia['Link']);
			$contenido = stripslashes($noticia['Contenido']);
			echo "<div>";
				echo "<h3>$titulo</h3>";
				echo $contenido;
				echo "<br/><br/><a href='$link'>LEER MAS EN LA FUENTE</a>";
			echo "</div>";
		}
		$conexion = null;
	}
	function cargarDatos20M($url = ''){
		include_once 'conexionBD.php';
		$context  = stream_context_create(array('http' => array('header' => 'Accept: application/xml')));
		$xml = file_get_contents($url, false, $context); 
		$xml = simplexml_load_string($xml);
		/* Preparo la consulta SQL */
		$sql="INSERT INTO Noticias (Titulo, link, Contenido) VALUES (:titulo , :link , :contenido)";
		$consulta = $conexion->prepare($sql);
		/* Establezco los parametros */
		$consulta->bindParam(':titulo',$titulo);
		$consulta->bindParam(':link',$link);
		$consulta->bindParam(':contenido',$contenido);
		
		foreach($xml->item as $noticia){
			/* Para cada elemento item del XML extraigo los elementos hijos, luego saco la informacion a traves de los nodos del documento XML y aplico addslashes para sanizar el texto para evitar \' y \" ya que la consulta SQL fallaria */
			$titulo = addslashes($noticia->title);
			$link = addslashes($noticia->link);
			$contenido = addslashes($noticia->description);
			/* Ejecuto la consulta */
			$consulta->execute();
			echo "Insertada NOTICIA a la BD <br/>";
		}
		$conexion = null;
	}
	function insertarEvento(){
		include_once 'conexionBD.php';
		$idEvento;
		$nombreEvento;
		$fechaInicio;
		$fechaFin;
		$horaInicio;
		$horaFin;
		$descripcion;
		$localizacion;
		$altura;
		$latitud;
		$precio;
		$sql="INSERT INTO eventos VALUES (null,
										'EventoPrueba2',
										'2008-7-04',
										'2008-7-24',
										'22:10:04',
										'23:10:04',
										'PRUEBAAA',
										'AQUIII',
										 10,
										 20,
										 30);";
		$consulta = $conexion->prepare($sql);
		
			try{
				$consulta->execute();
			}catch(PDOException $e ){
				echo "Error ejecutando la consulta";
			}
		}
	function mostrarEventoPorId($id = 0){
		include_once 'evento.php';
		if($id == 0)
			return false;
		include_once 'conexionBD.php';
		$sql="SELECT * FROM eventos WHERE ideventos = $id";
		$consulta = $conexion->prepare($sql);
		
		try{
			$consulta->execute();
			
		}catch(PDOException $e){
			echo "Error ejecutando la consulta";
			return false;
		}
		$resultado = $consulta->fetchAll();
		
		$idEvento =$resultado['ideventos'];
		$nombreEvento = $resultado['nombrevento'];
		$fechaInicio = $resultado['fechainicio'];
		$fechaFin = $resultado['fechafin'];
		$horaInicio = $resultado['horainicio'];
		$horaFin = $resultado['horafin'];
		$descripcion = 	$resultado['descripcion'];
		$localizacion = $resultado['localizacion'];
		$altura = $resultado['altura'];
		$latitud = $resultado['latitud'];
		$precio = $resultado['precio'];
		
		$evento = new evento($fechaInicio, $fechaFin, $horaInicio, $horaFin,$descripcion,$localizacion,$altura,$latitud,$precio);
		
		echo $evento->getFechaInicio();
		
		
	
		
		
		
		
		
		
	}
	//cargarDatos20M('http://www.20minutos.com/rss/artes/');
	//mostrarDatos20M();
	//insertarEvento();
	mostrarEventoPorId(1);
?>