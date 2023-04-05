<?php if (!empty($listar_compra)){ ?>
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
    
    for($i=0;$i<count($listar_compra);$i++){

    ?>
 
    <tr class="text-center">
    
      <td><?php echo $listar_compra[$i]['marca']; ?></td>
      <td><?php echo $listar_compra[$i]['nombre']; ?></td>
      <td>$<?php echo $listar_compra[$i]['precio']; ?></td>
      <td><a href="eliminar_compra.php?nombre=<?php echo $listar_compra[$i]['nombre'];?>">Eliminar</a></td>
      
    </tr>
    <tr class="text-center">
      <td><h5>Total de la compra </h5></td>
      <td></td>
      <td><h5>$100</h5></td>
      <td></td>      
    </tr>
    <?php } ?>
  </tbody>
</table>
<?php } else {
  echo "No has comprado nada ";
  }?>