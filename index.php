<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="css/style_login.css">
   <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
   <title>Inicio de sesión</title>
</head>


<body>
<div class="container card scrolls flex-column justify-content-center align-items-center" style="background-color: #fbe9d7; ">
        <div class="login-content flex-column justify-content-center align-items-center">
            <img src="svg/avatar.svg" alt="Avatar">
            <h2 class="title">BIENVENIDO</h2>
            <form method="post" class="d-flex flex-column " action="php/login_b.php">
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Usuario</h5>
                        <input id="usuario" type="text" class="input" name="usuario">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Contraseña</h5>
                        <input type="password" id="input" class="input" name="password">
                    </div>
                </div>
                <div class="view">
                    <div class="fas fa-eye verPassword" onclick="vista()" id="verPassword"></div>
                </div>
                <input name="btningresar" class="btn btn1" style="background-color: #a8e9ee; height: 50px; color:#2B0A07;" type="submit" value="INICIAR SESION">
            </form>
            <hr class="divider">
            <p>¿No estás registrado?</p>
            <button type="button" class="btn" style="background-color: #a8e9ee; height: 50px; width: 65%; color:#2B0A07;" data-bs-toggle="modal" data-bs-target="#registerModal">
                <p class="font-italic isai5 mt-1">Registrarse</p>
            </button>
        </div>
        <div class="carta" style="width: 23rem;">
            
                <img src="../img/Paykawaii.jpeg" class="card-img-top" alt="...">

            </div>
    </div>
    
<!-- Modal de Error -->
<div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="errorModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title w-100 text-center" id="errorModalLabel">Error de Autenticación</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="errorMessage">
                    <!-- Mensaje de error -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>



   <!-- Modal register -->
   <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title w-100 text-center">Registro</h5>
            </div>
            <div class="modal-body w-100">
               <!-- Manejar la informacion que se manda de este formulario -->
               <form class="w-100 needs-validation" method="post" action="php/register.php" novalidate>
    <div class="form-group">
        <label for="register-username" class="mb-2">Usuario</label>
        <input type="text" class="form-control w-100" id="register-username" placeholder="Usuario" name="usuario" required>
        <div class="invalid-feedback">Por favor, ingrese su nombre de usuario.</div>
    </div>
    <div class="form-group mt-3">
        <label for="register-password" class="mb-2">Contraseña</label>
        <input type="password" class="form-control" id="register-password" placeholder="Contraseña" name ="password" required>
        <div class="invalid-feedback">Por favor, ingrese una contraseña.</div>
    </div>
    <button type="submit" class="btn" style="background-color: #a8e9ee; height: 50px; color:#2B0A07;">Registrarse</button>
</form>
            </div>
         </div>
      </div>
   </div>
   <script src="js/jquery-3.3.1.slim.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/fontawesome.js"></script>
   <script src="js/main.js"></script>
   <script src="js/main2.js"></script>
   <script src="js/modal.js"></script>
   <script src="js/validation_login.js"></script>

   <!-- Mostar el modal en caso de error -->
   <script>
         $(document).ready(function() {
         // Mostrar el modal con el mensaje si hay uno
         var urlParams = new URLSearchParams(window.location.search);
         if (urlParams.has('message')) {
            var message = urlParams.get('message');
            $('#errorMessage').text(message);
            var errorModal = new bootstrap.Modal(document.getElementById('errorModal'));
            errorModal.show();

            // Eliminar el parámetro 'message' de la URL después de mostrar el modal
            var newUrl = window.location.protocol + "//" + window.location.host + window.location.pathname;
            history.replaceState({}, document.title, newUrl);
         }
      });
    </script>

</body>

</html>

