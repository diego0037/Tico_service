<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name = "viewport" content = "user-scalable=no, width=device-width">
    <link rel="stylesheet" href="material.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- <link rel="stylesheet" href="css/registro.css"> -->
    <link rel="stylesheet" href="css/manteni.css">
   <script src="https://cdn.rawgit.com/CreativeIT/getmdl-select/master/getmdl-select.min.js"></script>

   <title>Pagina en mantenimiento</title>
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
            <a class="mdl-navigation__link" href="login.php">
                          <img src="images/back-icon.png" alt="home" /></a>
          </nav>
          </div>
          </header>
          <div class="mdl-layout__drawer mdl-layout--small-screen-only">
            <figure><img id="img_nav_short" src="images/logo.png" alt="" /></figure>
            <nav class="mdl-navigation">
              <a class="mdl-navigation__link" href="Principal.php">Pagina Principal</a>
              <a class="mdl-navigation__link" href="Login.php">Login</a>
              <a class="mdl-navigation__link" href=""></a>
              <a class="mdl-navigation__link" href=""></a>
            </nav>
          </div>

  <main class="mdl-layout__content">
    <form class="" action="php/guardar_usuario.php" method="post" >

      <div class="mdl-grid">
          <div class="mdl-cell mdl-cell--4-col"></div>
      <div class="mdl-cell mdl-cell--4-col">

          <div class="image-upload">
          <img id="mante" alt="your image" src="images\mantenimiento.jpg" />
          </div>
      </div>
      <div class="mdl-cell mdl-cell--4-col"></div>
  </main>
</div>
  <script src="./material.min.js"></script>
  <!-- <script src="js/registro.js"></script> -->
  </body>
</html>
