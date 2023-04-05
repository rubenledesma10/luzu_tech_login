<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LuzuTech | Galaxy A23 </title>
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
    $celulares = array (
        'nombre'=>'GALAXY A23',
        'marca'=>'SAMSUNG ',
        'descripcion'=>'Celular. Pantalla: 6.6" PLS TFT LCD 1080 x 2408 (FHD+). Procesador: Octa-Core. Almacenamiento: 128 Gb. Ram: 4Gb. Camara: 50.0 MP + 5.0 MP + 2.0 MP + 2.0 MP. Camara Frontal: 8 MP. Sistema Operativo: Android. WIFI. Bluetooth. Lector de tarjetas MicroSD. NFC. USB. GPS. Graba y reproduce videos. Navegador Chrome. Bateria: 5000 mAh.',
        'precio'=>'102000');
    ?>

    <div class="container">
        <div class=" mx-auto card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="imagenes/a23.png" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                <h5 class="card-title"><?php echo $celulares['marca'] ; echo  $celulares['nombre']; ?></h5>
                        <p class="card-text"><?php echo $celulares['descripcion']; ?></p>
                        <p class="card-text text-bg-danger p-3">Precio: $<?php echo $celulares['precio']; ?></p>
                        <div class="card-footer">
                            <small class="text-muted"><a href="boton_carrito.php?nombre=<?php echo $celulares['nombre'];?>&&marca=<?php echo $celulares['marca'];?>&&precio=<?php echo $celulares['precio'];?>" class="btn btn-outline-danger bs-danger-bg-subtle">Comprar</a></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <br>
    <br>
 
    <?php include ("footer.php"); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>