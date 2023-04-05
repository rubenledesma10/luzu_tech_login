<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LuzuTech | SMART LED TV 32 PULGADAS HD B3222K5 BGH </title>
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
    $televisores = array (
        'nombre'=>'SMART LED TV 32 PULGADAS HD B3222K5',
        'marca'=>'BGH ',
        'descripcion'=>'Televisor LED Smart de 32" HD (1366 x 768). Formato de pantalla 16:9. Frecuencia de barrido 60Hz. Radio contraste 1200. Brillo 180 CD/M2. Tiempo de respuesta 8ms. Wi Fi. Entrada video compuesto: 1 RCA. Sintonizador TDA Analogico: PAL-M/N, NTSC-M, Digital: ISDB-T. 2 Conectores hembra tipo A (USB v2.0). 3 HDMI v1.4 con CEC y HDCP 1.4, HDMI 2 compatible con ARC. Incluye bolsa con tornillos para la base x1, control remoto x1, Cable miniplug A/V 3 en 1, cable de alimentacion x1. Cuenta con Netflix, Youtube, Gestor de aplicaciones, Screen sharing y open browser. Procesador Quad Core. MT9216 CA55 1.1GHz: cuatro veces la capacidad de procesamiento Incluye Dolby Audio para disfrutar mejor todos los contenidos. Salida de audio digital optica. Potencia de sonido 2 x 5W. Salida de auriculares. Salida de audio digital optica. Medidas con base (alt-anch-prof). 47.7 x 73.2 x 18.2cm. Peso con base 4.3Kg. Montaje en pared: 100 x 100 VESA 10mm 4 tornillos M4 (no provistos). Clase energetica A+.',
        'precio'=>'48000'
    );
    ?>
    <div class="container">
        <div class=" mx-auto card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="imagenes/bgh_1.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                    <h5 class="card-title"><?php echo $televisores['marca'] ; echo  $televisores['nombre']; ?></h5>
                        <p class="card-text"><?php echo $televisores['descripcion']; ?></p>
                        <p class="card-text text-bg-danger p-3">Precio: $<?php echo $televisores['precio']; ?></p>
                        <div class="card-footer">
                            <small class="text-muted"><a href="boton_carrito.php?nombre=<?php echo $televisores['nombre'];?>&&marca=<?php echo $televisores['marca'];?>&&precio=<?php echo $televisores['precio'];?>" class="btn btn-outline-danger bs-danger-bg-subtle">Comprar</a></small>
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