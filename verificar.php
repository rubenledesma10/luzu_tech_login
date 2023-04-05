
<?php
include("conexion.php");
$password = $_POST['password'];
$email = $_POST['email'];

$query = mysqli_query($conexion_bd, "SELECT email, password FROM usuarios WHERE email='$email'");

if(mysqli_num_rows($query)==0){
	header("Location: index.php?email_error");
	$codificado = mysqli_fetch_assoc($query);
	$verificar = password_verify($password, $codificado['password']);
	if (!$verficar){
		header("Location: index.php?email_pass_error");
	}
	
} else {
	$codificado = mysqli_fetch_assoc($query);
	$verificar = password_verify($password, $codificado['password']);
	if($verificar){
		session_start();
		$_SESSION['email']=$_POST['email'];
		echo '
        	<script>
            	alert("¡Bienvenido a LuzuTech!");
                window.location="luzu_tech_inicio.php";
        	</script>
    	';
	} else {
		header("Location: index.php?pass_error");
	}
	
}

?>