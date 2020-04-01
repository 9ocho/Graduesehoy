<?php require 'config/conexion.class.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/tablaproduc.css">
	<meta charset="utf-8">
	<title>Consulta productos</title>
	<style type="text/css">
	
		
	</style>
</head>
<body class="body">
	<div class="container text-center" style="margin-top:5%;">
		<center>
		<h1>CONSULTA</h1>
		<table class="tabla" border="0"  style="margin: auto; width: 50% !important; ">
			<tr class="t1">
				<th>Codigo</th>
				<th>Tipo</th>
				<th>Nombre</th>
				<th>Precio</th>
				<th>Imagen</th>
			</tr>
			<?php 

			$query="SELECT DISTINCT codigo, tipo, nombrep, precio, imagen FROM productos";
			$resultado=$conexion->query($query);
			while ($row=mysqli_fetch_array($resultado)) {
			?>
				<tr class="tr">
					<th><?php echo $row['codigo']; ?></th>
					<th><?php echo $row['tipo']; ?></th>
					<th><?php echo $row['nombrep']; ?></th>
					<th><?php echo $row['precio']; ?></th>
					<th><img height="120px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"/></th>
				</tr>
		<?php
			}
		?>
			  
		</table>
		<br>
		<input class="button" type="button" value="Volver" onclick="location.href='index2.html'"/>
	</div>
</body>
</html>