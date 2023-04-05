<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LuzuTech | Búsqueda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <?php //lo cargo en el head asi cuando carga esta pagina es lo primero en leer. Esta funcion no va a ser llamada hasta que le indiquemos nosotros
    function ejecutar_busqueda ($labusqueda){

        //$busqueda = $_GET['search'];
        include ("conexion.php");
        include ("recursos.php");

        $consulta = "SELECT * FROM varios_tech WHERE marca LIKE '%$labusqueda%'" ;
        $resultados = mysqli_query($conexion_bd, $consulta);
        while ($fila = mysqli_fetch_array ($resultados, MYSQLI_ASSOC)){
            echo"<table><tr><td>";
            echo $fila ['marca'] . "</td><td>";
            echo $fila ['nombre'] . "</td><td>";
            echo $fila ['descripcion'] . "</td><td>";
            echo "$" . $fila ['precio'] . "</td><td></tr></table>";

        }

        mysqli_close($conexion_bd);
    }
    ?>
</head>
<body>
    <?php

        $mibusqueda= $_GET['search'];
        $mipag = $_SERVER["PHP_SELF"]; //con esta instruccion le digo que a la pagina que tiene que llamar es a la misma
        if ($mibusqueda != NULL){
            ejecutar_busqueda($mibusqueda);
        } else {
            echo("<form action='" . $mipag . "' method='GET'>
            <h4><label>¿Qué estás buscando?</label></h4>
            <br>
            <input type='text'  class='form-control' name='search' autocomplete='off'>
            <input type='submit' class='btn btn-outline-danger bs-danger-bg-subtlet' value='Buscar'> 
            </form>");
        }
    ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>