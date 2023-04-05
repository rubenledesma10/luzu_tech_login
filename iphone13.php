<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LuzuTech | IPHONE 13 </title>
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
        'nombre'=>'IPHONE 13',
        'marca'=>'APPLE ',
        'descripcion'=>'Celular de 6.1" OLED. Procesador Chip A15 Bionic. Almacenamiento 128Gb / RAM 4 Gb. Camara frontal 12Mp / trasera 12Mp. NFC. USB-C. Bluetooth 5.0. Sistema operativo iOS 15. WiFi 802.11ax (6tagen.) con MIMO2x2. Radio. Graba y reproduce video. GPS. Navegador: Safari. Un gran salto en la duracion de la bateria. Pantalla Super Retina XDR. Diseno resistente con ceramic shield. Mejores fotos y videos con poca luz. Modo cine con baja profundidad de campo y cambios de enfoque automaticos.',
        'precio'=>'575000');
    ?>
    <div class="container">
        <div class=" mx-auto card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="imagenes/iphone13.jpg" class="img-fluid rounded-start" alt="...">
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