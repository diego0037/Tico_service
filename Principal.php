<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name = "viewport" content = "user-scalable=no, width=device-width">
    <link rel="stylesheet" href="material.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="css/styleC.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="css/nameUser.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!-- <link rel="stylesheet" href="css/autocomplete.css" /> -->
    <link rel="stylesheet" href="css/styles.css">
    <script src="autocomplete/auto-complete.js"></script>


    <title>Tico-Service</title>
  </head>

  <body>
    <!-- menu desplegable -->
      <div class="mdl-layout mdl-js-layout">
        <header class="mdl-layout__header mdl-layout__header--scroll">
      <div class="mdl-layout__header-row">
        <!-- Title -->
        <figure><img id="img_nav_large" src="images/logo.png" alt="" /></figure>
        <!-- Add spacer, to align navigation to the right -->
        <div class="mdl-layout-spacer mdl-layout--large-screen-only"></div>
        <!-- Navigation -->
        <nav class="mdl-navigation">
          <a class="mdl-navigation__link" href="Principal.html">Cerrar Sesion<img src="images/profile-icon.png"
            alt="Usuario" id="user_regis" /></a>
          <a class="mdl-navigation__link" href="login.php">
                        <img src="images/icono_login.png" alt="login" /></a>

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
        <a class="mdl-navigation__link" href="Login.php">Login</a>
        <a class="mdl-navigation__link" href="Principal.php">Pagina Principal</a>
        <a class="mdl-navigation__link" href=""></a>
        <a class="mdl-navigation__link" href=""></a>
      </nav>
    </div>
      <main class="mdl-layout__content">
        <!-- Your content goes here -->
          <!-- titulo -->
       <div class="mdl-grid">
         <div class="mdl-cell mdl-cell--1-col graybox"></div>
         <div class="mdl-cell mdl-cell--11-col mdl-cell--4-col-phone">
           <h3 id="h2-enunciado">
             Obtén una base de datos actualizada de los
             servicios más regulares de acuerdo a tu ubicación, con los cuáles
             podrás contactarte, calificar y comentar!
           </h3>
         </div>
       </div>

       <!-- Buscar -->

         <div class="mdl-grid">
           <div class="mdl-cell mdl-cell--4-col graybox"></div>
           <div class="mdl-cell mdl-cell--4-col">
             <!-- <form action="#"> -->
               <div class="mdl-textfield mdl-js-textfield" id="mover_busqueda">
                 <input id="keyword" class="awesomplete mdl-textfield__input"  list="datalist">
                 <label class="mdl-textfield__label" for="sample1">Profesion
                   a buscar...</label>
                   <div id="results">
                   </div>
                 </div>
               <!-- <div class="mdl-textfield mdl-js-textfield" id="mover_busqueda">
                 <input autofocus class="awesomplete mdl-textfield__input "
                 data-list="Abogado/a,Actriz,Administrador/a,
                 Agente de seguros,Agente de viajes,Agronomo,Analista de mercados,
                 Animador/a,Arquitecto/a,Botanico/a,Biologo/a,
                 Bibliotecario/a,Cantante,Contador/a,Cocinero/a,
                 Dentista,Ingeniero del Software">
                 <label class="mdl-textfield__label" for="sample1">Profesion
                   a buscar...</label>
               </div> -->
             <!-- </form> -->
            </div>
            <div class="mdl-cell mdl-cell--4-col">
              <a class="mdl-navigation__link" href="contacto.html">
                            <img src="images/Search-icon.png"
                            alt="Buscar" /></a>
            </div>
         </div>
       <!-- carousel -->
       <div class="carousel">
         <ul id="flexiselDemo3">
             <li><img src="images/arquitecto.jpg" id="imagenes_carousel" />
             <p>Arquitecto(Carlos Ramirez)</p></li>
             <li><img src="images/Doctora.png" id="imagenes_carousel"/>
             <p>Doctora(Fernanda Chavez)</p></li>
             <li><a href="contacto.html"><img src="images/Ingeniero.jpeg" id="imagenes_carousel"/>
             <p>Ingeniero del Software(Eduardo Villegas)</p></a></li>
             <li><img src="images/mecanico.jpg" id="imagenes_carousel"/>
             <p>Mecanico(Luis Rojas)</p></li>
             <li><img src="images/panadera.jpg" id="imagenes_carousel"/>
             <p>Panadera(Maria Acosta)</p></li>
         </ul>
       </div>
      </main>
    </div>

    <!-- <script src="js/auto-complete.js"></script> -->
    <!-- <script src="js/autocomplete.js"></script> -->
    <script type="text/javascript" src="jquery.js"></script>
    <script src="./material.min.js"></script>
    <!-- <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script> -->
    <script type="text/javascript" src="js/jquery.flexisel.js"></script>
    <script type="text/javascript" src="js/moverCarousel.js"></script>
  </body>
</html>
