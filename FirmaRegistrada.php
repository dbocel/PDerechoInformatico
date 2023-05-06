<?php


    session_start();

    if(!isset($_SESSION['usuario'])){
        echo'
            <script>
                alert("Por Favor debes de iniciar sesion");
                window.location = "index.php";
            </script>
        ';
        //header("location: index.php");
        session_destroy();
        die();
    }
    
?>


<!DOCTYPE <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> Firma Registrada</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <h1> Bienvenida a la pagina de Firma Registrada! </h1>
        <a href="php/cerrar_session.php"></a>
       
    </body>
</html>