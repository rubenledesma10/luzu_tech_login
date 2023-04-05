<?php

include("base_datos.php");
include ("carrito.php");	
define('SERV', 'localhost');
define('USUA', 'root');
define('PASS', '');
define('BASE', 'luzu_tech');

$base = new Basedatos(SERV, USUA, PASS, BASE);

$carrito = new Carrito($base);

?>