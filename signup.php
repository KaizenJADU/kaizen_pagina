<!doctype html>
<html lang="en">

<head>
    <title>Registro</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesigninsingup.css">
</head>

<body>
    <?php
    if (!empty($message)):
        ?>
        <p>
            <?= $message ?>
        </p>
    <?php endif; ?>
    <main>
        <!-- Wrapper Area -->
        <div class="wrapper__area" id="wrapper_Area">
            <!-- Forms Area -->
            <div class="forms__area">
                <!-- Sign Up Form -->
                <form action="signup.php" method="post" class="sign-up__form" id="signUpForm">
                    <!-- Form Title -->
                    <h1 class="form__title">¡Regístrate!</h1>
                    <!-- inputs Groups -->
                    <div class="input__group">
                        <label class="field">
                            <input type="text" name="username" placeholder="Nombre de usuario" id="signUpUsername"
                                required autocomplete="off">
                        </label>
                        <span class="input__icon"><i class="bx bx-user"></i></span>
                        <small class="input__error_message" id="usernameError"></small>
                    </div>
                    <div class="input__group">
                        <label class="field">
                            <input type="text" name="email" placeholder="Email@ejemplo.com" id="signUpEmail" required
                                autocomplete="off">
                        </label>
                        <span class="input__icon"><i class="bx bx-at"></i></span>
                        <small class="input__error_message" id="emailError"></small>
                    </div>
                    <div class="input__group">
                        <label class="field">
                            <input type="password" name="password" placeholder="Contraseña$#%&..." id="signUpPassword"
                                required>
                        </label>
                        <span class="input__icon"><i class="bx bx-lock"></i></span>
                        <span class="showHide__Icon"><i class="bx bx-hide"></i></span>
                        <small class="input__error_message" id="passwordError"></small>
                    </div>
                    <div class="input__group confirm__group">
                        <label class="field">
                            <input type="password" name="confirm_password" placeholder="Confirmar Contraseña"
                                id="signUpConfirmPassword" required>
                        </label>
                        <span class="input__icon"><i class="bx bx-lock"></i></span>
                        <span class="showHide__Icon"><i class="bx bx-hide"></i></span>
                        <small class="input__error_message" id="confirmPasswordError"></small>
                        <div id="confirmPasswordErrorMessage" class="error-message"></div>
                    </div>
                    <!-- Sign Up Button -->
                    <input type="submit" class="submit-button" id="signUpSubmitBtn" value="Crear Cuenta"
                        name="registrar">

                    <?php
                    require 'PHP/conexion.php';
                    $message = '';

                    if (isset($_POST['registrar'])) {
                        // Procesar el registro
                        $nombre = trim($_POST['username']);
                        $email = trim($_POST['email']);
                        $contra = trim($_POST['password']);

                        $sql = "INSERT INTO Usuario(nombreUsuario, email, contra) VALUES ('$nombre', '$email', '$contra')";
                        $resul = mysqli_query($conn, $sql);

                        if ($resul) {
                            $message = "Registro exitoso";
                        } else {
                            $message = "Error al registrar: " . mysqli_error($conn);
                        }
                    }
                    ?>
                </form> <!-- End Sign Up Form -->
            </div><!-- End Forms Area -->

            <!-- Aside Area -->
            <div class=" aside__area" id="aside_Area">

                <div class="sign-up__aside-info">
                    <h4>Bienvenido</h4><br><br>
                    <img src="../imagenes/ima3.png" alt="Image">
                    <p>Para mantenerse conectado con nosotros, inicie sesión con su información personal</p>
                    <a href="login.php" style=" text-decoration: none"><button id="aside_signIn_Btn">¡Inicia
                            Sesión!</button></a>
                </div>
            </div>
        </div>
    </main>
    <script>
        // Obtener referencias a los elementos del formulario
        const passwordInput = document.getElementById("signUpPassword");
        const confirmPasswordInput = document.getElementById("signUpConfirmPassword");
        const confirmPasswordError = document.getElementById("confirmPasswordError");

        // Función para validar contraseñas iguales
        function validatePasswords() {
            const password = passwordInput.value;
            const confirmPassword = confirmPasswordInput.value;
            const confirmPasswordErrorMessage = document.getElementById("confirmPasswordErrorMessage");

            if (password !== confirmPassword) {
                confirmPasswordErrorMessage.textContent = "Las contraseñas no coinciden.";
                confirmPasswordErrorMessage.style.color = "red";
                return false;
            } else {
                confirmPasswordErrorMessage.textContent = "";
                return true;
            }
        }

        // Agregar un controlador de eventos al formulario para validar antes de enviar
        const signUpForm = document.getElementById("signUpForm");
        signUpForm.addEventListener("submit", function (e) {
            if (!validatePasswords()) {
                e.preventDefault(); // Evita que el formulario se envíe si las contraseñas no coinciden.
            }
        });
    </script>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>

</body>

</html>