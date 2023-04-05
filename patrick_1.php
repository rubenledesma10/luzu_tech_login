<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LuzuTech | LAVARROPAS SEMIAUTOMATICO LTPK79SB 7 BLANCO PATRICK </title>
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
    $lavarropas = array (
        'nombre'=>'LAVARROPAS SEMIAUTOMATICO LTPK79SB 7 BLANCO',
        'marca'=>'PATRICK ',
        'descripcion'=>'Lavarropas Semiautomatico. Capacidad: 7kg. 9 Programas automaticos de lavadoy enjuague: Eco - Enjuague - Lana - Sintetico - Algodon - Algodon muy Sucio - Superlavado - Suavizante - Vaciado. Dispenser de detergente y suavizante con dosificador. Motor termoprotegido. Interriuptor de seguridad. Bomba de desagote. Sistema de lavado automatico. Tambor de acero inoxidable. Tapa transparente: Mayor visibilidad. Facil apertura y cierre. Comando Superior: Con Selector Perilla.',
        'precio'=>'58000'
    );
    ?>
    <div class="container">
        <div class=" mx-auto card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="imagenes/patrick_1.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                    <h5 class="card-title"><?php echo $lavarropas['marca'] ; echo  $lavarropas['nombre']; ?></h5>
                        <p class="card-text"><?php echo $lavarropas['descripcion']; ?></p>
                        <p class="card-text text-bg-danger p-3">Precio: $<?php echo $lavarropas['precio']; ?></p>
                        <div class="card-footer">
                            <small class="text-muted"><a href="boton_carrito.php?nombre=<?php echo $lavarropas['nombre'];?>&&marca=<?php echo $lavarropas['marca'];?>&&precio=<?php echo $lavarropas['precio'];?>" class="btn btn-outline-danger bs-danger-bg-subtle">Comprar</a></small>
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