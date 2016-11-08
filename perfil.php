<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name = "viewport" content = "user-scalable=no, width=device-width">
    <link rel="stylesheet" href="material.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/perfil.css">
    <link rel="stylesheet" href="css/nameUser.css">
   <script src="https://cdn.rawgit.com/CreativeIT/getmdl-select/master/getmdl-select.min.js"></script>

   <title>Perfil</title>
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
            <a class="mdl-navigation__link" href="Principal.html">
            Pagina de inicio</a>
            <a class="mdl-navigation__link" href="Login.html">Cerrar Sesion</a>
          </nav>
          </div>
          </header>
          <div class="mdl-layout__drawer mdl-layout--small-screen-only">
            <!-- nombre usuario -->
            <div class="dropdown">
              <button class="dropbtn">Usuario<img src="images/profile-icon.png"
                alt="Usuario" id="user_regis" /></button>
              <div class="dropdown-content">
                <a href="Perfil.html">Editar Cuenta</a>
                <a href="Login.html">Cerrar Cuenta</a>
              </div>
            </div>
            <figure><img id="img_nav_short" src="images/logo.png" alt="" /></figure>
            <nav class="mdl-navigation">
              <a class="mdl-navigation__link" href="Principal.html">Pagina Principal</a>
              <a class="mdl-navigation__link" href="Login.html">Cerrar Secion</a>
              <a class="mdl-navigation__link" href=""></a>
              <a class="mdl-navigation__link" href=""></a>
            </nav>
          </div>

  <main class="mdl-layout__content">
    <form class="" action="perfil.html" method="post">

      <div class="mdl-grid">
      <div class="mdl-cell mdl-cell--4-col">
        <!-- montar imagen -->
        <div class="image-upload">
          <label for="file-input">
        <img id="blah" alt="your image" src="images/Ingeniero.jpeg" />
          </label>
          <input id="file-input" type="file"
              onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
        </div>
      </div>
<div class="mdl-cell mdl-cell--4-col">

        <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type="text" id="nombre"
          value="Eduardo" disabled>
        </div><br>

        <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type="text" id="apellidos"
          value="Villegas Salasar" disabled >
        </div><br>

        <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type="number" id="telefono"
           value="866457693" required>
          <label class="mdl-textfield__label" for="telefono">Número telefónico</label>
        </div><br>

        <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type="email" id="correo"
           value="EduaViSal_7634@gmail.com" required>
          <label class="mdl-textfield__label" for="correo">Correo electrónico</label>
        </div><br>

        <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type="password" id="contrasena"
          minlength="8" value="12345678" required>
          <label class="mdl-textfield__label" for="contrasena">Digite contraseña</label>
        </div><br>

        <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type="password" id="contrasenaVerif"
          value="123456789"required>
          <label class="mdl-textfield__label" for="contrasenaVerif">Digite contraseña nuevamente</label>
        </div><br>

        <input class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored"
                                    type="submit" name="submit" value="Actualizar">
        <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-1">
          <input type="checkbox" id="switch-1" class="mdl-switch__input">
          <span class="mdl-switch__label">Añadir/Editar/Eliminar servicio</span>
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
          <li class="mdl-menu__item">Ingeniero del Software</li>
          <li class="mdl-menu__item">Ingeniero en Redes</li>
      </ul>
  </div>
  <!-- Mini FAB button -->
  <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored">
    <i class="material-icons">add</i>
  </button><br>


  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fullwidth">
      <input class="mdl-textfield__input" type="text" id="sample2" value="Ingeniero del Software" readonly tabIndex="2">
      <label for="sample2" class="mdl-textfield__label">Tus Servicios</label>
      <ul for="sample2" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
          <li class="mdl-menu__item">Ingeniero del Software</li>
          <li class="mdl-menu__item">Ingeniero en Redes</li>
      </ul>
  </div>

  <!-- Mini FAB button -->
  <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored">
    <i class="material-icons">remove</i>
  </button><br>

  <div class="mdl-textfield mdl-js-textfield">
    <textarea class="mdl-textfield__input" type="text" rows= "3" id="Descrip" >
    </textarea>
    <label class="mdl-textfield__label" for="Descrip">Descripcion...</label>
  </div><br>

  <div class="mdl-textfield mdl-js-textfield">
    <textarea class="mdl-textfield__input" type="text" rows= "3" id="Disp">
    Lunes de 12md a 5pm, Jueves 7am a 12md, sabado de 8am a 6pm</textarea>
    <label class="mdl-textfield__label" for="Disp">Disponibilidad...</label>
  </div><br>





</form>



      </div>

      </div>
  </form>






  </main>
</div>
  <script src="./material.min.js"></script>
  <script src="js/registro.js"></script>
  </body>
</html>
