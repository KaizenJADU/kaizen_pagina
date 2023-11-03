<?php
require_once '../validarsesion.php';
?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../styleheaderfooter.css">
    <link rel="stylesheet" href="../styleproyectos.css">

</head>

<body>
    <header>
        <div class="company-logo"><img src="../imagenes/solo_logo.png"
                style="width: 16%; vertical-align:text-bottom;">Kaizen
        </div>
        <nav class="navbar">
            <ul class="nav-items">
                <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="acercadenosotros.php" class="nav-link">Acerca de nosotros</a></li>
                <li class="nav-item"><a href="proyectos.php" class="nav-link">Proyectos</a></li>
                <li class="nav-item"><a href="contacto.php" class="nav-link">Contactanos</a></li>
                <li class="nav-item"><a href="../logout.php" class="nav-link">Bienvenido
                        <?php echo $_SESSION['user']; ?> Cerrar Sesión
                    </a></li>


                </a>
            </ul>
        </nav>
        <div class="menu-toggle">
            <i class="bx bx-menu"></i>
            <i class="bx bx-x"></i>
        </div>
    </header>
    <div class="body">
        <main class="main flow">
            <h1 class="main__heading">Nuestros Proyectos</h1>
            <div class="main__cards cards">
                <div class="cards__inner">
                    <div class="cards__card card">
                        <h2 class="card__heading">Green Soft</h2>
                        <p class="card__price"></p>
                        <ul role="list" class="card__bullets flow">

                            <p style="text-align: justify;">Green-Soft es más que un proyecto, es una plataforma web
                                innovadora con un propósito
                                noble. Nuestra página facilita el registro de centros de recolección de reciclaje,
                                conectándolos con usuarios dispuestos a hacer donaciones. </p>
                            <div style="text-align: center;"><img src="../imagenes/logo gs3.png"
                                    style="width: 50%; margin: 2rem;">
                            </div>
                        </ul>
                        <a href="#basic" class="card__cta cta">Visitar</a>
                    </div>


                    <div class="cards__card card">
                        <h2 class="card__heading">Bit-Cube</h2>
                        <p class="card__price"></p>
                        <ul role="list" class="card__bullets flow">
                            <p>Bit-Cube es un proyecto revolucionario en desarrollo, que tiene como objetivo marcar la
                                diferencia en la vida de los niños con autismo de Asperger. Nuestra plataforma, que
                                incluye tanto una página web como una aplicación móvil, está diseñada para ser una
                                herramienta valiosa en el desarrollo de habilidades sociales esenciales. </p>
                            <div style="text-align: center;"><img src="../imagenes/logo_bitcube.png"
                                    style="width: 70%; margin: 2rem;">
                            </div>
                        </ul>
                        <a href="#pro" class="card__cta cta">Visitar</a>
                    </div>

                    <div class="cards__card card">
                        <h2 class="card__heading">Proximamente...</h2>
                        <p class="card__price"></p>
                        <ul role="list" class="card__bullets flow">
                        </ul>
                        <a href="#ultimate" class="card__cta cta"></a>
                    </div>
                </div>

                <div class="overlay cards__inner"></div>
            </div>

        </main>
    </div>
    <footer>
        <div class="container top-footer">

            <!-- footer item 1 -->
            <div class="footer-item">
                <h2 class="footer-title">Empresa</h2>
                <div class="footer-items">
                    <h3><a href="index.php">Home</a></h3>
                    <h3><a href="acercadenosotros.php">Acerca de nosotros</a></h3>
                    <h3><a href="proyectos.php">Proyectos</a></h3>
                    <h3><a href="contacto.php">Contactanos</a></h3>
                </div>
            </div>
            <!-- footer item 3 -->
            <div class="footer-item">
                <h2 class="footer-title">Contáctanos</h2>
                <div class="footer-items">

                    <h3><i class='bx bxs-phone' style="padding-right: .5rem;"></i><a href="tel:+525510479207">+52
                            5510479207</a></h3>
                    <br>
                    <h3><i class='bx bx-map' style="padding-right: .5rem;"></i><a
                            href="https://maps.app.goo.gl/eXxpRCUwcAH5iDPM9">Centro Estudios
                            Científicos y Tecnológicos<br>"Juan de Dios Bátiz"</a>

                    </h3><br>
                    <h3><i class='bx bxs-envelope' style="padding-right: .5rem;"></i><a
                            href="mailto:kaizenJADU@gmail.com">kaizenJADU@gmail.com</a>
                    </h3>

                </div>
            </div>
            <!-- footer item 4 -->
            <div class="footer-item">
                <h2 class="footer-title">Redes sociales</h2>
                <div class="footer-items">
                    <h1><i class='bx bxl-instagram-alt' style="padding: 1rem;"></i><i class='bx bxl-twitter'
                            style="padding: 1rem;"></i><i class='bx bxl-github' style="padding: 1rem;"></i><i
                            class='bx bxl-facebook-circle' style="padding: 1rem;"></i>
                    </h1>

                </div>
            </div>
        </div>
        <div class="container end-footer">
            <div class="copyright">copyright © 2023 - Present • <b>Kaizen</b></div>
        </div>
    </footer>
    <script src="../scriptindex.js"></script>
    <script src="../script1.js"></script>
</body>

</html>