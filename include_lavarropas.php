<?php
        $lavarropas = array(
          array('imagenes'=>'drean_1.jpg',
                'nombre'=>'LAVARROPAS AUTOMATICO NEXT 6.06 ECO 6 BLANCO ',
                'marca'=>'DREAN ',
                'descripcion'=>'drean_1.php',
                'precio'=>'126000'),
          array('imagenes'=>'drean_2.jpg',
                'nombre'=>'LAVARROPAS AUTOMATICO CONCEPT 5.05 V1 5 BLANCO',
                'marca'=>'DREAN  ',
                'descripcion'=>'drean_2.php',
                'precio'=>'90000'),
          array('imagenes'=>'lavarropas_samsung_1.jpg',
                'nombre'=>'LAVARROPAS AUTOMATICO WW65M0NHUU 6.5 GRIS',
                'marca'=>'SAMSUNG ',
                'descripcion'=>'samsung_lavarropas_1.php',
                'precio'=>'133000'),
          array('imagenes'=>'lavarropas_samsung_2.jpg',
                'nombre'=>'LAVARROPAS AUTOMATICO WA80F5S4UDW 8',
                'marca'=>'SAMSUNG',
                'descripcion'=>'samsung_lavarropas_2.php',
                'precio'=>'169000'),
          array('imagenes'=>'patrick_1.jpg',
                'nombre'=>'LAVARROPAS SEMIAUTOMATICO LTPK79SB 7 BLANCO',
                'marca'=>'PATRICK',
                'descripcion'=>'patrick_1.php',
                'precio'=>'58000'),
          array('imagenes'=>'patrick_2.jpg',
                'nombre'=>'LAVARROPAS SEMIAUTOMATICO LTPK67SB 6 BLANCO',
                'marca'=>'PATRICK ',
                'descripcion'=>'patrick_2.php',
                'precio'=>'125000')
        );
        for($i=0; $i<count($lavarropas); $i++){
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
        <img src="imagenes/<?php echo $lavarropas[$i]['imagenes']; ?>" class="img-fluid rounded-start mt-3" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title"><?php echo $lavarropas[$i]['nombre'];   ?></h5>
          <p class="card-text">Marca: <?php echo $lavarropas[$i]['marca'];  ?></p>
          <p class="card-text text-bg-danger p-3">Precio: $<?php echo $lavarropas[$i]['precio'];  ?></p>
          <p class="card-text"><a class="btn btn-outline-dark" href="<?php echo $lavarropas[$i]['descripcion'] ?>">Ver más</a></p>
          <div class="card-footer">
            <small class="text-muted"><a href="boton_carrito.php?nombre=<?php echo $lavarropas[$i]['nombre'];?>&&marca=<?php echo $lavarropas[$i]['marca']?>&&precio=<?php echo $lavarropas[$i]['precio']?>" class="btn btn-outline-danger bs-danger-bg-subtle">Comprar</a></small>
          </div>
        </div>
      </div>
    </div>
  </div>
      </div>
    <?php } ?>
