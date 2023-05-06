<?php

    session_start();
    
    if(isset($_SESSION['usuario'])){
        header("location: FirmaRegistrada.php");
    }

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión y Registro - Proyect-Derecho</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilos.css">    
</head>
<body>
    <main>
        <div class="contenedor_todo">
            <div class="caja_trasera">
                <div class="caja_trasera-IniciodeSesion">
                    <h3> Ya tienes una cuenta</h3>
                    <p>Inicie sesión para ingresar a la cuenta</p>
                    <button id="btn_iniciar-sesion">Iniciar Sesión</button>  
            </div>
                <div class="caja_trasera-Registro">
                    <h3>¿Aun no tienes una cuenta?</h3>
                    <p>Registrate para que puedes iniciar sesión</p>
                    <button id="btn_Registrarese">Registrar</button>
                </div>
            </div>
            <!--inicio de Sesión y Registro-->
            <div class="contenedor_Registro-IniciodeSesion">
                <!--inicio de sesion-->
                <form action="php/InicioSesion_usuario_be.php" method="POST" class="formulario_IniciodeSesion">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Correo Electronico" name="Correo">
                    <input type="password" placeholder="Contraseña" name="Contrasena">
                    <button>Iniciar Sesión</button>
                </form>
                <!--Registro-->
                <form action="php/registro_usuario_be.php" method="POST" class="formulario_Registro">
                    <h2>Registrate</h2>
                    <input type="text" placeholder="Nombre Completo" name="Nombre_Completo">
                    <input type="text" placeholder="Correo Electronico" name="Correo">
                    <input type="number" placeholder="DPI" name="DPI">
                    <input type="number" placeholder="Telefono" name="Telefono">
                    <input type="password" placeholder="Contraseña" name="Contrasena">
                    <input type="password" placeholder="Confirmar Contraseña" name="ConfContrasena">
                    <button>Registrar</button>
                </form>
            </div>
        </div>
    </main>
    <script src="assets/js/script.js"></script>
</html>