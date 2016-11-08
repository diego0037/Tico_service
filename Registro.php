<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name = "viewport" content = "user-scalable=no, width=device-width">
    <link rel="stylesheet" href="material.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/registro.css">
   <script src="https://cdn.rawgit.com/CreativeIT/getmdl-select/master/getmdl-select.min.js"></script>

   <title>Registro</title>
  </head>
  <body >
    <div class="mdl-layout mdl-js-layout">

          <header class="mdl-layout__header mdl-layout__header--scroll">
          <div class="mdl-layout__header-row">
          <!-- Title -->
          <figure><img id="img_nav_large" src="images/logo.png" alt="" /></figure>
          <!-- Add spacer, to align navigation to the right -->
          <div class="mdl-layout-spacer mdl-layout--large-screen-only"></div>
          <!-- Navigation -->
          <nav class="mdl-navigation">
            <a class="mdl-navigation__link" href="login.html">
                          <img src="images/back-icon.png" alt="home" /></a>
          </nav>
          </div>
          </header>
          <div class="mdl-layout__drawer mdl-layout--small-screen-only">
            <figure><img id="img_nav_short" src="images/logo.png" alt="" /></figure>
            <nav class="mdl-navigation">
              <a class="mdl-navigation__link" href="Principal.html">Pagina Principal</a>
              <a class="mdl-navigation__link" href="Login.html">Login</a>
              <a class="mdl-navigation__link" href=""></a>
              <a class="mdl-navigation__link" href=""></a>
            </nav>
          </div>

  <main class="mdl-layout__content">
    <form class="" action="php/guardar_usuario.php" method="post" >

      <div class="mdl-grid">
      <div class="mdl-cell mdl-cell--4-col">
<!-- montar imagen -->
          <div class="image-upload">
            <label for="file-input">
          <img id="blahR" alt="your image" src="images/profile-icon.png" />
            </label>
            <input id="file-input" type="file"
                onchange="document.getElementById('blahR').src = window.URL.createObjectURL(this.files[0])">
          </div>
      </div>
<div class="mdl-cell mdl-cell--4-col">

        <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type="text" name="nombre" required>
          <label class="mdl-textfield__label" for="nombre">Ingrese su nombre</label>
        </div><br>

        <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type="text" name="apellidos" required>
          <label class="mdl-textfield__label" for="apellidos">Ingrese sus apellidos</label>
        </div><br>

        <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type="number" name="telefono" required>
          <label class="mdl-textfield__label" for="telefono">Número telefónico</label>
        </div><br>

        <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type="email" name="correo" required>
          <label class="mdl-textfield__label" for="correo">Correo electrónico</label>
        </div><br>

        <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type="password" name="contrasena"
          minlength="8" required>
          <label class="mdl-textfield__label" for="contrasena">Digite contraseña</label>
        </div><br>

        <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type="password" name="contrasenaVerif" required>
          <label class="mdl-textfield__label" for="contrasenaVerif">Digite contraseña nuevamente</label>
        </div><br>

        <input class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored"
                                    type="submit" name="submit" value="Guardar">
        <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-1">
          <input type="checkbox" id="switch-1" class="mdl-switch__input">
          <span class="mdl-switch__label">Añadir servicio</span>
        </label>
      </div>
    <!-- mostrar/esconder form -->
      <div class="mdl-cell mdl-cell--4-col" id="form-servicio">
<form class="" action="index.html" method="post">
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fullwidth">
      <input class="mdl-textfield__input" type="text" id="sample1" value="" readonly tabIndex="2">
      <label for="sample1" class="mdl-textfield__label">Servicios...</label>
      <ul for="sample1" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
          <li class="mdl-menu__item">Abogado</li>
          <li class="mdl-menu__item">Bailarin</li>
          <li class="mdl-menu__item">Cocinero</li>
          <li class="mdl-menu__item">Dentista</li>
          <li class="mdl-menu__item">Electricista</li>
      </ul>
  </div>
  <!-- Mini FAB button -->
  <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored">
    <i class="material-icons">add</i>
  </button><br>

  <div class="mdl-textfield mdl-js-textfield">
    <textarea class="mdl-textfield__input" type="text" rows= "3" id="Ser_A" disabled></textarea>
    <label class="mdl-textfield__label" for="Ser_A">Tus Servicios</label>
  </div><br>

  <div class="mdl-textfield mdl-js-textfield">
    <textarea class="mdl-textfield__input" type="text" rows= "3" id="Descrip" ></textarea>
    <label class="mdl-textfield__label" for="Descrip">Descripcion...</label>
  </div><br>

  <div class="mdl-textfield mdl-js-textfield">
    <textarea class="mdl-textfield__input" type="text" rows= "3" id="Disp" ></textarea>
    <label class="mdl-textfield__label" for="Disp">Disponibilidad...</label>
  </div><br>





</form>
<?php
// if($_POST)
//  {
//     echo "Datos Guardados";
//    include("guardar_usuario");
//    echo "Datos Guardados";
//  }
//  echo "error";
  ?>


      </div>

      </div>
  </form>






  </main>
</div>
  <script src="./material.min.js"></script>
  <script src="js/registro.js"></script>
  </body>
</html>
