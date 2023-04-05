<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LuzuTech | Confirmar compra</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    
</head>
<body>
<?php include("botonera.php");?>
<br>      
<br>
<br>
<br>
<br>
<div class="container">
    <form action="mensaje_gracias.php" method="POST">
        <label class="form-label">Nombre: </label>
        <input type="text" placeholder="Nombre" class="form-control" name='nombre' autocomplete="off" required>
        <br>
        <label class="form-label">Apellido: </label>
        <input type="text" placeholder="Apellido" class="form-control" name='apellido' autocomplete="off" required>
        <br>
        <label class="form-label">Email: </label>
        <input type="email" placeholder="Email" class="form-control" name='email' autocomplete="off" required>
        <br>
        <label class="form-label">Teléfono: </label>
        <input type="number" placeholder="Número de teléfono" class="form-control" name='telefono' autocomplete="off" required>
        <br>
        <label class="form-label">Provincia: </label>
        <select name="provincia" class="form-select" required>
            <option selected value="">Seleccione su provincia</option>
            <option>Buenos Aires</option>
            <option>Ciudad Autónoma de Buenos Aires</option>
            <option>Catamarca</option>
            <option>Chaco</option>
            <option>Chubut</option>
            <option>Córdoba</option>
            <option>Corrientes</option>
            <option>Entre Ríos</option>
            <option>Formosa</option>
            <option>Jujuy</option>
            <option>La Pampa</option>
            <option>La Rioja</option>
            <option>Mendoza</option>
            <option>Misiones</option>
            <option>Neuquén</option>
            <option>Río Negro</option>
            <option>Salta</option>
            <option>San Juan</option>
            <option>San Luis</option>
            <option>Santa Cruz</option>
            <option>Santa Fe</option>
            <option>Santiago del Estero</option>
            <option>Tierra del Fuego, Antártida e Islas del Atlántico Sur</option>
            <option>Tucumán</option>        
        </select>
        
        <br>
        <label class="form-label">Localidad: </label>
        <input type="text" placeholder="Localidad" class="form-control" name='localidad' autocomplete="off" required>
        <br>
        <label class="form-label">Domicilio: </label>
        <input type="text" placeholder="Domicilio" class="form-control" name='domicilio' autocomplete="off" required>
        <br>
        <label class="form-label">Código postal: </label>
        <input type="number" placeholder="Código postal" class="form-control" name='cp' autocomplete="off" required>
        <br>
        <label class="form-label" >Forma de pago: </label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" required>
                <label class="form-check-label" for="flexRadioDefault1">
                    Efectivo
                </label>
            </div>
            <br>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" required>
                <label class="form-check-label" for="flexRadioDefault2">
                    Débito
                </label>
            </div>
            <br>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" required>
                <label class="form-check-label" for="flexRadioDefault3">
                    Transferencia Bancaria
                </label>
                <br>
                <br>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4" required>
                <label class="form-check-label " for="flexRadioDefault4">
                    <select class="form-select" aria-label="Default select example">
                        <option selected value="">Tarjeta de crédito</option>
                        <option>3 cuotas sin interés</option>
                        <option>6 cuotas sin interés</option>
                        <option>12 cuotas con interés</option>
                    </select>
                </label>
            </div>
        <br>
        <?php
		function contenido_captcha() {
			$pattern = "1234567890abcdefghijkmnsoprqtuvwyz$%&/";
			$key = '';
			for($i=0; $i<8; $i++){
				$key.= $pattern[rand(0, 36)];
			}
			return $key;
		}
		$_SESSION['captcha']=contenido_captcha();
		?>
        <img src="image_captcha.php"> 
        <br>
        <br>
        <input id="error" type="text" name="captcha">
        <br>
        <br>
		<?php if(isset($_GET['error'])){
			echo "<b style='color: #dc3545'>¡ERROR! Su compra no pudo ser procesada. Vuelva a intentarlo</b>";
		}?>
        <br>
        <br>
         <input type="submit" name='confir_compra' class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop" value="Confirmar compra" >
    </form>
</div>
<?php include ("footer.php"); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>