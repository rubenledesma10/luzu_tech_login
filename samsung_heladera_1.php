<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LuzuTech | SAMSUNG NO FROST RT32K5930SL DIGITAL </title>
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
    $heladeras = array (
        'nombre'=>'NO FROST RT32K5930SL DIGITAL',
        'marca'=>'SAMSUNG ',
        'descripcion'=>'Twin Cooling Plus crea un entorno favorable para preservar los alimentos frescos en la heladera - Mantiene los alimentos frescos durante más tiempo - 5 formas distintas de utilizar tu heladera - Con vierte fácilmente tu freezer en una heladera para enfriar todos tus alimentos o cambia a modo off para ahorrar energía - La tecnología Digital Inverter ajusta automáticamente la velocidad del compre sor según la demanda de frío de acuerdo a 7 niveles.',
        'precio'=>'225000'
    );
    ?>
    <div class="container">
        <div class=" mx-auto card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="imagenes/samsung_1.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                    <h5 class="card-title"><?php echo $heladeras['marca'] ; echo  $heladeras['nombre']; ?></h5>
                        <p class="card-text"><?php echo $heladeras['descripcion']; ?></p>
                        <p class="card-text text-bg-danger p-3">Precio: $<?php echo $heladeras['precio']; ?></p>
                        <div class="card-footer">
                            <small class="text-muted"><a href="boton_carrito.php?nombre=<?php echo $heladeras['nombre'];?>&&marca=<?php echo $heladeras['marca'];?>&&precio=<?php echo $heladeras['precio'];?>" class="btn btn-outline-danger bs-danger-bg-subtle">Comprar</a></small>
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