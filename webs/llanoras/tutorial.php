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
	<title>Llanora's Battle/Tutorial</title>
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
				<a href="tutorial.php" class="menuTexto" id="botonpulsado">Tutorial
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
		TUTORIAL
	</div>
	

	<div class="seccion">
<div class="titulonoticia">
Objetivos principales
</div>
<div class="noticia">
<div class="subtitulo">NEXO:</div>
<p>El objetivo principal es destruir el Nexo enemigo dentro de un campo de batalla completamente editable y destruible por los jugadores.<br />
El mapa está dividido en dos zonas, una para cada equipo y cada equipo tiene su Nexo representado por un bloque brillande rojo o amarillo, dependiendo del equipo.</p>
<p class="centrado"><img src="imagenes/nexoAmarillo.gif" width="49%" /> <img src="imagenes/nexoRojo.gif" width="49%" /></p>
<div class="subtitulo">TIEMPOS:</div>
<p>El tiempo está dividido en dos. El primer tiempo dura entre 35 y 40 minutos y separa a los equipos por muros para que cada equipo pueda
contruir una base en su zona para defenderse. En el segundo tiempo los muros caen para dar paso a la batalla, en la que la acción entra en juego.</p>
<p class="centrado"><img src="imagenes/mapaGeneral.gif" width="100%" /></p>
<div class="subtitulo">OBJETOS:</div>
<p>Queremos priorizar la construcción de estructuras, la estrategia en equipo y la habilidad de los jugadores sobre todo lo demás, por lo que la
tarea de "minar" ha sido cambiada por la de "recolectar". Los ítems y bloques son dropeados en el mapa automáticamente, solo hay que ir a
recogerlos. Así solo hay que preocuparse de priorizar que ítems recoger y craftear para crear todo lo que necesites para ganar la batalla. También hay algunos baules para reforzar ciertas mecánicas.</p>
<p>Los drops se encuentran en los siguientes zonas del mapa. En la sección Fichas técnicas encontrareis información detallada de los drops y de los baules.</p>
<p class="centrado"><img src="imagenes/mapaDrops.png" width="100%" /></p>
<p class="centrado"><img src="imagenes/mapaBaules.png" width="100%" /></p>
<div class="subtitulo">CONSTRUCCIÓN:</div>
<p>Como habréis podido observar, el mapa es mayoritariamente plano. Esto es para proporcionar a los jugadores la libertad de construir y hacer lo que quieran
en todo el mapa. Así es, podéis construir (y destruir) por encima y por debajo todo lo que querais, el límite lo pones tú.</p>
<p class="centrado"><img src="imagenes/vistaAerea1.png" width="100%" /></p>
<p class="centrado"><img src="imagenes/vistaAerea2.png" width="100%" /></p>
<p>Aunque el mapa es llano, hay pequeñas construcciones precolocadas para ayudar un poco, dejo algunas fotos.</p>
<p class="centrado"><img src="imagenes/tutoConstrucciones1.png" width="49%" /> <img src="imagenes/tutoConstrucciones2.png" width="49%" /></p>
<p class="centrado"><img src="imagenes/tutoConstrucciones3.png" width="49%" /> <img src="imagenes/tutoConstrucciones4.png" width="49%" /></p>


</div>

<div class="titulonoticia">
Tiempos de juego
</div>
<div class="noticia">
<p class="flotarDerecha"><img src="imagenes/relojServer.png"/></p>
<p>Dentro del Minecraft, a la derecha se puede observar un reloj. Es el reloj del server, y determina en que fase está el juego. A continuación se detallan
en que consisten las diferentes fases. El servidor anuncia las fases con antelación, no hace falta memorizarse los tiempos.</p>

<div class="subtitulo">FASE DE DESCANSO</div>
<p>Desde el minuto 0 al minuto 5, el servidor da tiempo para que entren los jugadores y hablen entre ellos. Esta fase discurre en el lobby del servidor.</p>
<p class="centrado"><img src="imagenes/zonaDescanso.png" width="100%" /></p>
<div class="subtitulo">FASE DE CREACIÓN DE EQUIPOS</div>
<p>Del minuto 5 al minuto 15, el servidor permite la entrada de los jugadores a los equipos. Para entrar a un equipo, basta con entrar en la zona coloreada
del color del equipo, rojo o amarillo. El servidor agrega a los jugadores a los equipos de dos en dos, para que los equipos estén igualados. Entrarás al equipo si
el servidor te teletransporta a la parte alta de la zona coloreada o te manda al campo de batalla. Si no puedes entrar en un equipo, avisa a un administrador para
que te incluya en un equipo si los equipos están desbalanceados en número.</p>
<p class="centrado"><img src="imagenes/zonaSeleccionEquipos.png" width="100%" /></p>
<div class="subtitulo">FASE DE CONSTRUCCIÓN</div>
<p>Desde el minuto 6 al 40, el servidor envía a todos los jugadores en equipos al campo de batalla. Esta es la fase de construcción. Dos muros de bedrock dividen
el campo de batalla en 3 zonas, para que los jugadores estén a salvo y puedan construir y prepararse para la batalla. Hasta el minuto 15, podrán seguir entrando
jugadores nuevos al campo de batalla.</p>
<div class="subtitulo">FASE DE DESTRUCCIÓN</div>
<p>En el minuto 40, los muros de bedrock caen y permiten el PVP por todo el campo de batalla.</p>
<div class="subtitulo">FASE FINAL</div>
<p>Ocurre cuando un equipo es vencedor y otro pierde todas las vidas y es derrotado. Al poco tiempo el reloj del server se pone a 0 y se puede volver a jugar.</p>
</div>
<div class="titulonoticia">
El campo de batalla
</div>
<div class="noticia">
<p>El mapa se divide en 3 zonas principales: Zona del equipo rojo, Zona central y Zona del equipo amarillo. El mapa es simétrico desde la Zona central, por lo que las zonas de
equipos son iguales</p>
<p class="centrado"><img src="imagenes/zonasMapa.png" width="100%" /></p>
<div class="subtitulo">ZONA DE EQUIPO</div>
<p>Es la zona donde se puede construir desde que comienza la partida. Esta zona contiene la bandera/nexo, la zona de dropeo de ítems y bloques esenciales, un par de baules, una mesa de
crafteo, una mesa de encantamientos, un pozo de agua infinita y unas menas de lapislazuli/experiencia.</p>
<p>•	Bandera o Nexo: Es el objetivo principal a defender y el principal objetivo a atacar. Cada vez que un adversario rompe vuestro bloque tu equipo pierde una vida de las 25.
Como el bloque se regenera al instante, vuestro equipo no parará de perder vida hasta que el contrincante deje de romperlo, o muera.</p>
<p>•	Dos baules: Uno contiene objetos especiales y el segundo contiene una variedad de objetos para la creación de pociones.</p>
<p>•	Dropeo de ítems y bloques esenciales: Los objetos con los que tu equipo puede prepararse para la batalla caen por ahí y caen al vacio. La única forma de recoger esos objetos es
acercándose a ellos y se irán a tu inventario automáticamente. La lista detallada de los objetos que caen se encuentran en la sección Fichas técnicas.</p>
<p class="centrado"><img src="imagenes/dropObjetos.gif" width="100%" /></p>
<p>•	Mesa de encantamientos: Solo hay 2 en el mapa, una por equipo y puede ser usada y mejorada para encantar cualquier cosa.</p>
<p>•	Pozo de agua: Un pozo que suministra agua de forma infinita si se usa adecuadamente</p>
<p class="centrado"><img src="imagenes/zonaEquipo.png" width="100%" /></p>
<div class="subtitulo">ZONA CENTRAL</div>
<p>Esta zona está formada por una pequeña explanada, un gran abismo, dos puentes que comunican las 2 zonas de equipo, 4 baules, 4 generadores de pólvora infinita, 4 bloques de diamantes y la
plataforma de Codicia.</p>
<p>•	Puentes: Comunican las dos zonas de equipo a través del abismo y de cada una de ellas cuelgan un diamante.</p>
<p>•	Baules: Los 4 contienen lo mismo. Flechas para el arco y TNT. Para más información leer la Ficha técnica, más abajo.</p>
<p>•	Dropeo de pólvora: Genera pólvora infinita para dar la posibilidad de crear más TNT.</p>
<p>•	Bloques de diamantes: Cada equipo tiene 1 gratis, más cada bloque que cuelga de los puentes. Cuatro en total, para los codiciosos, seguir leyendo.</p>
<p class="centrado"><img src="imagenes/zonaCentro.png" width="100%" /></p>
<p>•	Codicia: Aquí vive codicia, el eterno. Cada vez que muere, genera un bloque de diamante en el centro de la plataforma. Codicia es muy peligroso, y los codiciosos pagarán...</p>
<p class="centrado"><img src="imagenes/zonaCodicia.png" width="100%" /></p>
</div>
<div class="titulonoticia">
Fichas técnicas
</div>
<div class="noticia">
<p class="centrado"><img src="imagenes/baulPociones.png" width="100%" /></p>
<p class="centrado"><img src="imagenes/baulEncantamientos.png" width="100%" /></p>
<p class="centrado"><img src="imagenes/baulPolvora.png" width="100%" /></p>
<div class="textoImportante">EN CONSTRUCCION</div>
</div>
<div class="titulonoticia">
Consejos
</div>
<div class="noticia">
<div class="textoImportante">EN CONSTRUCCION</div>
</div>
	</div>
</body>
</html>
