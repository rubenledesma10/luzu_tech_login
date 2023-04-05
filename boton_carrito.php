<?php 
include("recursos.php");

if(isset($_GET['marca'])) {
    $carrito->introducir_compra($_GET['marca'], $_GET['nombre'], $_GET['precio']);
}

header("Location: producto_agregado.php?cargado");

?>


    