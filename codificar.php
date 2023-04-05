<?php
$password = password_hash($_POST['password'], PASSWORD_DEFAULT, array('cost'=>4));
$email = $_POST['email'];

include("conexion.php");



$verificar_correo = mysqli_query($conexion_bd, "SELECT * FROM usuarios WHERE email='$email'");

if(mysqli_num_rows($verificar_correo)>0){
    echo '
        <script>
            alert("Ya existe un usuario registrado con este correo, intentelo nuevamente con otro correo");
            window.location="index.php";
        </script>
    ';
} else {
    mysqli_query($conexion_bd, "INSERT INTO usuarios VALUES (DEFAULT, '$email', '$password')");
    session_start();
    $_SESSION['email']=$_POST['email'];
    echo '
        	<script>
            	alert("Tu registro fue todo un éxito. ¡Bienvenido a LuzuTech!");
                window.location="luzu_tech_inicio.php";
        	</script>
    	';
}



?>