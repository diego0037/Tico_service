<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name = "viewport" content = "user-scalable=no, width=device-width">
    <link rel="stylesheet" href="material.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
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
        <a class="mdl-navigation__link" href="Principal.html">
                      <img src="images/back-icon.png" alt="home" /></a>
      </nav>
      </div>
      </header>
      <div class="mdl-layout__drawer mdl-layout--small-screen-only">
        <figure><img id="img_nav_short" src="images/logo.png" alt="" /></figure>
        <nav class="mdl-navigation">
          <a class="mdl-navigation__link" href="Principal.html">Pagina Principal</a>
          <a class="mdl-navigation__link" href=""></a>
          <a class="mdl-navigation__link" href=""></a>
          <a class="mdl-navigation__link" href=""></a>
        </nav>
      </div>
<!-- campos login -->
      <main class="mdl-layout__content">

        <div class="mdl-grid">
          <div class="mdl-cell mdl-cell--4-col"></div>
          <div class="mdl-cell mdl-cell--4-col">

          <form class="" action="perfil.html" method="post">
            <div class="mdl-textfield mdl-js-textfield">
              <input class="mdl-textfield__input" type="email" id="correo" required>
              <label class="mdl-textfield__label" for="correo">Correo Electronico</label>
            </div><br>

            <div class="mdl-textfield mdl-js-textfield">
              <input class="mdl-textfield__input" type="password" id="Contrasena" required>
              <label class="mdl-textfield__label" for="Contrasena">Dijite su Contraseña</label>
            </div><br>
            <input class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored"
                                        type="submit" name="submit" value="Entrar">
              <br>
              <div id="link">
                <span>Registarse </span><a href="Registro.html">Aquí</a>
              </div>
            </form>
          </div>
          <div class="mdl-cell mdl-cell--4-col"></div>
      </div>

      </main>

    </div>
  <script src="./material.min.js"></script>
  </body>
</html>
