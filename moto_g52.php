<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LuzuTech | Moto G52 </title>
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
        'nombre'=>'MOTO G52',
        'marca'=>'MOTOROLA ',
        'descripcion'=>'Celular de 6.55" pOLED. Procesador Qualcomm Snapdragon 680, Octa core, 2.4GHz. Resolucion FHD+ (1080 x 2400). Sistema operativo Android 12. Camara principal: 50MP (74.26) F1.8, Gran angular y profundidad: 8MP (118) F2.2, Macro: 2MP (78) F2.4. Zoom digital (8x fotos / 8x video). Flash LED / Camara frontal 16MP (74.45) F2.45. Flash frontal backlight. Capacidad 128 Gb (expandible hasta 1Tb, Micro SD) / RAM 6 Gb. Sensores: Acelerometro, sensor de proximidad, brujula(campo magnetico), giroscopio, huella dactilar, luz ambiente, desbloqueo facial. Wi Fi 802.11 a/b/g/n/ac/k/v/r/u - WIFI5 (bandas 2.4 y 5 GHz). Bluetooth 5.0. NFC. GPS, AGPS, GLONASS, Galileo. USB C 2.0. Entrada de audio de 3.5mm. Vidrio de pantalla Gorilla Glass 3. Capacidad de bateria 5000 mAh. Incluye Equipo, Cubierta protectora, Herramienta de extraccion de SIM, Manual de usuario, Manual de informacion legal, Cable de datos USB-C, Cargador 33W.',
        'precio'=>'76000');
    ?>
    <div class="container">
        <div class=" mx-auto card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="imagenes/g52.png" class="img-fluid rounded-start" alt="...">
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