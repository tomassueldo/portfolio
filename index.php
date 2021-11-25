<?php

$pg = "inicio";

?>

<!DOCTYPE html>
<html lang="es">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="images/cv.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
</head>


<body id="inicio">


    <?php include_once("header.php"); ?>


    <main class="container">
        <div class="row">
            <div class="col-12 mt-5 text-center">
                <img src="images/cohete.svg" class="cohete">
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 mt-5 offset-sm-3 text-center">
                    <p id="pTexto" class="pTexto">
                       ¡Bienvenido a mi sitio web!
                    </p>
                </div>
                <div class="col-12 text-center">
                    <a href="proyectos.php" class="boton"> Mis proyectos!</a>
                </div>
            </div>
        </div>
    </main>


    <?php include_once("footer.php"); ?>


    <script src="css/bootstrap/js/bootstrap.bundle.min.js   "></script>


    <script>
     
        var txt = document.getElementById("pTexto");
        var str = txt.innerHTML;

        txt.innerHTML = "";

        var speed = 50;
        var i = 0;
        
        
        function typeWriter() {
            if(i < str.length) {
                txt.innerHTML += str.charAt(i);
                i++;
                setTimeout(typeWriter, speed);
            }
        }

        setTimeout(typeWriter, speed);

    </script>


</body>


</html>