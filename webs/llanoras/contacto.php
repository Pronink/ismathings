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
	<title>Llanora's Battle/Contacto</title>
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
				<a href="contacto.php" class="menuTexto" id="botonpulsado">Contacto
				<div class="texto , centrado">Opiniones, reportes y bugs
				</div></a>
			</div>
			<div class="menu">
				<a href="donaciones.php" class="menuTexto" id="botonmenu">Donaciones
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
		CONTACTO
	</div>
	<div class="seccion">
<div class="titulonoticia">Enviar e-Mail</div>
<div class="noticia">
<p class="centrado">Puedes enviarnos tus sugerencias, problemas, dudas o reportes a jugadores a través de nuestro
correo electrónico:</p>
<div class="textoImportante">llanorasbattle@gmail.com</div><br/>
</div>


<div class="titulonoticia">¿Porque puedes contactarnos?</div>
<div class="noticia">
	<div class="subtitulo">SUGERENCIAS:</div>
	<p>Las sugerencias nos ayudan a entender mejor que es lo que quieren los jugadores mejorar o que les gustaría
	cambiar, por lo que no dudéis en mandar correos electrónicos si se os ocurre alguna idea.</p>
	<div class="subtitulo">DUDAS:</div>
	<p>Las dudas y problemas serán resueltas lo antes posible y pueden ser resueltas desde el correo electrónico
	o desde el chat de Minecraft del servidor Llanora's Battle.</p>
	<div class="subtitulo">REPORTES:</div>
	<p>Los reportes a jugadores problemáticos son muy útiles para sanear el servidor. Si no sabéis cuando un jugador
	puedes ser baneado, justo abajo disponéis de una lista detallada.</p>
</div>

<div class="titulonoticia">Cuando un jugador puede ser reportado</div>
<div class="noticia">
	<p>•	Uso de hacks de visión, de PVP, de movimiento mejorado o de cualquier función que empeore la experiencia de juego de los demás jugadores</p>
	<p>•	Uso de técnicas para provocar fallos en el juego, de manera intencionada</p>
	<p>•	Abandonar una partida a medias reiteradas veces</p>
	<p>•	Salir de los límites establecidos para los jugadores (aunque tranquilo, esto es imposible)</p>
	<p>•	Hacer SPAM de manera repetida</p>
	<p>•	Perjudicar al equipo propio intencionadamente de cualquier manera (chivar al otro equipo, grieffing, etc)</p>
	<p>•	Construcciones y discusiones de carácter político, religioso, machista, homófoba o racista</p>
</div>

<div class="titulonoticia">Más información</div>
<div class="noticia">
	<p>•	Por seguridad le recordamos que ningún usuario o administrador del servidor Llanora's Battle le
	pedirá contraseña alguna.</p>
	<p>•	Todos los correos electrónicos recibidos son leidos por administradores y serán contestados en el menor tiempo posible.</p>
	<p>•	En todos los correos prometemos una absoluta confidencialidad y anonimidad.</p>
</div>

</div>
</body>
</html>
