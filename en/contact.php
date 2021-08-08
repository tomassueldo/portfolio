<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="../css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="shortcut icon" href="../images/cv.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
</head>


<body id="contacto">


    <header>
        <nav class="navbar navbar-expand-md">
            <div class="container">
                <button class="navbar-toggler p-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link pe-5" href="home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pe-5" href="about-me.php">About me</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pe-5" href="proyects.php">Proyects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="contact.php">Contact</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <ul class="navbar-nav me-auto mb-2 mb-md-0">
                            <li class="nav-item">
                                <a class="nav-link" href="../contacto.php">ES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">EN</a>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    
    <main class="container">
        <div class="row">
            <div class="col-12 py-5">
                <h1>Contact me</h1>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 d-none d-sm-block">
                    <p>I invite you to contact me by sending a message or by whatsapp.</p>
                    <p>Next I leave the code qr to scan with your cell!</p>
                    <img src="../images/iconos development/png/wsp100.png" alt="" class="img-fluid">
                </div>
                <div class="col-12 col-sm-6">
                    <form action="" method="POST">
                        <div>
                            <input type="text" name="txtNombre" id="txtNombre" class="form-control mb-3"
                                placeholder="Name">
                        </div>
                        <div>
                            <input type="email" name="txtCorreo" id="txtCorreo" class="form-control mb-3"
                                placeholder="Mail">
                        </div>
                        <div>
                            <input type="number" name="txtTelefono" id="txtTelefono" class="form-control mb-3"
                                placeholder="Number/Whatsapp">
                        </div>
                        <div>
                            <textarea name="txtMensaje" id="txtMensaje" cols="30" rows="10" class="form-control"
                                placeholder="Write here your message"></textarea>
                        </div>
                        <div>
                            <button type="submit" name="btnEnviar" id="btnEnviar" class="btn mt-4">SEND</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>


    <footer>
        <div class="container">
            <div class="row p-sm-5 pt-4">
                <div class="col-12 col-sm-4 text-center">
                    Sponsor <a href="https://depcsuite.com/?v=d72a48a8ebd2" target="_blank">
                    <br>
                    DePC Suite</a>
                </div>
                <div class="col-12 col-sm-4 text-center">
                    <a href="https://github.com/tomassueldo" target="_blank" title="Github"><i
                            class="fab fa-github"></i></a>
                    <a href="https://www.linkedin.com/in/tomas-sueldo-/" target="_blank" title="Linkedin"><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-12 col-sm-4 text-center">
                    <a href="mailto:tomassueldo17@gmail.com">tomassueldo17@gmail.com </a>
                </div>
            </div>
        </div>
    </footer>


    <div class="whatsapp">
        <a href="https://api.whatsapp.com/send?phone=541133433174" " target=" _blank"><i
                class="fab fa-whatsapp"></i></a>
    </div>


    <script src="../css/bootstrap/js/bootstrap.bundle.min.js   "></script>


</body>
</html>