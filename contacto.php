<?php

$pg = "contacto";

?>



<!DOCTYPE html>
<html lang="es">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="images/cv.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
</head>


<body id="contacto">
<?php include_once("header.php");?>
    <main class="container">
        <div class="row">
            <div class="col-12 py-5">
                <h1>Contacto</h1>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 d-none d-sm-block">
                    <p>Te invito a que te contactes enviandome un mensaje o bien por whatsapp.</p>
                    <p>A continuacion dejo el codigo qr para que escanees con tu celu!</p>
                    <img src="images/iconos development/png/wsp100.png" alt="" class="img-fluid">
                </div>
                <div class="col-12 col-sm-6">
                    <form action="" method="POST">
                        <div>
                            <input type="text" name="txtNombre" id="txtNombre" class="form-control mb-3"
                                placeholder="Nombre">
                        </div>
                        <div>
                            <input type="email" name="txtCorreo" id="txtCorreo" class="form-control mb-3"
                                placeholder="Correo">
                        </div>
                        <div>
                            <input type="number" name="txtTelefono" id="txtTelefono" class="form-control mb-3"
                                placeholder="Telefono/Whatsapp">
                        </div>
                        <div>
                            <textarea name="txtMensaje" id="txtMensaje" cols="30" rows="10" class="form-control"
                                placeholder="Escribe aqui tu mensaje"></textarea>
                        </div>
                        <div>
                            <button type="submit" name="btnEnviar" id="btnEnviar" class="btn mt-4">ENVIAR</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <?php include_once("footer.php");?>

    <div class="whatsapp">
        <a href="https://api.whatsapp.com/send?phone=541133433174" " target=" _blank"><i
                class="fab fa-whatsapp"></i></a>
    </div>

    <script src="css/bootstrap/js/bootstrap.bundle.min.js   "></script>


</body>


</html>