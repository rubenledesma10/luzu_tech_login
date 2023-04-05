<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LuzuTech | LAVARROPAS AUTOMATICO WW65M0NHUU 6.5 GRIS SAMSUNG </title>
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
        'nombre'=>'LAVARROPAS AUTOMATICO WW65M0NHUU 6.5 GRIS',
        'marca'=>'SAMSUNG ',
        'descripcion'=>'Capacidad 6.5Kg. 6 Programas de lavado. Display digital. Tambor de acero (diseno diamante). Lavado rapido de 29. Centrifugado 1000RPM. Puerta extra amplia. Control de voltaje ante picos o caidas de tension. Eficiencia AAB (energetica/lavado/centrifugado).',
        'precio'=>'133000'
    );
    ?>
    <div class="container">
        <div class=" mx-auto card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="imagenes/lavarropas_samsung_1.jpg" class="img-fluid rounded-start" alt="...">
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