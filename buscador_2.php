
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LuzuTech | Resultados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>
    
    <?php include("botonera.php"); ?>
    <?php
    include("conexion.php");
    $consulta = mysql_query($conexion_bd, "SELECT * from celulares, computadoras, heladeras, lavarropas, televisores, varios_tech WHERE marca LIKE '%".$_POST['search']."%' OR nombre LIKE '%".$_POST['search']."%' OR descripcion LIKE '%".$_POST['search']."%' OR precio LIKE '%".$_POST['search']."%'");
    $num_consulta= mysql_num_rows($consulta);

    ?>

    <h2 style="color: #dc3545"><?php echo $num_consulta ?> Resultados encontrados</h2>

    <table class="table">
        <thead>
            <tr>
                <th>Marca</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row_consultas = mysql_fetch_assoc($consulta)){ ?>
                <tr>
                    <td class="text-center"><?php echo $row_consultas['marca']; ?></td>
                    <td class="text-center"><?php echo $row_consultas['nombre']; ?></td>
                    <td class="text-center"><?php echo $row_consultas['descripcion']; ?></td>
                    <td class="text-center"><?php echo $row_consultas['precio']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <?php include ("boton_carrito.php"); ?>
    <?php include ("footer.php"); ?>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>

----------------

<div class="container">
        <form action="buscador.php" method="POST">
            <h4><label>¿Qué estás buscando?</label></h4>
            <br>
            <input type="text" class="form-control" name="search" autocomplete="off" value="<?php echo $_POST['search'] ?>">
            <br>
            <input type="submit" class="btn btn-outline-danger bs-danger-bg-subtlet" value="Buscar">
            <?php 
            $consulta=mysqli_query("SELECT * FROM celulares, computadoras, heladeras, lavarropas, televisores, varios_tech WHERE marca LIKE '%".$_POST['search']."%' OR nombre LIKE '%".$_POST['search']."%' OR descripcion LIKE '%".$_POST['search']."%' OR precio LIKE '%".$_POST['search']."%'");
            $num_consulta=mysqli_num_rows($consulta);
            ?>
            <p><?php echo $num_consulta; ?> Resultados encontrados</p>
        </form>

        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th>Marca</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Precio</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php while($row_consultas = mysqli_fetch_assoc($consulta)){ ?>
                    <tr>
                        <td class="text-center"><?php echo $row_consultas['marca']; ?></td>
                        <td class="text-center"><?php echo $row_consultas['nombre']; ?></td>
                        <td class="text-center"><?php echo $row_consultas['descripcion']; ?></td>
                        <td class="text-center"><?php echo $row_consultas['precio']; ?></td>
                    </tr>
                    <?php } ?>
        </tbody>
    </table>
        </div>

     </div>