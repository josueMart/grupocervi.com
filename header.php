<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
   <link rel="stylesheet" href="<?php bloginfo(stylesheet_url); ?>"> 
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
  <meta charset="UTF-8">
  <title><?php bloginfo(title); ?></title>
  <?php wp_head(); ?>
</head>
<body>
<header>
<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li><a href="<?php get_page_link( $post, $leavename, $sample ); ?>">Equipo médico</a></li>
  <li><a href="#!">Partes y consumibles</a></li>
  <li class="divider"></li>
</ul>

<ul id="dropdown2" class="dropdown-content">
  <li><a href="#!">Renta de Equipo</a></li>
  <li><a href="#!">Maquinas de Anestesia</a></li>
  <li class="divider"></li>
</ul>
<nav>
    <div class="nav-wrapper" >
      <a href="#" class="brand-logo"><img class="" src="" alt="">Grupo Cervi S.A. DE C.V.</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="acerca_de.php">Acerca de</a></li>
       <li><a class="dropdown-button" href="productos.php" data-activates="dropdown1">Productos<i class="material-icons right">></i></a></li>
       <li><a class="dropdown-button" href="productos.php" data-activates="dropdown2">Servicios<i class="material-icons right">></i></a></li>
        <li><a href="promociones.php">Promociones</a></li>
        <li><a href="contacto.php">Contacto</a></li>
      </ul>
    </div>
  </nav>
</header>