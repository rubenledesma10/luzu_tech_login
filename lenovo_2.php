<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LuzuTech | LENOVO 82QE000VAR INTEL CORE I5 </title>
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
        'nombre'=>'82QE000VAR INTEL CORE I5',
        'marca'=>'LENOVO ',
        'descripcion'=>'Notebook. Pantalla tactil de 14" 2.2K (2240x1400) IPS 300nits Glossy, 100% sRGB, TUV Low Blue Light, Dolby Vision, Glass, Touch. Procesador Intel Core i5-1235U, 10C (2P +8E) / 12T, P-core 1.3 / 4.4GHz, -- E-core 0.9 / 3.3GHz, 12MB. Placa de video Integrated Intel Iris Xe Graphics. Sistema operativo Windows 11 Home 64. Capacidad 512 Gb SSD M.2 2242 PCIe 4.0x4 NVMe / RAM 16GB soldered. Lector de tarjetas Micro SD. Microfono incorporado. Camara FHD. Bateria Integrada 71 Wh 4 cell. Wi-Fi 6E 11ax, 2x2 + BT5.2. Conectoes: 1x USB 3.2 Gen 1, 1x HDMI 2.0. 1x microSD card reader. 1x Headphone / microphone combo jack (3.5mm). 2x Thunderbolt 4 (support data transfer, Power Delivery 3.0, and DisplayPort 1.4). Incluye Lapiz Lenovo Digital.',
        'precio'=>'370000'
    );
    ?>
    <div class="container">
        <div class=" mx-auto card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="imagenes/levono_intel_core_i5.jpg" class="img-fluid rounded-start" alt="...">
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