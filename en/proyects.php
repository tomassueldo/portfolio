<?php

$pg = "proyectos";

?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyects</title>
    <link rel="stylesheet" href="../css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="shortcut icon" href="../images/cv.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
</head>


<body id="proyectos">

<?php include_once("header-en.php");?>

    <main class="container">
        <div class="row">
            <div class="col-12 py-5 ">
                <h1>Proyects</h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <p>The following are some of the projects I have carried out</p>
                </div>
            </div>
            <div class="row bloque">
                <div class="col-12 col-sm-4 pt-3">
                    <div class="row border m-1">
                        <img src="../images/abmclientes.png" alt="ABM Clientes" class="img-fluid">

                        <div class="col-12 gradiente">
                            <h2>ABM CLIENTS</h2>
                        </div>

                        <div class="col-12 pt-2">
                            <p>Registration, removal and modification of a client register. Made in HTML, CSS, PHP, Bootstrap and Json.</p>
                        </div>

                        <div class="col-6 my-5">
                            <a href="">See online</a>
                        </div>

                        <div class="col-6 my-5">
                            <a href="http://github.com">Source Code</a>
                        </div>
                    </div>
                </div>


                <div class="col-12 col-sm-4 pt-3">
                    <div class="row border m-1">
                        <img src="../images/abmventas.png" alt="ABM Ventas" class="img-fluid">

                        <div class="col-12 gradiente">
                            <h2>SALES MANAGEMENT SYSTEM</h2>
                        </div>

                        <div class="col-12 pt-2">
                            <p>Customer, product and sales management system. Made in HTML, CSS, PHP, MVC, Bootstrap, Js, Ajax, jQuery and MySQL database</p>
                        </div>

                        <div class="col-6 my-5">
                            <a href="">See online</a>
                        </div>

                        <div class="col-6 my-5">
                            <a href="http://github.com">Source Code</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-4 pt-3">
                    <div class="row border m-1">
                        <img src="../images/proyecto-integrador.png" alt="ABM Clientes" class="img-fluid">

                        <div class="col-12 gradiente">
                            <h2>INTEGRATION PROYECTY</h2>
                        </div>

                        <div class="col-12 pt-2">
                            <p>Full Stack project developed in PHP, Laravel, Javascript, jQuery, AJAX, HTML, CSS, Mercadopago with admin panel, user manager, permissions module and functionalities for purposes.</p>
                        </div>

                        <div class="col-6 my-5">
                            <a href="">See online</a>
                        </div>

                        <div class="col-6 my-5">
                            <a href="http://github.com">Source Code</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <?php include_once("../footer.php") ?>


    <script src="../css/bootstrap/js/bootstrap.bundle.min.js   "></script>


</body>
</html>