<?php
    // Iniciar la sesión
    session_start();

    // Verificar si el usuario está autenticado
    if (!isset($_SESSION['id_usuario'])) {
        header("Location: login.php");
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
                              <div class="col-md-6 d-flex flex-column align-items-center">
                                  <form method="post" action="#" class="w-100 d-flex flex-column align-items-center">
                                      <img src="../svg/avatar.svg" class="w-25 mb-3">
                                      <div class="form-group w-75 mb-3">
                                          <label for="usuario">Usuario</label>                         
                                            <h2>
                                            <?php
                                                echo htmlspecialchars($nombre_usuario);
                                            ?>
                                            </h2>
                                      </div>
                                      <button type="button" class="btn btn-primary btn1 mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#modal">
                                          Cambiar nombre de usuario
                                      </button>
                                  </form>
                              </div>
                              <div class="col-md-6 d-flex justify-content-center">
                                  <img src="../img/Paykawaii.jpeg" alt="Imagen" class="w-75">
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
                          </h5>
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
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                          <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>



   <script src="../js/jquery-3.3.1.slim.min.js"></script>
   <script src="../js/popper.min.js"></script>
   <script src="../js/bootstrap.min.js"></script>
   <script src="../js/fontawesome.js"></script>
   <script src="../js/main.js"></script>
   <script src="../js/main2.js"></script>
   <script src="../js/modal.js"></script>
   <script src="../js/validation_login.js"></script>

</body>

</html>
