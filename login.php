<html lang="en">

<head>
    <title>Inicia Sesion|Kaizen</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="stylelogin.css">
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <!-- Wrapper Area -->
        <div class="wrapper__area" id="wrapper_Area">
            <!-- Forms Area -->
            <div class="forms__area">
                <!-- Login Form -->
                <form action="login.php" method="post" class="login__form" id="loginForm">
                    <!-- Form Title -->
                    <h1 class="form__title">¡Inicia Sesión!</h1>
                    <!-- inputs Groups -->
                    <div class="input__group">
                        <label class="field">
                            <input type="text" name="username" placeholder="Nombre de Usuario" id="loginUsername">
                        </label>
                        <span class="input__icon"><i class="bx bx-user"></i></span>
                        <small class="input__error_message"></small>
                    </div>
                    <div class="input__group">
                        <label class="field">
                            <input type="password" name="password" placeholder="Contraseña" id="loginPassword">
                        </label>
                        <span class="input__icon"><i class="bx bx-lock"></i></span>
                        <span class="showHide__Icon"><i class="bx bx-hide"></i></span>
                        <small class="input__error_message"></small>
                        ¿No tienes cuenta? <a href="signup.php" style="text-decoration: none;">Crea una</a>
                    </div>
                    <!-- Login Button -->
                    <input type="submit" class="submit-button" name="login" id="loginSubmitBtn" value="inicar sesión">

                    <?php
                    require 'PHP/conexion.php';


                    if (isset($_POST['login'])) {
                        // Procesar el inicio de sesión
                        $nombre = trim($_POST['username']);
                        $contra = trim($_POST['password']);

                        $sql = "SELECT nombreUsuario, contra FROM Usuario WHERE nombreUsuario = '$nombre' AND contra = '$contra'";
                        $resulbusc = mysqli_query($conn, $sql);

                        if (!$resulbusc) {
                            $message = "Error en la consulta: " . mysqli_error($conn);
                        } else {
                            if (mysqli_num_rows($resulbusc) > 0) {
                                session_start();
                                $_SESSION['user'] = $nombre;
                                header("Location: PHP/index.php");
                            } else {
                                header("Location: index.html");
                            }
                        }
                    }
                    ?>
                </form> <!-- End Login Form -->
            </div>   
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>
</body>

</html>