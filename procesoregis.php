<?php 
include 'config/conexion.class.php';

$nombre = $_POST["nombre"];
$email = $_POST["email"];
$telefono = $_POST["telefono"];
$contra = $_POST["contra"];

$insertar = "INSERT INTO registro (nombre, email ,telefono ,contra) 
VALUES ('$nombre','$email','$telefono','$contra')";


$verificar_correo = mysqli_query($conexion,"SELECT * FROM registro WHERE email ='$email'");
if(mysqli_num_rows($verificar_correo)>0)
{
	echo '<script>alert("correo electronico ya existente");
	window.history.go(-1);
	</script>';

	exit;

}

//ejecutar consulta

$resultado = mysqli_query($conexion,$insertar);
if(resultado){
	echo 'exito';
}
else{
	echo'error';
}

 ?>
 