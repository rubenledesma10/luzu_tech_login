<?php
        $heladeras = array(
          array('imagenes'=>'electrolux_1.jpg',
                'nombre'=>'NO FROST DFN3500P ',
                'marca'=>'ELECTROLUX ',
                'descripcion'=>'electrolux_1.php',
                'precio'=>'217000'),
          array('imagenes'=>'electrolux_2.png',
                'nombre'=>'NO FROST DFN3500B',
                'marca'=>'ELECTROLUX  ',
                'descripcion'=>'electrolux_2.php',
                'precio'=>'186000'),
          array('imagenes'=>'whirlpool_1.jpg',
                'nombre'=>'NO FROST WRM56K2 PLATA',
                'marca'=>'WHIRLPOOL ',
                'descripcion'=>'whirlpool_1.php',
                'precio'=>'435000'),
          array('imagenes'=>'whirlpool_2.jpg',
                'nombre'=>'NO FROST WRE80K2 EVOX',
                'marca'=>'WHIRLPOOL',
                'descripcion'=>'whirlpool_2.php',
                'precio'=>'580000'),
          array('imagenes'=>'samsung_1.jpg',
                'nombre'=>'NO FROST RT32K5930SL DIGITAL',
                'marca'=>'SAMSUNG ',
                'descripcion'=>'samsung_heladera_1.php',
                'precio'=>'225000'),
          array('imagenes'=>'samsung_2_2.jpg',
                'nombre'=>'NO FROST RT35K5532SL DIGITAL',
                'marca'=>'SAMSUNG ',
                'descripcion'=>'samsung_heladera_2.php',
                'precio'=>'125000')
        );
        for($i=0; $i<count($heladeras); $i++){
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
        <img src="imagenes/<?php echo $heladeras[$i]['imagenes']; ?>" class="img-fluid rounded-start mt-3" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title"><?php echo $heladeras[$i]['nombre'];   ?></h5>
          <p class="card-text">Marca: <?php echo $heladeras[$i]['marca'];  ?></p>
          <p class="card-text text-bg-danger p-3">Precio: $<?php echo $heladeras[$i]['precio'];  ?></p>
          <p class="card-text"><a class="btn btn-outline-dark" href="<?php echo $heladeras[$i]['descripcion'] ?>">Ver más</a></p>
          <div class="card-footer">
            <small class="text-muted"><a href="boton_carrito.php?nombre=<?php echo $heladeras[$i]['nombre'];?>&&marca=<?php echo $heladeras[$i]['marca']?>&&precio=<?php echo $heladeras[$i]['precio']?>" class="btn btn-outline-danger bs-danger-bg-subtle">Comprar</a></small>
          </div>
        </div>
      </div>
    </div>
  </div>
      </div>
    <?php } ?>
