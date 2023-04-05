<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LuzuTech | WHIRLPOOL NO FROST WRM56K2 PLATA </title>
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
        'nombre'=>'NO FROST WRM56K2 PLATA',
        'marca'=>'WHIRLPOOL ',
        'descripcion'=>'Heladera No Frost Inverter. Volumen bruto 462 Litros. Volumen neto: 492 Lts. Sistema de enfriamiento: No frost. Ubicacion del freezer: Superior. Tipo de controles: Touch externos. Eficiencia energetica A+. Compartimiento para frutas y multiuso. Tipo de estantes de vidrio templado. Tecnologia Evox: evita la corrosion y las marcas del uso cotidiano en las puertas. Control externo de temperatura. Modos especiales en el display: compras, vacaciones o fiesta (funciones para cada momento, que optimizan la temperatura segun la necesidad). Turbo control y turbo freezer: doble compartimiento extra frio con funcion Turbo para enfriar alimentos y bebidas en tiempo record. Espacio Adapt: estantes y bandejas con altura ajustable para optimizar el espacio al maximo. Turbo Ice: funcion que acelera la fabricacion de hielo. Control de circulacion de aire: regula la cantidad de aire frio hacia el freezer o la helader segun necesidades. Indicacion de puerta abierta. Aviso de hielo listo. Iluminacion LED del refrigerador.',
        'precio'=>'435000'
    );
    ?>
    <div class="container">
        <div class=" mx-auto card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="imagenes/whirlpool_1.jpg" class="img-fluid rounded-start" alt="...">
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