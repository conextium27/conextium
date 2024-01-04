<?php
 $fecha=date("d-m-Y");
	$hora=date("H:i:s");
	$destino="support@conextium.com";
	$asunto= "Contacto desde el sitio web";
	$desde='From: '.$_POST['email'];
	$comentario="
	\n
	Nombre: $_POST[nombre]\n
	Email: $_POST[email]\n
	Telefono: $_POST[telefono]\n
	Mensaje: $_POST[mensaje]\n
	Enviado: $fecha a las $hora \n
	\n
	";
	$enviado = mail($destino, $asunto, $comentario,$desde);
	if($enviado==false){
		echo "Ocurrio un errror";
	}
	else{
	//	echo "Funciona";

	}



?>
