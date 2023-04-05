<?php  
include("recursos.php");

if(isset($_GET['nombre'])) {
    $carrito->eliminar_compra($_GET['nombre']);
}

header("Location:mis_compras.php?eliminado");

?>