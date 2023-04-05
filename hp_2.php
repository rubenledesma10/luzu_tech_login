<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LuzuTech | HP 14-DQ2029LA INTEL CORE I5 </title>
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
    $computadoras = array (
        'nombre'=>'14-DQ2029LA INTEL CORE I5',
        'marca'=>'HP ',
        'descripcion'=>'Notebook de 14" HD (1366 x 768), 250nits, 45% NTSC. Procesador Intel Core i5-1135G7 ( hasta 4.120 GHz). Capacidad: unidad en estado solido PCle NVMe M.2 de 256Gb / RAM 8 Gb DDR4-2666 MHz. Placa de video integrada, graficos Intel iris X. Sistema operativo windows 10 home 64. Puertos 1 USB Type-C con Super Speed de 5 Gbps de Velocidad de senalizacion. 2 USB Type-A con Super Speed de 5 Gbps velocidad de senalizacion. 1 HDMI 1.4b. 1 pin de CA inteligente. 1 combinacion de auriculares y microfono. Lector de tarjetas SD multiformato. Camara HD HP True Vision de 720p con microfonos digitales integrados de doble matriz. 2 Altavoces. Combo Realtek RTL8821CE-M 802.11b/g/n(1x1) Wi-Fi y Bluetooth 4.2. Bateria de iones de litio de 3 celdas y 41 WHrs.',
        'precio'=>'200000'
    );
    ?>
    <div class="container">
        <div class=" mx-auto card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="imagenes/hp_2.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                    <h5 class="card-title"><?php echo $computadoras['marca'] ; echo  $computadoras['nombre']; ?></h5>
                        <p class="card-text"><?php echo $computadoras['descripcion']; ?></p>
                        <p class="card-text text-bg-danger p-3">Precio: $<?php echo $computadoras['precio']; ?></p>
                        <div class="card-footer">
                            <small class="text-muted"><a href="boton_carrito.php?nombre=<?php echo $computadoras['nombre'];?>&&marca=<?php echo $computadoras['marca'];?>&&precio=<?php echo $computadoras['precio'];?>" class="btn btn-outline-danger bs-danger-bg-subtle">Comprar</a></small>
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