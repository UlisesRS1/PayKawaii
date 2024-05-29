<?php
    // Iniciar la sesión
    session_start();

    // Verificar si el usuario está autenticado
    if (!isset($_SESSION['id_usuario'])) {
        header("Location: ../index.php");
        exit();
    }

    // Incluir el archivo de conexión a la base de datos
    include("conexion.php");

    // Obtener el ID del usuario de la sesión
    $id_usuario = $_SESSION['id_usuario'];

    // Preparar y ejecutar la consulta para obtener el nombre de usuario
    $stmt = $conexion->prepare("SELECT usuario FROM usuarios WHERE id_usuario = ?");
    $stmt->bind_param("i", $id_usuario);
    $stmt->execute();
    $stmt->bind_result($nombre_usuario);
    $stmt->fetch();
    $stmt->close();
?>
      <!DOCTYPE html>
      <html lang="en">
      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
        <title>Perfil</title>
        <style>
            .btn1{
                background-color: #a8e9ee;
                height: 50px;
                color:#2B0A07;
            }
            .btn1:hover {
                background-color: #2B0A07;
                color: white;
            }

        </style>
      </head>
      <body>
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <div class="navbar-fixed fid-sm-block d-md-none d-lg-none d-xl-none d-xxl-none">
                      <nav id="navbar-example2" class="navbar px-3 mb-3 d-flex justify-content-center align-items-center">
                          <div class="d-flex col-12 align-items-center justify-content-between flex-column">
                              <div class="d-flex align-items-center">
                                  <a href="pagina_principal.php">
                                      <img src="../svg/PayKawaii.svg" alt="" width="70" height="70">
                                  </a>
                                  <h1 class="navbar-brand text-danger fs-2">PayKawaii</h1>
                              </div>
                              <div class="d-flex ml-auto align-items-center">
                                  <ul class="nav nav-pills">
                                      <li class="nav-item dropdown">
                                          <a class="nav-link fs-4 morado shadow" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                                              <img src="../svg/menu-button-wide-fill.svg" alt="" width="20" height="20">
                                          </a>
                                          <ul class="dropdown-menu">
                                              <li><a class="dropdown-item" href="pagina_principal.php">Inicio</a></li>
                                              <li class="nav-item"><a class="dropdown-item" href="aboutus.php">Nosotros</a></li>
                                              <li><a class="dropdown-item" href="Galery.php">Galería</a></li>
                                              <li><a class="dropdown-item" href="Productos.php">Productos</a></li>
                                              <li><a class="dropdown-item" href="Contacto.php">Contacto</a></li>
                                          </ul>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                      </nav>
                  </div>
                  <div class="d-none d-sm-none d-md-block">
                      <nav id="navbar-example2" class="navbar px-3 mb-3">
                          <div class="d-flex col-12 align-items-center justify-content-between">
                              <div class="d-flex align-items-center">
                                  <a href="pagina_principal.php">
                                      <img src="../svg/PayKawaii.svg" alt="" width="70" height="70">
                                  </a>
                                  <h1 class="navbar-brand text-danger fs-2">PayKawaii</h1>
                              </div>
                              <div class="d-flex ml-auto align-items-center">
                                  <ul class="nav nav-pills">
                                      <li class="nav-item dropdown">
                                          <a class="nav-link fs-4 morado shadow" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                                              <img src="../svg/menu-button-wide-fill.svg" alt="" width="20" height="20">
                                          </a>
                                          <ul class="dropdown-menu">
                                              <li><a class="dropdown-item" href="pagina_principal.php">Inicio</a></li>
                                              <li class="nav-item"><a class="dropdown-item" href="aboutus.php">Nosotros</a></li>
                                              <li><a class="dropdown-item" href="Galery.php">Galería</a></li>
                                              <li><a class="dropdown-item" href="Productos.php">Productos</a></li>
                                              <li><a class="dropdown-item" href="Contacto.php">Contacto</a></li>
                                          </ul>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                      </nav>
                  </div>
                  <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example rounded-2 scrolls" tabindex="0">
                      <!-- Principio -->
                      <div class="container">
                          <div class="row">
                              <div class="col-lg-6 col-md-12 col-sm-12 d-flex flex-column align-items-center">
                                  <form method="post" action="#" class="w-100 d-flex flex-column align-items-center">
                                      <img src="../svg/avatar.svg" class="w-50 mb-3">
                                      <div class="form-group w-75 mb-3">
                                          <label for="usuario">Usuario</label>                         
                                            <h2>
                                            <?php
                                                echo htmlspecialchars($nombre_usuario);
                                            ?>
                                            </h2>
                                      </div>
                                      <button type="button" class="btn btn1 mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#modal">
                                          Cambiar nombre de usuario
                                      </button>
                                      <button type="button" class="btn btn1 mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                            Eliminar Perfil
                                        </button>
                                  </form>
                              </div>
                              <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-center">
                                  <img src="../img/Paykawaii.jpeg" alt="Imagen" class="w-100">
                              </div>
                          </div>
                      </div>
                      <!-- Fin -->
                      <footer class="border col-12 footer align-items-center justify-content-around">
                          <h5 class="text-center"> Contactanos:
                              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                              </svg>
                              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                  <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592z"/>
                                  <path d="M11.13 9.958c-.175-.087-1.033-.51-1.194-.567-.161-.058-.279-.087-.396.087-.116.175-.456.566-.559.683-.104.116-.207.13-.382.044-.175-.087-.74-.274-1.41-.87-.521-.464-.873-1.04-.976-1.214-.1-.175-.011-.27.076-.357.078-.077.174-.2.261-.3.09-.104.117-.174.174-.29.058-.116.029-.217-.014-.31-.043-.087-.396-.958-.543-1.312-.143-.344-.287-.297-.396-.302-.103-.005-.22-.006-.339-.006a.65.65 0 0 0-.468.217 1.986 1.986 0 0 0-.63 1.457c0 .86.625 1.689.714 1.805.087.116 1.229 1.873 2.97 2.626.414.179.737.285.99.367.416.132.793.113 1.091.068.333-.049 1.033-.42 1.18-.826.145-.406.145-.754.101-.826-.043-.072-.161-.116-.335-.202z"/>
                              </svg>
                              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                                </svg>
                          </h5>
                          <p class="text-center">Todo el diseño, el texto, los gráficos y la selección y disposición del Sitio web son propiedad de la Compañía.©</p>
                      </footer>
                  </div>
              </div>
          </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                  <form method="POST" action="actualizar_usuario.php">
                      <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Cambiar Nombre de Usuario</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                          <div class="mb-3">
                              <label for="nuevo_usuario" class="form-label">Nuevo Nombre de Usuario</label>
                              <input type="text" class="form-control" id="nuevo_usuario" name="nuevo_usuario" required>
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn1" data-bs-dismiss="modal">Cancelar</button>
                          <button type="submit" class="btn btn1">Guardar Cambios</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>

    <!-- Modal de eliminar -->
    <!-- Modal para Confirmación de Eliminación -->
            <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <form method="POST" action="eliminar_usuario.php">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteModalLabel">Confirmar Eliminación de Perfil</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>¿Estás seguro de que deseas eliminar tu perfil? Esta acción no se puede deshacer.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn1" data-bs-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn1">Eliminar Perfil</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

   <script src="../js/jquery-3.3.1.slim.min.js"></script>
   <script src="../js/popper.min.js"></script>
   <script src="../js/bootstrap.min.js"></script>
   <script src="../js/bootstrap.bundle.min.js"></script>
   <script src="../js/fontawesome.js"></script>
   <script src="../js/main.js"></script>
   <script src="../js/main2.js"></script>
   <script src="../js/modal.js"></script>
   <script src="../js/validation_login.js"></script>
   <script src="../popper.min.js"></script>


</body>

</html>
