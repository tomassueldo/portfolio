<?php

$pg = "proyectos";

?>

<!DOCTYPE html>
<html lang="es">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos</title>
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="images/cv.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
</head>


<body id="proyectos">


    <?php include_once("header.php");?>


    <main class="container">
        <div class="row">
            <div class="col-12 py-5 ">
                <h1>Proyectos</h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <p>Los siguientes son algunos de los proyectos que he realizado:</p>
                </div>
            </div>
            <div class="row bloque">
                <div class="col-12 col-sm-4 pt-3">
                    <div class="row border m-1">
                        <img src="images/abmclientes.png" alt="ABM Clientes" class="img-fluid">

                        <div class="col-12 gradiente">
                            <h2>ABM CLIENTES</h2>
                        </div>

                        <div class="col-12 pt-2">
                            <p>Alta, baja y modificación de un registro de clientes. Realizado en HTML, CSS, PHP, Bootstrap y Json.</p>
                        </div>

                        <div class="col-6 my-5" >
                            <a href="">Ver online</a>
                        </div>

                        <div class="col-6 my-5">
                            <a href="http://github.com">Codigo fuente</a>
                        </div>
                    </div>  
                </div>


                <div class="col-12 col-sm-4 pt-3">
                    <div class="row border m-1">
                        <img src="images/abmventas.png" alt="ABM Ventas" class="img-fluid">

                        <div class="col-12 gradiente">
                            <h2>SISTEMA DE GESTION DE VENTAS</h2>
                        </div>

                        <div class="col-12 pt-2">
                            <p>Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC, Bootstrap, Js, Ajax, jQuery y MySQL de base de datos.</p>
                        </div>

                        <div class="col-6 my-5" >
                            <a href="">Ver online</a>
                        </div>

                        <div class="col-6 my-5">
                            <a href="http://github.com">Codigo fuente</a>
                        </div>
                    </div> 
                </div>
                    
                <div class="col-12 col-sm-4 pt-3">
                    <div class="row border m-1">
                        <img src="images/proyecto-integrador.png" alt="ABM Clientes" class="img-fluid">

                        <div class="col-12 gradiente">
                            <h2>PROYECTO INTEGRADOR</h2>
                        </div>

                        <div class="col-12 pt-2">
                            <p>Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, jQuery, AJAX, HTML, CSS, Mercadopago con panel administrador, gestor de usuarios, módulo de permisos y funcionalidades a fines.</p>
                        </div>

                        <div class="col-6 my-5" >
                            <a href="">Ver online</a>
                        </div>

                        <div class="col-6 my-5">
                            <a href="http://github.com">Codigo fuente</a>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </main>


    <?php include_once("footer.php");?>


    <script src="css/bootstrap/js/bootstrap.bundle.min.js   "></script>


</body>


</html>