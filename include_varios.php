<?php
        $varios = array(
          array('imagenes'=>'xinji.png',
                'nombre'=>'RELOJ INTELIGENTE C1',
                'marca'=>'XINJI ',
                'descripcion'=>'xinji.php',
                'precio'=>'16000'),
          array('imagenes'=>'cargador.jpg',
                'nombre'=>'CARGADOR PORTATIL IPH050B',
                'marca'=>'TAGWOOD',
                'descripcion'=>'cargador.php',
                'precio'=>'2900'),
          array('imagenes'=>'tablet_lenovo.jpg',
                'nombre'=>'TABLET TB-8505FS 8 32 GB GRIS',
                'marca'=>'LENOVO ',
                'descripcion'=>'lenovo_tablet.php',
                'precio'=>'47500'),
          array('imagenes'=>'cocina_2.jpg',
                'nombre'=>'COCINA MARSHALL MTI 502N IX',
                'marca'=>'MARSHALL',
                'descripcion'=>'cocina.php',
                'precio'=>'78600'),
          array('imagenes'=>'procesadora.png',
                'nombre'=>'MULTIPROCESADORA SMARTLIFE SL-FP0509',
                'marca'=>'SMARTLIFE',
                'descripcion'=>'procesadora.php',
                'precio'=>'39700'),
          array('imagenes'=>'play5.jpg',
                'nombre'=>'CONSOLA PS5 BLURAY CFI-1115A 825 GB SSD',
                'marca'=>'SONY ',
                'descripcion'=>'play5.php',
                'precio'=>'342000')
        );
        for($i=0; $i<count($varios); $i++){
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
        <img src="imagenes/<?php echo $varios[$i]['imagenes']; ?>" class="img-fluid rounded-start mt-3" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title"><?php echo $varios[$i]['nombre'];   ?></h5>
          <p class="card-text">Marca: <?php echo $varios[$i]['marca'];  ?></p>
          <p class="card-text text-bg-danger p-3">Precio: $<?php echo $varios[$i]['precio'];  ?></p>
          <p class="card-text"><a class="btn btn-outline-dark" href="<?php echo $varios[$i]['descripcion'] ?>">Ver más</a></p>
          <div class="card-footer">
            <small class="text-muted"><a href="boton_carrito.php?nombre=<?php echo $varios[$i]['nombre'];?>&&marca=<?php echo $varios[$i]['marca']?>&&precio=<?php echo $varios[$i]['precio']?>" class="btn btn-outline-danger bs-danger-bg-subtle">Comprar</a></small>
          </div>
        </div>
      </div>
    </div>
  </div>
      </div>
    <?php } ?>
