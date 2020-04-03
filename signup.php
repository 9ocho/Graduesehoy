<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>sandwichtian</title>

  <!-- Custom fonts for this theme -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
  <!-- Theme CSS -->
  <link href="css/freelancer.min.css" rel="stylesheet">

</head>

<body id="page-top">
  <!-- Navigation -->
  <?php
    include("navegacion.php")
  ?>
  <!-- Masthead -->

  <header class="masthead bg-secondary text-white text-center">
       <!-- Icon Divider -->
       <h3>REGISTRARSE</h3>
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>
    <div class="container d-flex align-items-center flex-column">

    <form method="post">
      <div class="form-group">
        <label for="name">Nombre completo</label>
        <input name="nombre" id="name" required type="text" class="form-control" placeholder="Ingrese nombre completo">
      </div>
      <div class="form-group">
        <label for="tel">Telefono</label>
        <input name="telefono" id="tel" required type="text" onkeypress='return validaNumericos(event)' class="form-control" placeholder="Ingrese número telefónico">
      </div>
      <script>
      function validaNumericos(event) {
        if(event.charCode >= 48 && event.charCode <= 57){
          return true;
        }
        return false;        
      }
      </script>
      <div class="form-group">
        <label for="email">Dirección de correo electrónico</label>
        <input name="email" id="email" required type="email" class="form-control" placeholder="Ingrese correo electrónico">
      </div>
      <div class="form-group">
        <label for="pass">Contraseña</label>
        <input name="password" id="pass" required type="password" class="form-control" placeholder="Ingrese contraseña">
      </div>
      <button type="submit" name="registro" class="btn btn-warning">Enviar</button>
    </form>
    <?php
      include("registro.php");
    ?>
    <small class="form-text text-muted">¿Ya tienes una cuenta?<a href="login.php" class="text-warning"> Inicia sesión</a></small>
      <!-- Masthead Avatar Image -->
     
    </div>
  </header>


  <!-- Copyright Section -->
  <section class="copyright py-4 text-center text-white">
    <div class="container">
      <small>Copyright &copy; Sandwichtian 2020</small>
    </div>
  </section>
  
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  
  <!-- Custom scripts for this template -->
  <script src="js/freelancer.min.js"></script>
</body>

</html>