<?php 

    include 'conexion_be.php';

    $Nombre_Completo = $_POST['Nombre_Completo'];
    $Correo = $_POST['Correo'];
    $DPI = $_POST['DPI'];
    $Telefono = $_POST['Telefono'];
    $Contrasena = $_POST['Contrasena'];
    $ConfContrasena = $_POST['ConfContrasena'];


    //Incriptar contrasenas
    $Contrasena = hash('sha512',$Contrasena,);
    $ConfContrasena = hash('sha512', $ConfContrasena);

    $query = "INSERT INTO usuarios(Nombre_Completo, Correo, DPI, Telefono, Contrasena, ConfContrasena) 
              VALUES('$Nombre_Completo', '$Correo', '$DPI', '$Telefono', '$Contrasena', '$ConfContrasena')";
    

    //Verificar que el correo no se repita en la base de datos
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE Correo ='$Correo' ");


    if(mysqli_num_rows($verificar_correo) > 0){    
        echo '
            <script>
                alert("Este correo ya esta registrado, intenta con otro diferente");
                window.location = "../index.php";
            </script>
        ';
        exit();
    }

    //Verificar que el DPI no se repita en la base de datos
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE DPI ='$DPI' ");


    if(mysqli_num_rows($verificar_correo) > 0){    
        echo '
            <script>
                alert("Este No. de DPI ya esta registrado, intenta con otro diferente");
                window.location = "../index.php";
            </script>
        ';
        exit();
    }

    //Verificar que el Telefono no se repita en la base de datos
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE Telefono ='$Telefono' ");


    if(mysqli_num_rows($verificar_correo) > 0){    
        echo '
            <script>
                alert("Este numero de telefono ya esta registrado, intenta con otro nuevo.");
                window.location = "../index.php";
            </script>
        ';
        exit();
    }

    $ejecutar = mysqli_query($conexion, $query);


    if($ejecutar){
        echo '
            <script>
                alert("Usuario registrado exitosamente");
                window.location = "../index.php";
            </script>
        ';
    }else {
        echo'
            <script>
                alert("Intentalo de nuevo, usuario no registrado");
                window.location = "../index.php";
            </script>
        ';
    }

    mysqli_close($conexion);
?>

