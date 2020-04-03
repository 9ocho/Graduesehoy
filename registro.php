<?php
    include("conexion.php");
    
    if(isset($_POST["registro"])){
        $nombre = $_POST["nombre"];
        $telefono = $_POST["telefono"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        
        $checkemail= mysqli_query($conexion,"SELECT * FROM usuarios WHERE email = '$email'");
        if(mysqli_num_rows($checkemail)>0){
            ?>
            <p style="color:#FF4545">El correo ya está registrado</p>
            <?php
        }else{
            $insertuser= "INSERT INTO `usuarios` (`user`, `password`, `email`, `telefono`) VALUES ('$nombre', '$telefono', '$email', '$password');";
            $resultado= mysqli_query($conexion,$insertuser);
            if($resultado){
                ?>
                <h4>Registrado exitosamente</h4>
                <?php
            }
        }
    }

    if(isset($_POST["regpan"])){
        $nombre = $_POST["nombre"];
        $precio = $_POST["precio"];
        $imagen = $_FILES['imagen']['name'];;
        
        $insertuser= "INSERT INTO `panes` (`nombre`, `precio`, `img`) VALUES ('$nombre', '$precio', '$imagen');";
        $resultado= mysqli_query($conexion,$insertuser);
        if($resultado){
            ?>
            <h4>Registrado exitosamente</h4>
            <?php
        }
        $directorio= "imagenes/";
        $archivo= $directorio.basename($_FILES["imagen"]["name"]);
        move_uploaded_file($_FILES["imagen"]["tmp_name"], $archivo);
    }

    if(isset($_POST["regingre"])){
        $nombre = $_POST["nombre"];
        $precio = $_POST["precio"];
        $imagen = $_FILES['imagen']['name'];;
        
        $insertuser= "INSERT INTO `ingredientes` (`nombre`, `precio`, `img`) VALUES ('$nombre', '$precio', '$imagen');";
        $resultado= mysqli_query($conexion,$insertuser);
        if($resultado){
            ?>
            <h4>Registrado exitosamente</h4>
            <?php
        }
        $directorio= "imagenes/";
        $archivo= $directorio.basename($_FILES["imagen"]["name"]);
        move_uploaded_file($_FILES["imagen"]["tmp_name"], $archivo);
    }

    if(isset($_POST["regsalsa"])){
        $nombre = $_POST["nombre"];
        $precio = $_POST["precio"];
        $imagen = $_FILES['imagen']['name'];;
        
        $insertuser= "INSERT INTO `salsas` (`nombre`, `precio`, `img`) VALUES ('$nombre', '$precio', '$imagen');";
        $resultado= mysqli_query($conexion,$insertuser);
        if($resultado){
            ?>
            <h4>Registrado exitosamente</h4>
            <?php
        }
        $directorio= "imagenes/";
        $archivo= $directorio.basename($_FILES["imagen"]["name"]);
        move_uploaded_file($_FILES["imagen"]["tmp_name"], $archivo);
    }
?>