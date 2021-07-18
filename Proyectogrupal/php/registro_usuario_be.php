<?php

    include 'conexion_be.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST ['correo'];
    $usuario = $_POST ['usuario'];
    $contrasena = $_POST ['contrasena'];

    $query ="INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena) 
    VALUES ('$nombre_completo', '$correo', '$usuario', '$contrasena')";


    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
        <script>
            alert("Usuario almacenado exitosamente");
            window.location = "../index.php";
        </script>
        ';
    }else{
        echo '
        <script>
            alert("Intentalo de nuevo, usuario no almacenado");
            window.location = ". ./index.php";
        </script>
        ';
    }

    mysqli_close($conexion);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AustralCoin</title>
    <link rel="stylesheet" href="assets/css/estilo.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
    <!--header - top-->
    <header>
        <div class="header-content">
            <div class="logo"><a href="index.php"> </a> 
            <h1>Programming<b>Trainings</b></h1>  
        </div>
    </header>
</body>
