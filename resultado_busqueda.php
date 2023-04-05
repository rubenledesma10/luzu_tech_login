<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LuzuTech | Resultados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>
<?php
 include("botonera.php");
?>
<br>      
<br>
<br>
<br>
<br>
<?php include("include_busqueda.php"); ?>
<br>
<br>
<div class="container">
<?php

$busqueda = $_GET['search'];
include ("conexion.php");


$consulta = "SELECT * FROM varios_tech WHERE marca LIKE '%$busqueda%' OR nombre LIKE '%$busqueda%' OR categoria LIKE '%$busqueda%' UNION SELECT * FROM celulares WHERE marca LIKE '%$busqueda%' OR nombre LIKE '%$busqueda%' OR categoria LIKE '%$busqueda%' UNION SELECT * FROM computadoras WHERE marca LIKE '%$busqueda%' OR nombre LIKE '%$busqueda%' OR categoria LIKE '%$busqueda%' UNION SELECT * FROM heladeras WHERE marca LIKE '%$busqueda%' OR nombre LIKE '%$busqueda%' OR categoria LIKE '%$busqueda%' UNION SELECT * FROM lavarropas WHERE marca LIKE '%$busqueda%' OR nombre LIKE '%$busqueda%' OR categoria LIKE '%$busqueda%' UNION SELECT * FROM televisores WHERE marca LIKE '%$busqueda%' OR nombre LIKE '%$busqueda%' OR categoria LIKE '%$busqueda%'" ;
$resultados= mysqli_query($conexion_bd, $consulta);
$num_fila = mysqli_num_rows($resultados);         
if ($num_fila>0){               
                echo "<h3 style='color: #dc3545'>Resultados encontrados: $num_fila</h3>";
                echo "<table class='table table-bordered border-danger'<thead>
                <tr>
                    <th>Categoría</th>
                    <th>Marca</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Precio</th>
                </tr>
            </thead>
            <tbody>";
                while ($fila = mysqli_fetch_array ($resultados, MYSQLI_ASSOC)){
                   
                    echo "<tr><td> $fila[categoria] </td>";
                    echo "<td> $fila[marca] </td>";
                    echo "<td> $fila[nombre] </td>";
                    echo "<td> $fila[descripcion] </td>";
                    echo "<td> $$fila[precio] </td></tr>";
                }
                echo "</tbody></table";
            } else {
                echo "<h3 style='color: #dc3545'>No se han encontrado resultados</h3>";
                echo"<br>";
                echo"<br>";
                echo"<br>";
                echo"<br>";
                echo"<br>";
                echo"<br>";
                echo"<br>";
                echo"<br>";
                echo"<br>";
            }
            
?>

<?php mysqli_close($conexion_bd); ?>
</div>

<br>

<?php include ("footer.php"); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>