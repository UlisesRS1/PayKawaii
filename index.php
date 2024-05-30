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
   <img class="wave" src="img/wave_1.png">
   <div class="container">
      <div class="img">
         
      </div>
      <div class="login-content">
         <!-- Manejar la informacion que se manda de este formulario -->
         <form method="post" action="php/login_b.php">
            <img src="svg/avatar.svg">
            <h2 class="title">BIENVENIDO</h2>
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

            <input name="btningresar" class="btn" type="submit" value="INICIAR SESION">

            <div class="text-center">
            <hr class="divider">
            <p>¿No estas registrado?</p>
            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#registerModal">
               <p class="font-italic isai5 mt-1">Registrarse</p>
            </button>
            </div>

         </form>
      </div>
   </div>

<<<<<<< Updated upstream
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
=======
                        </ul>
                      </li>
                    </ul>
                    </div>
                    </div>
                  </nav>
                  </div>
                  <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example rounded-2 scrolls" tabindex="0">


                    <h4 id="scrollspyHeading1"></h4>
                    <!-- Carrusel -->
                    <div id="carouselExampleCaptions" class="carousel slide d-none d-sm-none d-md-block d-lg-block mt-5">
                        <div class="carousel-indicators">
                          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="img/Pay1.jpg" class="d-block w-100" alt="..." width="" height="500">
                            <div class="carousel-caption d-none d-md-block">
                              <h5 class="" style="color:#bce6e9; background-color: rgb(62, 19, 102); border-radius: 2rem;">Prueba nuestros deliciosos pays de queso!!</h5>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <img src="img/rebanada2.jpg" class="d-block w-100" alt="..." width="" height="500">
                            <div class="carousel-caption d-none d-md-block">
                              <h5 class="fs-3" style="color:#bce6e9; background-color: rgb(62, 19, 102); border-radius: 2rem;">Cada rebanada esta cuidadosamente elaborada</h5>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <img src="img/Rebanada.jpg" class="d-block w-100" alt="..." width="" height="500">
                            <div class="carousel-caption d-none d-md-block">
                              <h5 class="" style="color:#bce6e9; background-color: rgb(62, 19, 102); border-radius: 2rem;">Los pays son vida!!</h5><br>
                            </div>
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div><br>


                    <h4 id="scrollspyHeading2" class="fs-1">Te sugerimos</h4>
                <div class="container">
                    <div class="row">
                        <div class="card container col-lg-3 col-md-6 col-sm-12 justify-content-between p-0" style="width: 22rem;">
                            <img src="img/PAY FRESA.png" class="card-img-top" alt="..." height="47%">
                            <div class="card-body">
                              <h5 class="card-title">Gracias por visitarnos!!</h5>
                              <p class="card-text">Agradecemos tu visita a nuestra pagina web, cada usuario es como un nuevo miembro de esta familia amante de los buenos pays.</p>                              
                            </div>
                        </div>
                        <div class="card container col-lg-3 col-md-6 col-sm-12 justify-content-between p-0" style="width: 22rem;">
                            <img src="img/pay-de-limon.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Pays completos</h5>
                              <p class="card-text">Al comprar por mayoreo recibes mejores precios!!, ¿Que esperas para ahorrar?.</p>                             
                            </div>
                        </div>
                        <div class="card container col-lg-3 col-md-6 col-sm-12 justify-content-between p-0" style="width: 22rem;">
                            <img src="img/flan.jpg" class="card-img-top" alt="..." height="47%">
                            <div class="card-body">
                              <h5 class="card-title">Comentarios</h5>
                              <p class="card-text">Escribenos un comentario para saber tu opinion hacerca de nuestros pays, intentamos mejorar dia con dia</p>
                              <button type="button" class="btn btn1 btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModa2">
                                Escribir comentario
                            </button>
                            
                            <!-- Modal2 -->
                            <div class="modal fade" id="exampleModa2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Escribenos un comentario</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                      <form class="was-validated">
                                        <div class="mb-3">
                                          <label for="validationTextarea" class="form-label">Comentario :)</label>
                                          <textarea class="form-control" id="validationTextarea" placeholder="Critica constructiva..." required></textarea>
                                          <div class="invalid-feedback">
                                            No haz escrito nada :(
                                          </div>
                                        </div>
                                      
                                        <div class="form-check mb-3">
                                          <input type="checkbox" class="form-check-input" id="validationFormCheck1" required>
                                          <label class="form-check-label" for="validationFormCheck1">Aceptas que utilicemos tu comentario para mejorar nuestros productos</label>
                                          <div class="invalid-feedback">Acepta para poder enviar</div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Enviar</button>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div><br>
                                     
                    <h4 id="scrollspyHeading5"></h4>
                    <footer class="border col-12 footer align-items-center justify-content-around">
                        <h5 class="text-center"> Contactanos:       
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                              </svg>
                              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                              </svg>
                              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                              </svg>
                        </h5>
                        <p class="text-center">Todo el diseño, el texto, los gráficos y la selección y disposición del Sitio web son propiedad de la Compañía.©</p>
                    </footer>

                  </div>
            </>
>>>>>>> Stashed changes
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
    <button type="submit" class="btn">Registrarse</button>
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

