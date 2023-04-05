<?php

session_start();
if(!isset($_SESSION['email'])){
  header ("Location: index.php");
}    

?>
<header>
  <style>
    .navbar .navbar-nav .nav-link:hover{
      color: white;
      background-color: #dc3545;
    }
  </style>
  <nav class="navbar fixed-top navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="luzu_tech_inicio.php">LuzuTech</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto text-center mt-2 ">
        <li class="nav-item">
          <a class="nav-link" href="celulares.php">Celulares<br><i class="bi bi-phone"></i></a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="computadoras.php">Notebooks<br><i class="bi bi-laptop"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="heladeras.php">Heladeras<br><i class="bi bi-file-post-fill"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="lavarropas.php">Lavarropas<br><i class="bi bi-music-player"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="televisores.php">Televisores<br><i class="bi bi-tv"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="varios.php">Varios<br><i class="bi bi-smartwatch"></i></a>
        </li>
      </ul>
      <a href="mis_compras.php" class="me-2 btn btn-info" ><i class="bi bi-cart3"></i> <span class="badge text-bg-danger">
        <?php
         include ("recursos.php");
         $base= new Basedatos(SERV, USUA, PASS, BASE);		  
         $carrito = new Carrito ($base);
         $listar_compra=$carrito->listar_compra();
        echo (empty($listar_compra))?0:count($listar_compra);

        ?>
      </span></a>
      <a href="busqueda.php" class="btn btn-outline-danger bs-danger-bg-subtlet"><i class="bi bi-search"></i></a>
      <a href="cierre_sesion.php" class="ms-2 btn btn-light">Cerrar sesión</a>
    </div>
  </div>
</nav>
</header>
<style>
    .btn-info {
        --bs-btn-color: var(--bs-white);
    }
</style>
