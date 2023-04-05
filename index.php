<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LuzuTech</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>
    <div class="container">
        <br>
        <h1 class="text-danger text-center">Bienvenido/a a LuzuTech</h1>
        <br>
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <form action="verificar.php" method="POST">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Iniciar sesión</h5>
                            <br>
                            <label class="form-label">Ingrese su correo electrónico: </label>
                            <br>
                            <input type="email" class="form-control" placeholder="Correo electrónico" name="email" autocomplete="off" max-length="100" required>
                            <br>
                            <label for="exampleFormControlInput1" class="form-label">Ingrese su contraseña: </label>
                            <input type="password" class="form-control" id="inputPassword" placeholder="Contraseña" name="password" autocomplete="off" max-length="30" required>
                            <br>
                            <input type="submit" class="btn btn-success" value="Ingresar">
                            <p><b><?php if(isset($_GET['pass_error'])){echo "Contraseña incorrecta, inténtelo nuevamente...";} ?></b></p>
		                    <p><b><?php if(isset($_GET['email_error'])){echo "Email incorrecto, intentelo nuevamente ";} ?></b></p>
		                    <p><b><?php if(isset($_GET['email_pass_error'])){echo "Email y contraseña incorrectos, intentelo nuevamente ";} ?></b></p>
                        </div>
                    </div>
                </div>
            </form>
            <form action="codificar.php" method="POST">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Registrarme</h5>
                            <br>
                            <label class="form-label">Ingrese su correo electrónico: </label>
                            <br>
                            <input type="email" class="form-control" placeholder="Correo electrónico" name="email" autocomplete="off" max-length="100" required>
                            <br>
                            <label for="exampleFormControlInput1" class="form-label">Ingrese su contraseña: </label>
                            <input type="password" class="form-control" id="inputPassword" placeholder="Contraseña" name="password" autocomplete="off" max-length="30" required>
                            <br>
                            <input type="submit" class="btn btn-danger" value="Registrarme">
                            <br>
                            <p></p>
                            <p></p>
                            <p></p>
                    </div>
                </div>
            </div>
            </form>
            <br>
            <a href="luzutech_invitado.php" class=" mx-auto btn btn-light btn-lg">Navegar como invitado</a>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>