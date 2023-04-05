<?php
        $computadoras = array(
          array('imagenes'=>'lenovo_intel_core.jpg',
                'nombre'=>'81VU0067AR INTEL CELERON',
                'marca'=>'LENOVO',
                'descripcion'=>'lenovo_1.php',
                'precio'=>'85000'),
          array('imagenes'=>'levono_intel_core_i5.jpg',
                'nombre'=>'82QE000VAR INTEL CORE I5',
                'marca'=>'LENOVO ',
                'descripcion'=>'lenovo_2.php',
                'precio'=>'370000'),
          array('imagenes'=>'hp_1.jpg',
                'nombre'=>'14-CF2531LA CELERON N4020',
                'marca'=>'HP',
                'descripcion'=>'hp_1.php',
                'precio'=>'99000'),
          array('imagenes'=>'hp_2.jpg',
                'nombre'=>'14-DQ2029LA INTEL CORE I5',
                'marca'=>'HP',
                'descripcion'=>'hp_2.php',
                'precio'=>'200000'),
          array('imagenes'=>'asus_1.jpg',
                'nombre'=>'91X515EA-BR1324T INTEL CORE I3',
                'marca'=>'ASUS',
                'descripcion'=>'asus_1.php',
                'precio'=>'150000'),
          array('imagenes'=>'asus_2.jpg',
                'nombre'=>'E410KA-EK407W INTEL PENTIUM',
                'marca'=>'ASUS',
                'descripcion'=>'asus_2.php',
                'precio'=>'125000')
        );
        for($i=0; $i<count($computadoras); $i++){
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
        <img src="imagenes/<?php echo $computadoras[$i]['imagenes']; ?>" class="img-fluid rounded-start mt-3" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title"><?php echo $computadoras[$i]['nombre'];   ?></h5>
          <p class="card-text">Marca: <?php echo $computadoras[$i]['marca'];  ?></p>
          <p class="card-text text-bg-danger p-3">Precio: $<?php echo $computadoras[$i]['precio'];  ?></p>
          <p class="card-text"><a class="btn btn-outline-dark" href="<?php echo $computadoras[$i]['descripcion'] ?>">Ver más</a></p>
          <div class="card-footer">
            <small class="text-muted"><a href="boton_carrito.php?nombre=<?php echo $computadoras[$i]['nombre'];?>&&marca=<?php echo $computadoras[$i]['marca']?>&&precio=<?php echo $computadoras[$i]['precio']?>" class="btn btn-outline-danger bs-danger-bg-subtle">Comprar</a></small>
          </div>
        </div>
      </div>
    </div>
  </div>
      </div>
    <?php } ?>