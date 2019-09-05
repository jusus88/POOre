<?php 

	echo "Empleando Objetos";
	include "base.php";
	include "hijo.php";
	echo "<br/>";
	
	
	
	$obj1=new hijo("jesus","centeno","tecnico","inge");
	$obj1->mostrar();
	echo "<br/>";
	clase::$nombres="centeno araujo";
	clase::mostrar();


 ?>