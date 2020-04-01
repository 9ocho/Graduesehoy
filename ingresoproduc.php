<?php require 'config/conexion.class.php'; ?>
<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" type="text/css" href="css/ingresoproduc.css">
	<meta charset="utf-8">
	<title>Productos</title>
</head>
<body>
	<div class="container text-center" style="margin-top:5%;">
		<h1>INGRESAR PRODUCTOS</h1>
		<form action="procesoproduc.php" method="POST" enctype="multipart/form-data">
			<p>Tipo: 
				<select required="required" name="tipo" >
				  <option value="Pan">Pan</option>
				  <option value="Ingrediente">Ingrediente</option>
				  <option value="Salsa">Salsa</option>
				</select>
			</p>
			<p>Nombre: <input type="text" required="required" name="nombrep"></p>
			<p>Precio: <input type="number" required="required" name="precio"></p>
			<p>Imagen: <input type="file"  name="imagen" accept="image/*"></p>
			<input class="button" type="submit" name="alta" value="guardar">
		</form>
	</div>
</body>
</html>