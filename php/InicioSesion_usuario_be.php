<?php

    session_start();

    include 'conexion_be.php';

    $Correo = $_POST['Correo'];
    $Contrasena = $_POST['Contrasena'];


    $validar_InicioSesion = mysqli_query($conexion, "SELECT * FROM usuarios WHERE Correo='$Correo' and Contrasena='$Contrasena'");


    if (mysqli_num_rows($validar_InicioSesion) > 0) {
        $_SESSION['usuario'] = $Correo;
        header("location: ../FirmaRegistrada.php");
        exit;
    }else{
        echo '
            <script>
                alert("Usuario no existe, por favor verifique los datos ingresados");
                window.location = "../index.php";
            </script>
        ';
        exit;
    }



?>