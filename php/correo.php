<?php 
	$destinatario = 'varkolakdead@gmail.com';

	$nombre = $_POST['usuario'];
	$email = $_POST['email'];
	$asunto = $_POST['asunto'];

	$header = "Enviando desde de la pagina Seripelis";
	$mensajeCompleto = $asunto . "\nAtentamente: " . $nombre;

	mail($destinatario, $email, $mensajeCompleto, $header);
	echo "<script>alert('Correo enviado')</script>";
 ?>