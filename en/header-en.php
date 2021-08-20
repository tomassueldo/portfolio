<header>
    <nav class="navbar navbar-expand-md">
        <div class="container">
            <button class="navbar-toggler p-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link me-5 <?php echo ($pg == "inicio") ? "active" : "" ?>" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-5 <?php echo ($pg == "sobre-mi") ? "active" : "" ?>" href="about-me.php">About me</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-5 <?php echo ($pg == "proyectos") ? "active" : "" ?>" href="proyects.php">Proyects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($pg == "contacto") ? "active" : "" ?>" href="contact.php">Contact</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $pg == "inicio"? "../index.php" : ($pg == "sobre-mi"? "../sobre-mi.php" : ($pg == "proyectos"? "../proyectos.php" : "../contacto.php")); ?>">ES</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="<?php echo $pg == "inicio"? "home.php" : ($pg == "sobre-mi"? "about-me.php" : ($pg == "proyectos"? "proyects.php" : "contact.php")); ?> ">EN</a>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </nav>
</header>
