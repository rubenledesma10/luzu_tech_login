<img src="imagenes/<?php echo $celulares[$i]['imagenes']; ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?php echo $celulares[$i]['nombre'];   ?></h5>
        <p class="card-text">Marca: <?php echo $celulares[$i]['marca'];  ?></p>
        <p class="card-text">Caracteristicas: <?php echo $celulares[$i]['descripcion'];  ?></p>
        <p class="card-text">Precio: $<?php echo $celulares[$i]['precio'];  ?></p>
        <a href="#" class="btn btn-primary">Comprar</a>
      </div>





      <div class="container">
    <div class="card float-start ms-5 ps-2 mt-2" style="width: 18rem; height: auto;">
    <img src="imagenes/<?php echo $celulares[$i]['imagenes']; ?>" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title"><?php echo $celulares[$i]['nombre'];   ?></h5>
        <p class="card-text">Marca: <?php echo $celulares[$i]['marca'];  ?></p>
        <p class="card-text">Caracteristicas: <?php echo $celulares[$i]['descripcion'];  ?></p>
        <p class="card-text">Precio: $<?php echo $celulares[$i]['precio'];  ?></p>
    </div>
    <div class="card-footer">
      <small class="text-muted"><a href="#" class="btn btn-primary">Comprar</a></small>
    </div>
        
      </div>
    </div>