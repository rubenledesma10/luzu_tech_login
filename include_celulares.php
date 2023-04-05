<?php
        $celulares = array(
          array('imagenes'=>'a13.png',
                'nombre'=>'GALAXY A13',
                'marca'=>'SAMSUNG',
                'descripcion'=>'galaxy_a13.php',
                'precio'=>'78000'),
          array('imagenes'=>'a23.png',
                'nombre'=>'GALAXY A23',
                'marca'=>'SAMSUNG',
                'descripcion'=>'galaxy_a23.php',
                'precio'=>'102000'),
          array('imagenes'=>'e20.png',
                'nombre'=>'MOTO E20',
                'marca'=>'MOTOROLA ',
                'descripcion'=>'moto_e20.php',
                'precio'=>'38000'),
          array('imagenes'=>'g52.png',
                'nombre'=>'MOTO G52',
                'marca'=>'MOTOROLA ',
                'descripcion'=>'moto_g52.php',
                'precio'=>'76000'),
          array('imagenes'=>'iphone13.jpg',
                'nombre'=>'IPHONE 13',
                'marca'=>'APPLE',
                'descripcion'=>'iphone13.php',
                'precio'=>'575000'),
          array('imagenes'=>'iphone13mini.jpg',
                'nombre'=>'IPHONE 13 MINI',
                'marca'=>'APPLE',
                'descripcion'=>'iphone13_mini.php',
                'precio'=>'506000')
        );
        for($i=0; $i<count($celulares); $i++){
      ?>
      <style>
        .card:hover{
          border-color:#dc3545;
          box-shadow: 0 0 10px 2px #dc3545;
        }
        .card {
          transition: box-shadow .5s, border-color 1s;
        }
      </style>
    
      <div class="container">
      <div class="card mb-3 me-3 float-start" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="imagenes/<?php echo $celulares[$i]['imagenes']; ?>" class="img-fluid rounded-start mt-3" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title"><?php echo $celulares[$i]['nombre'];   ?></h5>
          <p class="card-text">Marca: <?php echo $celulares[$i]['marca'];  ?></p>
          <p class="card-text text-bg-danger p-3">Precio: $<?php echo $celulares[$i]['precio'];  ?></p>
          <p class="card-text"><a class="btn btn-outline-dark" href="<?php echo $celulares[$i]['descripcion'] ?>">Ver más</a></p>
          <div class="card-footer">
            <small class="text-muted"><a href="boton_carrito.php?nombre=<?php echo $celulares[$i]['nombre'];?>&&marca=<?php echo $celulares[$i]['marca'];?>&&precio=<?php echo $celulares[$i]['precio'];?>" class="btn btn-outline-danger bs-danger-bg-subtle">Comprar</a></small>
          </div>
        </div>
      </div>
    </div>
  </div>
      </div>
    <?php } ?>
