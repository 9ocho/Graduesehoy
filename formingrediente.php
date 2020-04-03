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

  <header class="masthead text-black text-center" style="background-image: url('img/ingredientes.jpg'); background-repeat: no-repeat;background-position: center;background-size: cover;">
       <!-- Icon Divider -->
       <h3>REGISTRAR INGREDIENTE</h3>
      <div class="divider-custom divider-dark">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>
    <div class="container d-flex align-items-center flex-column">
  <form method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="nombreing">Nombre del ingrediente</label>
    <input type="text" name="nombre" class="form-control text-center" id="nombreing" placeholder="Ingrese nombre del ingrediente">
  </div>
  <div class="form-group">
    <label for="precioing">Precio</label>
    <input type="text" name="precio" class="form-control text-center" id="precioing" placeholder="Ingrese precio del ingrediente">
  </div>
  <div class="form-group">
    <label for="imagening">Imagen</label>
    <input type="file" name="imagen" id="imagening" class="form-control" accept="image/*">
  </div>
  <button type="submit" name="regingre" class="btn btn-warning">Enviar</button>
</form>
    <?php
      include("registro.php");
    ?>
      <!-- Masthead Avatar Image -->
     
    </div>
  </header>

   <!-- Masthead -->
  <header class="masthead bg-warning text-dark text-center">
    <div class="container d-flex align-items-center flex-column">

      <!-- Masthead Avatar Image -->
      <img class="masthead-avatar mb-5" src="img/header.png" alt="">

      <!-- Masthead Heading -->
      <h1 class="masthead-heading text-uppercase mb-0">SANDWICHTIAN</h1>

      <!-- Icon Divider -->
      <div class="divider-custom divider-dark">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Masthead Subheading -->
      <p class="masthead-subheading font-weight-light mb-0">Descubre nuevos sabores para tu paladar</p>
    </div>
  </header>



  <!-- Copyright Section -->
  <section class="copyright py-4 text-center text-white">
    <div class="container">
      <small>Copyright &copy; Sandwichtian 2020</small>
    </div>
  </section>

  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
  <div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
      <i class="fa fa-chevron-up"></i>
    </a>
  </div>
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/freelancer.min.js"></script>

</body>

</html>