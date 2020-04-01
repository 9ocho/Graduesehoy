<?php 

include 'config/conexion.class.php';

$tipo = $_POST["tipo"];
$nombrep =$_POST["nombrep"];
$precio = $_POST["precio"];
$image = $_FILES["imagen"]["tmp_name"];
$img = addslashes(file_get_contents($image));

$query = "INSERT INTO productos (tipo, nombrep, precio, imagen)
 VALUES ('$tipo','$nombrep','$precio','$img')";

		$resultado =$conexion->query($query);
		if(resultado)
		{
			echo 'exito';
		}
		else
		{
			echo'error';
		}

 ?>
