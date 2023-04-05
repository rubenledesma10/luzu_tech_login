<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LuzuTech | SONY CONSOLA PS5 BLURAY CFI-1115A 825 GB SSD </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>
    <?php include ("botonera.php"); ?>
    <br>
    <br>
    <br>
    <br>
    <br>
    <?php
    $varios = array (
        'nombre'=>'CONSOLA PS5 BLURAY CFI-1115A 825 GB SSD',
        'marca'=>'SONY ',
        'descripcion'=>'Frecuencia variable de GPU hasta 2.23 GHz (10.3 TFLOPS). Memoria GDDR6 16 GB con ancho de banda de 448 GB/s. Unidad de almacenamiento SSD 825 GB. Ancho de banda de lectura 5.5 GB/s (datos puros) y 9 GB/s (datos comprimidos).',
        'precio'=>'342000'
    );
    ?>
    <div class="container">
        <div class=" mx-auto card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="imagenes/play5.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                    <h5 class="card-title"><?php echo $varios['marca'] ; echo  $varios['nombre']; ?></h5>
                        <p class="card-text"><?php echo $varios['descripcion']; ?></p>
                        <p class="card-text text-bg-danger p-3">Precio: $<?php echo $varios['precio']; ?></p>
                        <div class="card-footer">
                            <small class="text-muted"><a href="boton_carrito.php?nombre=<?php echo $varios['nombre'];?>&&marca=<?php echo $varios['marca'];?>&&precio=<?php echo $varios['precio'];?>" class="btn btn-outline-danger bs-danger-bg-subtle">Comprar</a></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <br>
    <br>
    <br>

    <?php include ("footer.php"); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>