<?php
require_once '../validarsesion.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contacto</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="../stylecontacto.css">
</head>


<body>
    <header>
        <div class="logito" style="padding-top: .2rem;"><img src="../imagenes/solo_logo.png"
                style="width: 16%; vertical-align:text-bottom;">Kaizen
        </div>
        <nav class="barra">
            <ul class="item">
                <li class="itembar"><a href="index.php" class="linkbar">Home</a></li>
                <li class="itembar"><a href="acercadenosotros.php" class="linkbar">Acerca de nosotros</a></li>
                <li class="itembar"><a href="proyectos.php" class="linkbar">Proyectos</a></li>
                <li class="itembar"><a href="contacto.php" class="linkbar">Contactanos</a></li>
                <li class="itembar"><a href="../logout.php" class="linkbar">Bienvenido
                        <?php echo $_SESSION['user']; ?> Cerrar Sesión
                    </a></li>
            </ul>
        </nav>
        <div class="menu-toggle">
            <i class="bx bx-menu"></i>
            <i class="bx bx-x"></i>
        </div>
    </header>
    <main>
        <section class="contact-page-sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="contact-info">
                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <a href="https://maps.app.goo.gl/eXxpRCUwcAH5iDPM9"><i
                                            class="fas fa-map-marked"></i></a>
                                </div>
                                <div class="contact-info-text">
                                    <h2>Dirección</h2>
                                    <span>Centro de Estudios Científicos y Tecnológicos N° 9 "Juan de Dios Bátiz"
                                        IPN</span>
                                    <span>Ciudad de México , México</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-info">
                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <a href="mailto:kaizenJADU@gmail.com"><i class="fas fa-envelope"></i></a>
                                </div>
                                <div class="contact-info-text">
                                    <h2>E-mail</h2>
                                    <span>kaizenJADU@gmail.com</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-info">
                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="contact-info-text">
                                    <h2>office time</h2>
                                    <span>Lunes - Viernes 7 a. m.–9 p. m.</span>
                                    <span>Sabado - Domingo Cerrado</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="contact-page-form" method="post">
                            <h2>Póngase en contacto</h2>
                            <form action="contact-mail.php" method="post">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="single-input-field">
                                            <input type="text" placeholder="Tu nombre" name="name" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="single-input-field">
                                            <input type="email" placeholder="E-mail" name="email" required />
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="single-input-field">
                                            <input type="text" placeholder="Número de teléfono" name="phone" />
                                        </div>
                                    </div>
                                    <div class="col-md-12 message-input">
                                        <div class="single-input-field">
                                            <textarea placeholder="Escribe tu mensaje" name="message"></textarea>
                                        </div>
                                    </div>
                                    <div class="single-input-fieldsbtn">
                                        <input type="submit" value="Enviar ahora" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-page-map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83883.169739158!2d-99.24318351633065!3d19.495665566090953!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f8bd9777a765%3A0x57501a5479751d18!2sCentro%20de%20Estudios%20Cient%C3%ADficos%20y%20Tecnol%C3%B3gicos%20N%C2%B0%209%20%22Juan%20de%20Dios%20B%C3%A1tiz%22%20IPN!5e0!3m2!1ses-419!2smx!4v1698888277284!5m2!1ses-419!2smx"
                                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="top-footer">

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
        <div class="end-footer">
            <div class="copyright">copyright © 2023 - Present • <b>Kaizen</b></div>
        </div>
    </footer>
    <script src="../scriptindex.js"></script>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>
</body>

</html>