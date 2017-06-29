<?php
	$archivo = "mensajes.txt";
	
	function get_mensaje($input, $ref) {
		
		$file = fopen($input, "r");
		$texto = fread($file, filesize($input));
		$lineas = explode(PHP_EOL, $texto);
		
		$search = '#' . $ref;
		
		$result = "¡¡Mensaje no encontrado!!";
		
		foreach($lineas as $linea) {
			if(strpos($linea, $search) !== false) {
				$linea = explode('ª', $linea);
				$result = $linea[1];
				break;
			}
		}
		fclose($file);
		
		return $result;
	}
?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilos.css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/funciones.js"></script>
	<title>Llanora's Battle/Donaciones</title>
</head>
<body>
	<div class="contenedor">
		<div class="menuArriba">
			<div class="menu">
				<a href="index.php" class="menuTexto" id="botonmenu">Noticias
				<div class="texto , centrado">Eventos y actualizaciones
				</div></a>
			</div>
			<div class="menu">
				<a href="tutorial.php" class="menuTexto" id="botonmenu">Tutorial
				<div class="texto , centrado">El modo de juego y recomendaciones
				</div></a>
			</div>
			<div class="menu">
				<a href="contacto.php" class="menuTexto" id="botonmenu">Contacto
				<div class="texto , centrado">Opiniones, reportes y bugs
				</div></a>
			</div>
			<div class="menu">
				<a href="donaciones.php" class="menuTexto" id="botonpulsado">Donaciones
				<div class="texto , centrado">¿Nos ayudas?
				</div></a>
			</div>
		</div>
		<div class="tituloprincipal">
			<div id="cabecera">Llanora's Battle</div>
			<div id="subcabecera">SERVIDOR MINECRAFT</div>
			<div id="subcabecera">BATALLAS PVP POR EQUIPOS</div>
		</div>
		<div class="datos">
			<div class="titulo , izquierda">DATOS DE CONEXIÓN:</div>
			<div class="texto , izquierda">Ip: <?php echo get_mensaje($archivo, "IP"); ?></div>
			<div class="texto , izquierda">Versión de Minecraft: <?php echo get_mensaje($archivo, "VersionMC"); ?></div>
		</div>
		<div class="datos2">
			<div class="titulo , derecha">DESCARGAS:</div>
			<div class="derecha"><?php echo get_mensaje($archivo, "Texturepack"); ?></div>
		</div>
		<div class="flecha">
			<img src="imagenes/abajo.gif" /><div class="texto , centrado">Deslice la rueda del ratón</div>
		</div>
	</div>
	
	<div class="secciontitulo">
		DONACIONES
	</div>
	<div class="seccion">
	<div class="tituloNoticia">
	<div class="textoImportante">EN CONSTRUCCION</div>
	</div>
	</div>
</body>
</html>
