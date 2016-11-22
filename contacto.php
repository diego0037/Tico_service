<?php
session_start();
if (isset($_SESSION["correo"]) && isset($_SESSION['id'])) {
  // header("location: Principal.php");
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name = "viewport" content = "user-scalable=no, width=device-width">
    <link rel="stylesheet" href="material.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/nameUser.css">
    <link rel="stylesheet" href="css/contacto.css">

    <title>Contacto</title>
  </head>
  <body>
    <div class="mdl-layout mdl-js-layout">
          <header class="mdl-layout__header mdl-layout__header--scroll">
            <div class="mdl-layout__header-row">
              <!-- Title -->
              <figure><img id="img_nav_large" src="images/logo.png" alt="" /></figure>
              <!-- Add spacer, to align navigation to the right -->
              <div class="mdl-layout-spacer mdl-layout--large-screen-only"></div>
              <!-- Navigation -->
              <nav class="mdl-navigation">
                <div id="usuario_div">
                  <a href="perfil.php" id="usuario_a"><?php echo $_SESSION['correo'] ?>
                            <img id="usuario_img" src="images/profile-icon.png"/></a>
                  <label id="usuario_id"><?php echo $_SESSION['id'] ?></label>
                </div>

                <a id="login_img" class="mdl-navigation__link" href="Login.php">
                              <img src="images/icono_login.png" alt="login" /></a>
                <a id="cerrar_sesion_a" class="mdl-navigation__link" href="logout.php">Cerrar Sesión</a>
                <a class="mdl-navigation__link" href="Principal.php">
                              <img src="images/back-icon.png" alt="home" /></a>
              </nav>
            </div>
          </header>

          <div class="mdl-layout__drawer mdl-layout--small-screen-only">
            <!-- nombre usuario -->
            <div class="dropdown">
              <button class="dropbtn">Usuario<img src="images/profile-icon.png"
                alt="Usuario" id="usuario_img" /></button>
              <div class="dropdown-content">
                <a href="Perfil.php">Editar Cuenta</a>
                <a href="login.php">Cerrar Cuenta</a>
              </div>
            </div>
            <figure><img id="img_nav_short" src="images/logo.png" alt="" /></figure>
            <nav class="mdl-navigation">
              <a class="mdl-navigation__link" href="Principal.php">Principal</a>
              <a class="mdl-navigation__link" href="Login.php">Login</a>
              <!-- <a class="mdl-navigation__link" href="">Cerrar Sesión</a> -->
            </nav>
          </div>

          <div id="container" class="mdl-grid">
            <div class="mdl-cell mdl-cell--4-col">
                  <figure><img id="img_perfil" src="images/Ingeniero.jpeg" alt=""/></figure>
            </div>

            <div class="mdl-cell mdl-cell--4-col">
                      <!-- Icon List -->
                <style>
                .demo-list-icon {
                  width: 300px;
                }
                </style>

                <ul class="demo-list-icon mdl-list">
                  <li class="mdl-list__item">
                    <span class="mdl-list__item-primary-content">
                    <i class="material-icons mdl-list__item-icon">person</i>
                    Eduardo Villegas
                </span>
                  </li>
                  <li class="mdl-list__item">
                    <span class="mdl-list__item-primary-content">
                    <i class="material-icons mdl-list__item-icon">work</i>
                    Ingeniería del Software
                </span>
                  </li>
                  <li class="mdl-list__item">
                    <span class="mdl-list__item-primary-content">
                    <i class="material-icons mdl-list__item-icon">phone</i>
                    866457693
                  </span>
                  </li>
                  <li class="mdl-list__item">
                    <span class="mdl-list__item-primary-content">
                    <label class="material-icons mdl-list__item-icon">mail</label>
                    <label id="contacto_correo">EduaViSal_7634@gmail.com</label>
                  </span>
                  </li>
                </ul>
            </div>

            <div class="mdl-cell mdl-cell--4-col">
              <table>
                <thead>
                  <tr>
                    <th colspan="2">
                      COMENTARIOS
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <li class="mdl-list__item">
                        <span class="mdl-list__item-primary-content">
                          <i class="material-icons mdl-list__item-icon">person</i>
                          jsalas
                        </span>
                      </li>
                    </td>
                    <td>
                      Excelente servicio!
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <li class="mdl-list__item">
                        <span class="mdl-list__item-primary-content">
                          <i class="material-icons mdl-list__item-icon">person</i>
                          arojas
                        </span>
                      </li>
                    </td>
                    <td>
                      Se desempeñó de buena manera
                    </td>
                  </tr>
                </tbody>
              </table>

              <div id="comentario_texto">
                <form action="#">
                  <div class="mdl-textfield mdl-js-textfield">
                    <textarea class="mdl-textfield__input" type="text" rows= "3"
                        id="comentario" placeholder="Comente acá..."></textarea>
                  </div>
                </form>
              </div>

                <button id="agregar_comentario" class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored">
                <i class="material-icons">add</i>
              </button>
              <button id="show-dialog" type="button" class="mdl-button">Confirmar</button>
              <dialog class="mdl-dialog">
                <button class="mdl-button mdl-js-button mdl-button--primary"
                                      type="button" id="cerrar_dialog">X</button>
                <h4 class="mdl-dialog__title">Comentarios</h4>
                <div class="mdl-dialog__content">
                  <p>
                    Su comentario podrá ser visto por cualquier visitante del sitio. <br>
                    ¿Desea confirmar su aporte?
                  </p>
                </div>
                <div class="mdl-dialog__actions">
                    <form id="form_dialog">
                    <input type="text" id="correo_dialog" class="mdl-textfield__input"
                                        placeholder="Ingrese su correo"><br>
                    <input id="contrasena_dialog" class="mdl-textfield__input"
                                    type="password" placeholder="Contraseña"><br>
                    <input class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored"
                              type="button" id="login_dialog" value="Entrar"><br>
                        <span>Registrarse </span><a href="Registro.php">Aquí</a>
                    </form>
                  <div id="botones_dialog">
                    <button id="acuerdo_btn" type="button" class="mdl-button agree">De acuerdo</button>
                    <button type="button" class="mdl-button close">Cancelar</button>
                  </div>
                </div>
              </dialog>
            </div>
          </div>
</div>


<script src="./material.min.js"></script>
<script src="js/jquery.js"></script>
<script src="js/contacto.js"></script>

</body>
</html>
