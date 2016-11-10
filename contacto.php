<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name = "viewport" content = "user-scalable=no, width=device-width">
    <link rel="stylesheet" href="material.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/contacto.css">
    <link rel="stylesheet" href="css/nameUser.css">


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
                  <a class="mdl-navigation__link" href="Principal.php">
                                <img src="images/back-icon.png" alt="home" /></a>
                </nav>
            </div>
          </header>

          <div class="mdl-layout__drawer mdl-layout--small-screen-only">
            <!-- nombre usuario -->
            <div class="dropdown">
              <button class="dropbtn">Usuario<img src="images/profile-icon.png"
                alt="Usuario" id="user_regis" /></button>
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
                    <i class="material-icons mdl-list__item-icon">mail</i>
                    EduaViSal_7634@gmail.com
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
                    <textarea class="mdl-textfield__input" type="text" rows= "3" id="sample5" ></textarea>
                    <label class="mdl-textfield__label" for="sample5">Escriba acá</label>
                  </div>
                </form>
              </div>

                <button id="agregar_comentario" onclick="hide_funct()" class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored">
                <i class="material-icons">add</i>
              </button>
            </div>
          </div>

</div>




<script src="./material.min.js"></script>
<script src="js/contacto.js"></script>

</body>
</html>
