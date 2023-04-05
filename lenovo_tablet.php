<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LuzuTech | TABLET TB-8505FS 8 32 GB GRIS LENOVO </title>
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
        'nombre'=>'TABLET TB-8505FS 8 32 GB GRIS',
        'marca'=>'LENOVO ',
        'descripcion'=>'Multitouch 8" HD. SO: Android pie 9.0. WiFi. BT 5.0. Micro USB 1x 2.0. Proces MediaTek Helio A22 de 2.0Ghz. Men.Ram. 2 Gb. Almac. 32 Gb. Micro SD. Resolucion 1280 x 800. Camara frontal 2.0 Mp/ Trasera 5.0Mp. Incluye estacion de carga inteligente.',
        'precio'=>'47500'
    );
    ?>
    <div class="container">
        <div class=" mx-auto card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="imagenes/tablet_lenovo.jpg" class="img-fluid rounded-start" alt="...">
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