<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];
$remitente = $_POST['remitente'];
$para = 'allannande@gmail.com';
$titulo = 'Eco Green';
$header = 'From: ' . $email;
$msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Telefono:\n $telefono Mensaje:\n $mensaje\n Remitente:\n $remitente\n";

if ($_POST['submit']) {
	if (mail($para, $titulo, $msjCorreo, $header)) {
		echo "<script language='javascript'>
			alert('Mensaje enviado, Muchas gracias.');
			window.location.href = 'http://wrmarketing.net/site/';
		</script>";
	} else {
		echo 'Falló el envio';
	}
}
?>