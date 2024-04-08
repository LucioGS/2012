<html>
<head>
</head>
<body>
<?php
	$nombre = $_POST["nombre"];
	$apellidos = $_POST["apellidos"];
	$dni = $_POST["dni"];
	$ciudad = $_POST["ciudad"];
	$datos = [];
	$datos[] = $nombre;
	$datos[] = $apellidos;
	$datos[] = $dni;
	$datos[] = $ciudad;
	print_r($datos);
	echo "</br>";
	var_dump($datos);
?>
</body>
</html>

