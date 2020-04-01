<?php require 'config/conexion.class.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css.armeloo.css">
	<meta charset="utf-8">
	<title>Productos</title>
</head>
<body>
	
		<label>

			<h3>PAN</h3>

			<div class="select">
                <input type="submit" value="<"/>
				<select>
					<?php 
					include 'config/conexion.class.php';
					$consulta="SELECT nombrep FROM productos WHERE tipo='pan'";
					$ejecutar =mysqli_query($conexion,$consulta) or die (mysqli_error($conexion));
					?>
					<?php foreach ($ejecutar as $opciones):?>
                            <option value=><?php echo $opciones['nombrep'] ?></option>
					<?php endforeach ?>
				</select>	
                <a><?php echo $ejecutar?></a>	
                <a><?php echo $opciones['nombrep'] ?></a>
            </div>	
            <input type="submit" value=">"/>	
        </label>
        
	</div>
</body>
</html>