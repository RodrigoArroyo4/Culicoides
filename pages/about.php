<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Titulo - Rodrigo Arroyo</title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Rodrigo Arro CSS -->
  <link href="../resources/css/stylesheet.css" rel="stylesheet">

</head>

<body>
  <section class="banner text-white mb-0" id="about">
    <div class="container">
      <h2 class="text-center text-uppercase banner-text">Lorem Ipsum</h2>
      <div class="row">
        <div class="col-lg-12 ml-auto">
          <p class="lead"></p>
        </div>
      </div>
    </div>
  </section>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-md navbar-light bg-dark static-top">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="../index.php">Homepage</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">More About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="publications.php">Publications</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="institutions.php">Institutions using [Lorem Ipsum]</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contacts.php">Contacts</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container-full">
    <div class="row">
      <div class="col-lg-12">
        <h3 class="main-title-text">More about Lorem</h3>
        <!--PHP CODE TO RETRIEVE TEXT FROM DB-->
        <?php require '../content/content-about.php' ?> 
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>