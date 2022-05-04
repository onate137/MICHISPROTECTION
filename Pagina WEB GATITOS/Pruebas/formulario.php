<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/corazon.ico" type="image/x-icon">
    <link rel="stylesheet" href="formulario.css">
    <title>Formulario</title>
</head>

<body>



    <div class="container">
        <div class="header">
            <h2>Crear cuenta</h2>
        </div>
        <form id="form" class="form">
            <div class="form-control">
                <label for="username">Nombre</label>
                <input type="text" placeholder="Noobmaster69" id="username" /><span class="barra"></span>
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="username">Email</label>
                <input type="email" placeholder="hola@gmail.com" id="email" /><span class="barra"></span>
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="username">Contraseña</label>
                <input type="password" placeholder="contraseña" id="password" /><span class="barra"></span>
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="username">Confirmar contraseña</label>
                <input type="password" placeholder="contraseña" id="password2" /><span class="barra"></span>
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div>
                <input class="button" type="submit" value="Registrar">
                <a href="../index.html">Inicio</a>
            </div>
        </form>
    </div>
    
    <div class="wave">
        <img src="../img/wave.svg" alt="wave">
    </div>
    <script src="https://kit.fontawesome.com/b1e4374abd.js" crossorigin="anonymous"></script>
    <script src="formulario.js"></script>

</body>

</html>