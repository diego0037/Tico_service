// var session_activa = new Boolean("false");
var usuario = $('#usuario_a').html();
var id_comentado = 0;
var id_actual = 0;
var usuario_actual = '';

$(document).ready(function(){
  obtener_id_comentado();
  if (usuario.includes('@')) {
    id_actual = $('#usuario_id').text();
    // session_activa = true;
    $('#login_img').css('display', 'none');
    $('#usuario_div').css('display', 'block');
    $('#usuario_img').css('display', 'inline-block');
    $('#cerrar_sesion_a').css('display', 'block');
  }else {
    $('#cerrar_sesion_a').css('display', 'none');
    $('#usuario_img').css('display', 'none');
  }
});
$('#cerrar_sesion_a').click(function(){
  location('logout.php');
});

// variable que define si textarea de comentario está activo
var comentario_estado = new Boolean("true");
$('#agregar_comentario').click(function(){
  mostrar_esconder_botones();
  if(comentario_estado){
    document.getElementById('comentario_texto').style.display='block';
    $('#show-dialog').css('display', 'block');
    $("#agregar_comentario").html('-');
    comentario_estado = false;
  }else {
    esconder_textarea();
  }
});

// funcion que esconde textarea al darle click a #agregar_comentario
function esconder_textarea(){
  $('#comentario').val('');
  document.getElementById('comentario_texto').style.display='none';
  $('#show-dialog').css('display', 'none');
  $("#agregar_comentario").html('+');
  comentario_estado = true;
}

  var dialog = document.querySelector('dialog');
  var dialog = document.querySelector('dialog');
  var showDialogButton = document.querySelector('#show-dialog');

  showDialogButton.addEventListener('click', function() {
    dialog.showModal();
  });
  dialog.querySelector('.close').addEventListener('click', function() {
    esconder_textarea();
    dialog.close();
  });
  dialog.querySelector('.agree').addEventListener('click', function() {
    registrar_comentario();
    dialog.close();
  });

  $('#cerrar_dialog').click(function(){
    esconder_textarea();
    dialog.close();
  });

  // funcion que muestra o esconde botones (de acuerdo, cancelar) del dialog si
  // el usuario está logueado o no
  function mostrar_esconder_botones(){
    if(usuario.includes('@')){
      $('#botones_dialog').css('display', 'block');
    }else {
      $('#form_dialog').css('display', 'block');
    }
  }

// método que se encarga de hacer login desde contacto.php
  $('#login_dialog').click(function(){
    var correo = $('#correo_dialog').val();
    var contrasena = $('#contrasena_dialog').val();
    if($.trim(correo).length > 0 && $.trim(contrasena).length > 0){
      $.ajax({
        url:"php/verificar_usuario.php",
        method:"POST",
        data:{correo:correo, contrasena:contrasena},
        cache:"false",
        beforeSend:function() {
          $('#login_dialog').val("Conectando...");
        },
        success:function(data) {
          debugger;
          $('#login_dialog').val("ENTRAR");
          if (data>"0") {
            usuario_actual = correo;
            id_actual = data;
            mostrar_links_header();
            dialog.close();
            alert('login exitoso');
            mostrar_opcion_dialog();
          } else {
            alert('datos incorrectos');
            // $("#resultado").html("<strong>¡Error!</strong> las credenciales son incorrectas");
          }
        }
      });
    };
  });

  // refresca el header, falta cargar la imagen desde acá
  function mostrar_links_header(){
    debugger;
    $('#login_img').css('display', 'none');
    $('#usuario_div').css('display', 'block');
    $('#usuario_a').html(usuario_actual);
    $('#usuario_img').css('display', 'inline-block');
    $('#usuario_img').attr('src', 'images/profile-icon.png');
    $('#cerrar_sesion_a').css('display', 'block');
  }

  // funcion que muestra habilita botones (de acuerdo, cancelar) si se loguea correctamente
  function mostrar_opcion_dialog(){
    $('#form_dialog').css('display', 'none');
    $('#botones_dialog').css('display', 'block');
    dialog.showModal();
  }

  // funcion que se encargade registrar el comentario en la BD
  function registrar_comentario(){
      var comentario = $('#comentario').val();
      if($.trim(comentario).length > 0){
        $.ajax({
          url:"php/registrar_comentario.php",
          method:"POST",
          data:{id_actual: id_actual, id_comentado:id_comentado, comentario: comentario},
          cache:"false",
          beforeSend:function() {
            debugger;
            $('#acuerdo_btn').html("Guardando");
          },
          success:function(data) {
            debugger;
            $('#acuerdo_btn').html("De acuerdo");
            if (data == "1") {
              $('#comentario').val('');
              esconder_textarea();
              alert('comentario exitoso');
              } else {
              alert('error en registro de comentario');
            }
          }
        });
      }else {
        alert('Comentario vacío');
      }
  }

// método que obtiene id del correo que va a ser comentado, es llamado
// al cargar la página
  function obtener_id_comentado(){
    var comentado = $('#contacto_correo').text();
    $.ajax({
      url:"php/obtener_id_comentado.php",
      method:"POST",
      data:{comentado: comentado},
      cache:"false",
      success:function(data) {
        if (data>"0") {
          id_comentado = data;
        } else {
          alert('Error inesperado en su conexion, problemas al cargar datos');
        }
      }
    });
  }

  //funcion que se encarga de cargar comentarios a la vista
  function insertar_comentarios(){
    //retener comentario en memoria, si es exitosa la inserción en la BD entonces
    //setearlo en la vista
  }
