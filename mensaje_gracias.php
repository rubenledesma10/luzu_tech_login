<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LuzuTech | Gracias</title>
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
    include ("conexion.php");
    $captcha=$_POST['captcha'];
    if($captcha==$_SESSION['captcha']) {
        $consulta_eliminar = "TRUNCATE TABLE compras";
        $resultados_eliminar = mysqli_query($conexion_bd, $consulta_eliminar);
        mysqli_close($conexion_bd);
        echo "<div class='container' style='color: #dc3545'>";
        echo "<h3>¡Gracias " .$_POST['nombre']. " " .$_POST['apellido']. " por realizar tu compra en LuzuTech! A la brevedad te llegara un correo a tu email (" .$_POST['email']. ") confirmando la compra y en unos instantes nos comunicaremos a traves del número de teléfono que nos diste (" .$_POST['telefono']. ")</h3>";
        echo "</div>";    
    }else {
        echo "<script> window.location='confirmar_compra.php?error#error'; </script>";
    }
    ?>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <?php include ("footer.php"); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>