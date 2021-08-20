<header>
    <nav class="navbar navbar-expand-md">
        <div class="container">
            <button class="navbar-toggler p-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link me-5 <?php echo ($pg == "inicio") ? "active" : "" ?>" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-5 <?php echo ($pg == "sobre-mi") ? "active" : "" ?>" href="sobre-mi.php">Sobre mi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-5 <?php echo ($pg == "proyectos") ? "active" : "" ?>" href="proyectos.php">Proyectos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($pg == "contacto") ? "active" : "" ?>" href="contacto.php">Contacto</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $pg == "inicio"? "index.php" : ($pg == "sobre-mi"? "sobre-mi.php" : ($pg == "proyectos"? "proyectos.php" : "contacto.php")); ?>">ES</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="<?php echo $pg == "inicio"? "en/home.php" : ($pg == "sobre-mi"? "en/about-me.php" : ($pg == "proyectos"? "en/proyects.php" : "en/contact.php")); ?> ">EN</a>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </nav>
</header>
