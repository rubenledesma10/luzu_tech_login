<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LuzuTech | Mis compras</title>
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
    
    <div class="container">
    <?php if (!empty($listar_compra)){ ?>
      <h3 style="color: #dc3545">Detalle de tu carrito:</h3>
      <br>
  <table class="table table-secondary  table-striped table-bordered">

  <thead>
    <tr class="text-center">
      <th scope="col">MARCA</th>
      <th scope="col">NOMBRE</th>
      <th scope="col">PRECIO</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <?php
    $total = 0;
    for($i=0;$i<count($listar_compra);$i++){

    ?>
 
    <tr class="text-center">
    
      <td><?php echo $listar_compra[$i]['marca']; ?></td>
      <td><?php echo $listar_compra[$i]['nombre']; ?></td>
      <td>$<?php echo number_format($listar_compra[$i]['precio']*1); ?></td>
      <td><a href="eliminar_compra.php?nombre=<?php echo $listar_compra[$i]['nombre'];?>">Eliminar</a></td>
      
    </tr>
    <?php $total = $total + ($listar_compra[$i]['precio']); ?>
    <?php } ?>
    <tr class="text-center">
      <td><h5>Total de la compra </h5></td>
      <td></td>
      <td><h5>$<?php echo number_format($total); ?></h5></td>
      <td></td>      
    </tr>
  </tbody>
</table>
<div class="container">
  <div class="d-grid gap-2">
    <a href="confirmar_compra.php" class="btn btn-outline-danger bs-danger-bg-subtlet btn-lg">Confirmar compra</a>
  </div>
</div>


<?php } else {
  echo "<div class='alert alert-danger' role='alert'>
  <h4 class='alert-heading'>Tu pedido: </h4>
  <p>Tu carrito esta vacío</p>
</div>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
  }?>
    
    </div>
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