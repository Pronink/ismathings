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
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/funciones.js"></script>
	<title>Llanora's Battle/Noticias</title>
	<meta name="theme-color" content="#B7B83E">
</head>
<body>
	<div class="contenedor">
		<div class="menuArriba">
			<div class="menu">
				<a href="index.php" class="menuTexto" id="botonpulsado">Noticias
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
NOTICIAS
	</div>
	<div class="seccion">

<div class="titulonoticia">1/1/2016 --- Feliz 2016 !!!</div>
<div class="noticia">
<p>
Desde aquella vez en Skype un amigo me recomendó volver a crear un servidor de captura la bandera, le he dado vueltas y he ido
montando lo que es a dia de hoy Llanoras's Battle. Ya no es específicamente un captura la bandera, pero creo que mantiene bastante bien
la esencia original del antiguo servidor.
</p>
<p>
A día de hoy, después de varios meses, el mapa ya es 100% funcional, tal vez solo faltarían pulir algunos detalles con vuestras sugerencias.
Ahora estoy centrado en las secciones de esta página web y cuando la publique espero que juguemos todos juntos.
</p>
<p>Por último dar las gracias a todos aquellos que han dado su tiempo a este proyecto tan especial para mi.</p>
<p>Un saludo a todos !!!<br/>Pronink</p>
</div>	

<div class="titulonoticia">4/12/2015 --- Cambios Server Beta 6.1</div>
<div class="noticia">
<div class="subtitulo">CAMBIOS:</div>
<p>•	Añadidas partículas de sangre cuando un jugador recibe daño.</p>
<p>•	Consejos cuando se regenera el campo de batalla.</p>
<p>•	Añadido mucho más tiempo desde que un equipo gana hasta que se reinicia la partida.</p>
<p>•	La regeneración y fuerza que proporcionaban los nexos a sus equipos han sido eliminados.</p>
</div>	

<div class="titulonoticia">26/11/2015 --- Cambios Server Beta 6.0</div>
<div class="noticia">
<div class="subtitulo">CAMBIO DE MECÁNICAS EN CODICIA:</div>
<p>•	Codicia ya no dropeará diamantes.</p>
<p>•	Cuando se asesina a Codicia, este genera un bloque de diamante en el centro de su base.</p>
<p>•	Nueva base para codicia, ahora más currada y colocado más arriba para facilitar el acceso a los codiciosos.</p>
<p>•	Ahora se puede construir en la base de Codicia aunque éstos bloques se romperán si Codicia muere.</p>
<p>•	Nuevos efectos visuales y sonoros para Codicia.</p>
<p>•	Al igual que en la versión anterior, mala codicia nunca muere. Cuando Codicia muere, spawnea otro.</p>
<p>•	La vida y resistencia al knockback no se han modificado en esta versión.</p>
<div class="subtitulo">CAMBIOS:</div>
<p>•	Ahora el nexo, además de otorgar Regeneración 1 a sus aliados, da Fuerza 1. El rango de efecto ahora es algo mayor y se han modificado sus partículas.</p>
<div class="subtitulo">BUGS ARREGLADOS:</div>
<p>•	Ahora ya no spawnean varios Codicias al mismo tiempo</p>
<p>•	Arreglado error relacionado con los mensajes que enviaba el sistema por error cuando se activaban los efectos de Fuerza 1 y Fuerza 2 superado el tiempo.</p>
<!--<p><img src="imagenes/imgPostBeta50.png" width="100%" /></p>-->
</div>	
		
<div class="titulonoticia">1/11/2015 --- Cambios Server Beta 5.1</div>
<div class="noticia">
<div class="subtitulo">CAMBIOS:</div>
<p>•	Agregados carteles para indicar el contenido de varios baules y el uso del lapislazuli.</p>
<p>•	Implementado más opciones para el modo depuración.</p>
<p>•	Rehecho accesos directos y teletransportes para los administradores.</p>
<p>•	Redistribuidos y rebalanceados baules pre-rellenados en el campo de batalla.</p>
</div>

<div class="titulonoticia">25/10/2015 --- Cambios Server Beta 5.0</div>
<div class="noticia">
<div class="subtitulo">CAMBIOS:</div>
<p>•	Corregidos montones de errores de seguridad y de resets de mapa y juego.</p>
<p>•	Implementado modo depuración para los administradores.</p>
<p>•	Implementado control remoto de funciones para los administradores.</p>
<p>•	Añadidos cofres para la creación de pociones.</p>
<p>•	Corregidos más errores.</p>
</div>

<div class="titulonoticia">17/10/2015 --- Cambios Server Beta 4.0</div>
<div class="noticia">
<div class="subtitulo">CAMBIOS:</div>
<p>•	Implementado sistema de regeneración de mapa ingame.</p>
<p>•	Implementado sistema de reseteo completo del juego y de sus jugadores.</p>
<p>•	Ahora el reloj se reinicia a 0 cuando no hay suficientes jugadores.</p>
<p>•	Añadido paso intermedio para poder ver la regeneración del terreno antes de empezar el juego.</p>
<p>•	Añadidos cofres con algo de flechas, diamantes y tnt en la zona central para facilitar el inicio.</p>
<p>•	Minas agrandadas para adaptarlas al combate.</p>
</div>

	
<div class="titulonoticia">4/10/2015 --- Cambios Server Beta 3.1</div>
<div class="noticia">
<div class="subtitulo">CAMBIOS:</div>
<p>•	Facilitar acceso a las minas para mejorar el acceso de un terreno a otro.</p>
<p>•	Cambiar drops de lapislázuli por ores de lapislázuli (dan + experiencia que el carbón).</p>
<p>•	Cambiar ores de carbón por carbón.</p>
<p>•	Cambiar drops de libros por estanterías.</p>
<p>•	Optimizar partículas de flechas.</p>
<p>•	A partir del minuto 60 todos obtendrán el efecto Fuerza 1.</p>
<p>•	A partir del minuto 80 todos obtendrán el efecto Fuerza 2.</p>
<p>•	Al acabar la partida, el efecto de armadura regeneración serán temporales.</p>
<p>•	Hasta el minuto 40, el balance nunca podrá ser negativo.</p>
<p>•	Añadida iluminación extra en diversos puntos.</p>
<div class="subtitulo">BUGS ARREGLADOS:</div>
<p>•	Al caerte al vacío, al acabar la partida, no te morías. Ahora como los efectos son temporales, si te mueres.</p>
</div>

		
<div class="titulonoticia">25/09/2015 --- Cambios Server Beta 3.0</div>
<div class="noticia">
<div class="subtitulo">CAMBIOS:</div>
<p>•	Activadas partículas de flechas y el rastro es más nítido.</p>
<p>•	Añadidos sonidos a los mensajes de eventos importantes.</p>
<p>•	El nexo crea un pequeño boquete al explotar.</p>
<p>•	Añadido Balance al pulsar TAB: Muestra una resta entre Asesinatos-Muertes.</p>
<p>•	Sistema de regeneración cuando estás cerca de tu nexo.</p>
<p>•	Ahora también se facilita la comida en el lobby.</p>
</div>
		
		
<div class="titulonoticia">19/09/2015 --- Cambios Server Beta 2.0</div>
<div class="noticia">
<div class="subtitulo">CAMBIOS:</div>
<p>•	El paquete de texturas ahora se descarga automáticamente.</p>
<p>•	Rehecho sistema de descuento de vidas, ahora funciona más rápido.</p>
<p>•	Mejoras en la protección del nexo.</p>
<p>•	Recolocado de spawn de equipos.</p>
<p>•	Valla de protección en recepción de Ítems.</p>
<p>•	Sistema de hambre habilitado.</p>
<p>•	Se facilita comida en el campo de batalla.</p>
<p>•	Facilitado de acceso a minas de pólvora.</p>
<p>•	Nivelado de Codicia (da menos diamantes y la mitad son ores).</p>
<p>•	El nivel de bedrock ha subido.</p>
<p>•	Ahora el tiempo transcurrido se muestra visible en todo momento a la derecha.</p>
<p>•	Eliminados titulares ya que el tiempo se muestra a la derecha.</p>
<p>•	Añadir mensajes por chat para recordar eventos importantes.</p>
<p>•	Implementado sistema anti-empate.</p>
<p>•	Se han eliminado las pociones temporalmente.</p>
<p>•	Desactivadas partículas de las flechas temporalmente.</p>
<div class="subtitulo">BUGS ARREGLADOS:</div>
<p>•	Resuelto bug de colocar agua por encima de los límites de altura permitidos.</p>
<div class="subtitulo">BUGS ENCONTRADOS:</div>
<p>•	Al caerte al vacío, al acabar la partida, no te mueres.</p>
</div>
		
		
	</div>
</body>
</html>
