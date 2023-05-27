<?php


session_start();

if (!isset($_SESSION['usuario'])) {
    echo '
            <script>
                alert("Por Favor debes de iniciar sesion");
                window.location = "index.php";
            </script>
        ';
    //header("location: index.php");
    session_destroy();
    die();
}

echo "<link rel=stylesheet href=assets/css/style.css>";

echo '<script type="assets/js/generarCodigo.js">'
    , 'jsfunction();'
    , '</script>'
;





/*$longitud = 6;
$codigo = '';
for ($i = 0; $i < $longitud; $i++) {
    $codigo .= rand(0, 9);

    echo $codigo;


<button onclick="mostrarCodigodeAutenticacion()">codigo</button>
}*/

?>



<!DOCTYPE <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Firma Registrada</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


</head>

<br></br>
<br></br>
<br></br>
/*

<body>
    <div class="contenedor_Unico">
        <span class="bordelinea"></span>
        <div class="caja">
            <div class="numero_registrado">
                <form action="" class="form">
                    <h2>Autenticacion de usuario</h2>
                    <div class="Numer">
                        <input type="number" placeholder="Introduzca el numero con que te haz registrado"
                            required="required">
                        <span>No_Telefono</span>
                        <i></i>
                    </div>
                    <div class="Form_Button">
                        <button id="generar-codigo" class="Verificar">Verificar</button>
                        <label id="codigo-autenticacion"></label>
                        <div id="codigo"></div>
                    </div>
            </div>
        </div>
    </div>
    <br></br>

    <a href="php/cerrar_sesion.php" class="cerrarSesion">Cerrar Sesión</a>
</body>
*/

</html>