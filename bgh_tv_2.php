<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LuzuTech | SMART LED ANDROID TV 32 PULGADAS HD B3222S5A BGH </title>
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
        'nombre'=>'SMART LED ANDROID TV 32 PULGADAS HD B3222S5A',
        'marca'=>'BGH ',
        'descripcion'=>'Televisor LED Android Smart de 32" HD (1366 x 768), V11: ofrece una expriencia de uso mas amigable y con una interfaz grafica intuitiva. Procesador MT9216 1.5GHz Quad Core. Formato de pantalla 16:9. Frecuencia de barrido 60Hz. Radio contraste 3000. Brillo 230 CD/M2. Salida de audio digital multicanal S/PDIF optico. Sonido mejorado Dolby Audio. Potencia 2 x 8W. Tiempo de respuesta 8.5ms. Comando de voz por Google y servicios de Google Play. Wi Fi. Entrada video compuesto: 1 RCA. Sintonizador TDA Analogico: PAL-M/N, NTSC-M, Digital: ISDB-T. 2 Conectores hembra tipo A (USB v2.0). 2 HDMI v2.0 con CEC y HDCP 2.0, HDMI 2 compatible con ARC. Incluye base x2, guia rapida x1, manual legal x1, bolsa con tornillos para la base x1, control remoto x1, cable de alimentacion x1. Medidas con base (alt-anch-prof) 47.6 x 71.9 x 19. Montaje a pared 200 x 200 VESA 10mm 4 tornillos M4 (no provistos).',
        'precio'=>'54000'
    );
    ?>
    <div class="container">
        <div class=" mx-auto card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="imagenes/bgh_2.jpg" class="img-fluid rounded-start" alt="...">
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