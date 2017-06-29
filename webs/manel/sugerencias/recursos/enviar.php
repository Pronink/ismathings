<?php
	$dest = "vitamablog@gmail.com";
	$de = "buzon.sugerencias@blasterservers.bz";
?>

<html>
	<head>
		<title>Enviando...</title>
	</head>
	<body>

		Enviando...
<?php

	//Comprueba que se han rellenado todos los campos
	if (!empty($_POST['enviar']) && !empty($_POST['_msg']) && !empty($_POST['_usr']) && !empty($_POST['_asnt'])) {
		$mensaje = $_POST['_msg'];
		$usr = $_POST['_usr'];
		$asnt = $_POST['_asnt'];
		
		$error = false;
		require 'class.phpmailer.php';
	} else {
		$error = true;
	}
	
	//Comprueba limite de caracteres
	if($mensaje > 3000 || $usr > 30 || $asnt > 40){
		reg("Limite", $mensaje, $usr, $asnt);
		header('Location: mensajes/hack.html');
		die();
	}
	
	$mensaje = "<html>
					<body>
					El usuario: " . $usr . " envia la siguiente sugerencia: <br>" . $mensaje . 
					"</body>
				</html>";
				

	//Inicia el proceso de envio si se han completado los campos, si no muestra error y finaliza
	if($error){
		header('Location: mensajes/rellena.html');
		die();
	} else {
		//Inicia las variables para enviar
		$mail = new PHPmailer;			
		$mail->setLanguage("es");
		$mail->CharSet = 'UTF-8';
		$mail->From = $de;
		$mail->FromName = "Sugerencia";
		$mail->addAddress($dest);
		$mail->isHTML(true);
		$mail->Subject = "Sugerencia - " . $usr . " - " . $asnt;
		$mail->Body = $mensaje;
		
		//Envia el mensaje
		if(!$mail->send()) {
			//Muestra error si lo hay
			reg($mail->ErrorInfo, $mensaje, $usr, $asnt);
			header('Location: mensajes/no_envia.html');
			die();
		} else {
			//Envio correcto
			header('Location: mensajes/enviado.html');
			die();
		}	
	}
	
	function reg($tipo, $msg, $usr, $asnt) {
		$ip = obtener_ip();
		if ($tipo == "Limite"){
			file_put_contents("log/" . date("d-m-Y h:i:s"), "Hacker: " . $tipo . "\n" . $ip . "\n" . $msg . "\n" . $usr . "\n" . $asnt);
		} else {
			file_put_contents("log/" . date("d-m-Y h:i:s"), "Error: " . $tipo . "\n" . $ip . "\n" . $msg . "\n" . $usr . "\n" . $asnt);
		}
	}
	
	function obtener_ip() {
		if(!empty($_SERVER['HTTP_CLIENT_IP'])){
			return $_SERVER['HTTP_CLIENT_IP'];
		} elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
			return $_SERVER['HTTP_X_FORWARDED_FOR'];
		} else {
			return $_SERVER['REMOTE_ADDR'];
		}
	}
?>

	</body>
</html>