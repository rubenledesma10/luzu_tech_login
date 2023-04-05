<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LuzuTech | Registrarse</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>
    <div class="container">
        <div class="row vh-100 justify-content-center align-items-center">
            <div class="col-auto p-5">
                <h5>Complete el siguiente formulario para poder registrarse en LuzuTech</h5>
                <br>
                <form action="codificar.php" method="POST">
                <div class="mb-3">
                    <label class="form-label"><b>Correo electrónico: </b></label>
                    <input type="email" class="form-control" name="email" placeholder="Ingrese su correo electrónico" autocomplete="off" max-length="100" required>
                </div>
                <div class="mb-3">
                    <label class="form-label"><b>Contraseña: </b></label>
                    <input type="password" class="form-control" name="password" placeholder="Ingrese su contraseña" autocomplete="off" max-length="30" required>
                </div>
                <input type="submit" value="Registrarme" class="btn btn-success">
            </form>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>    
</body>
</html>