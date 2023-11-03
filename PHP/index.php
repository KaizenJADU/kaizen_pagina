<?php
require_once '../validarsesion.php';
?>
<!doctype html>
<html lang="en">

<head>
    <title>Kaizen</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../styleheaderfooter.css">
    <link rel="stylesheet" href="../styleindex.css">
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
    <main>
        <!-- HOME SECTION -->
        <section class="container section-1">
            <div class="slogan">
                <h1 class="company-title">KAIZEN</h1>
                <h2 class="company-slogan">
                    ¿Sabes qué hace Kaizen? ¿Conoces quiénes conforman Kaizen? Si la respuesta a una de estas preguntas
                    es NO, esta página es para ti.
                </h2>
            </div>
            <div class="home-computer-container">
                <img class="home-computer" src="../imagenes/back.png" style="width: 90%;"
                    alt="a computer in dark with shadow">
            </div>
        </section>
        <!-- OFFER SECTION -->
        <section class="container section-2">
            <section class="seccion quienes-somos" id="quienesomos">
                <!--* GRUPO QUIENES SOMOS INTRODUCCIÓN -->
                <article class="grupo introduccion">
                    <div class="grupo enlinea">
                        <h3 class="titulo">
                            ¿Quiénes somos?
                            <i class="decoracion"></i>
                        </h3>
                        <blockquote>
                            “Somos la mejora continua”
                            <footer>- <cite>KAIZEN</cite></footer>
                        </blockquote>
                        <p>Kaizen, un equipo formado por cuatro apasionados estudiantes de programación del CECYT 9, que
                            se
                            esfuerzan por marcar la diferencia en el mundo a través de proyectos con un impacto social
                            significativo. Nuestra dedicación a la programación no solo es evidente en nuestras
                            habilidades
                            técnicas, sino también en nuestro compromiso con la mejora constante. Con un espíritu
                            impulsado
                            por el Kaizen, la filosofía japonesa de la mejora continua, buscamos constantemente
                            oportunidades para crecer y superarnos.</p>
                    </div>
                    <div class="grupo enlinea imagen">
                        <img src="../imagenes/equipo_kaizen.jpeg" alt="equipo_kaizen"
                            style="width: 100%; padding-left: .5rem;" class="logo kaizen">
                    </div>
                </article><!--FIN GRUPO QUIENES SOMOS INTRODUCCION-->

                <!--* GRUPO QUIENES SOMOS MISION Y VISION -->
                <article class="grupo mision-vision ">
                    <div class="sub grupo enlinea imagen">
                        <img src="../imagenes/background.jpg" style="width: 100%;" height="100%">
                    </div>
                    <div class="sub grupo mision">
                        <h3 class="titulo">
                            Misión:
                            <i class="decoracion"></i>
                        </h3>
                        <p>Somos una empresa que se enfoca en desarrollar apps móviles y aplicaciones web, siempre
                            teniendo
                            un impacto en la sociedad. Nos dirigimos principalmente al sector de la educación y las
                            disyuntivas sociales. Lograremos esto mediante el esfuerzo y dedicación que le ponemos a
                            cada
                            uno de nuestros programas.
                        </p>
                    </div>
                    <div class="sub grupo vision">
                        <h3 class="titulo">
                            Visión:
                            <i class="decoracion"></i>
                        </h3>
                        <p>Ser una empresa reconocida nacionalmente por elaborar las mejores apps móviles y servicios
                            web
                            con una calidad excepcional, esforzándonos lo mejor posible en nuestro trabajo para que con
                            el
                            tiempo logremos ser una empresa perfectamente establecida en este medio.
                        </p>
                    </div>
                </article><!--FIN GRUPO QUIENES SOMOS MISION Y VISIÓN-->
            </section>
        </section>

    </main>
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
</body>

</html>