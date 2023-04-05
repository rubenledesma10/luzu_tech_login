<?php

class Carrito {
    private $bd;
    
    function __construct($base) {
        $this->bd = $base;
    }

    public function introducir_compra($marca, $nombre, $precio) {
        $respuesta = $this->bd->ejecutarConsultas("INSERT INTO compras VALUES (DEFAULT, '$marca', '$nombre', '$precio')");
        return $respuesta;
    }

    public function eliminar_compra($nombre) {
        $respuesta = $this->bd->ejecutarConsultas("DELETE FROM compras WHERE nombre='$nombre'");
        return $respuesta;
    }

    public function listar_compra() {
        $respuesta = $this->bd->ejecutarConsultas("SELECT * FROM compras");
        return $respuesta;
    }    
}
?>