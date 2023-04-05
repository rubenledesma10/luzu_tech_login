<?php
        $televisores = array(
          array('imagenes'=>'bgh_1.jpg',
                'nombre'=>'SMART LED TV 32 PULGADAS HD B3222K5 ',
                'marca'=>'BGH ',
                'descripcion'=>'bgh_tv_1.php',
                'precio'=>'48000'),
          array('imagenes'=>'bgh_2.jpg',
                'nombre'=>'SMART LED ANDROID TV 32 PULGADAS HD B3222S5A',
                'marca'=>'BGH  ',
                'descripcion'=>'bgh_tv_2.php',
                'precio'=>'54000'),
          array('imagenes'=>'hisense_1.jpg',
                'nombre'=>'SMART LED TV 32 PULGADAS HD 32A421GSV',
                'marca'=>'HISENSE ',
                'descripcion'=>'hisense_1.php',
                'precio'=>'45000'),
          array('imagenes'=>'hisense_2.jpg',
                'nombre'=>'SMART LED TV 50 PULGADAS 4K UHD 9150A641GSV',
                'marca'=>'HISENSE',
                'descripcion'=>'hisense_2.php',
                'precio'=>'83000'),
          array('imagenes'=>'motorola_1.jpg',
                'nombre'=>'SMART LED ANDROID TV 32 PULGADAS HD',
                'marca'=>'MOTOROLA ',
                'descripcion'=>'motorola_1.php',
                'precio'=>'58000'),
          array('imagenes'=>'motorola_2.jpg',
                'nombre'=>'SMART LED ANDROID TV 43 PULGADAS FULL HD',
                'marca'=>'MOTOROLA ',
                'descripcion'=>'motorola_2.php',
                'precio'=>'87500')
        );
        for($i=0; $i<count($televisores); $i++){
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
        <img src="imagenes/<?php echo $televisores[$i]['imagenes']; ?>" class="img-fluid rounded-start mt-3" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title"><?php echo $televisores[$i]['nombre'];   ?></h5>
          <p class="card-text">Marca: <?php echo $televisores[$i]['marca'];  ?></p>
          <p class="card-text text-bg-danger p-3">Precio: $<?php echo $televisores[$i]['precio'];  ?></p>
          <p class="card-text"><a class="btn btn-outline-dark" href="<?php echo $televisores[$i]['descripcion'] ?>">Ver más</a></p>
          <div class="card-footer">
          <small class="text-muted"><a href="boton_carrito.php?nombre=<?php echo $televisores[$i]['nombre'];?>&&marca=<?php echo $televisores[$i]['marca']?>&&precio=<?php echo $televisores[$i]['precio']?>" class="btn btn-outline-danger bs-danger-bg-subtle">Comprar</a></small>
          </div>
        </div>
      </div>
    </div>
  </div>
      </div>
<?php } ?>
