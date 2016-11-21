var session_activa = new Boolean("false");
var usuario = $('#usuario_a').html();
var id_comentado = 0;
$(document).ready(function(){
  if (usuario.includes('@')) {
    session_activa = true;
    obtener_id_comentado();
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


var comentario_estado = new Boolean("true");

$('#agregar_comentario').click(function(){
  debugger;
  // obtener_id_comentado();
  mostrar_esconder_botones();
  if(comentario_estado){
    document.getElementById('comentario_texto').style.display='block';
    $('#show-dialog').css('display', 'block');
    $("#agregar_comentario").html('-');
    comentario_estado = false;
  }else {
    $('#comentario').val('');
    document.getElementById('comentario_texto').style.display='none';
    $('#show-dialog').css('display', 'none');
    $("#agregar_comentario").html('+');
    comentario_estado = true;
  }
});

function esconder_textarea(){
  debugger;
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
    dialog.close();
  });
  dialog.querySelector('.agree').addEventListener('click', function() {
    registrar_comentario();
    dialog.close();
  });

  function mostrar_esconder_botones(){
    if(usuario.includes('@')){
      $('#botones_dialog').css('display', 'block');
    }else {
      $('#form_dialog').css('display', 'block');
    }
  }

  $('#cerrar_dialog').click(function(){
    dialog.close();
  });

// método que se encarga de hacer login desde contacto.php
  $('#login_dialog').click(function(){
    debugger;
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

          if (data=="1") {
            alert('login exitoso');
            usuario_actual = correo;
            dialog.close();
            mostrar_opcion_dialog();
          } else {
            alert('datos incorrectos');
            // $("#resultado").html("<strong>¡Error!</strong> las credenciales son incorrectas");
          }
        }
      });
    };
  });

  function mostrar_opcion_dialog(){
    $('#form_dialog').css('display', 'none');
    $('#botones_dialog').css('display', 'block');
    dialog.showModal();
  }


  function registrar_comentario() {
    debugger;
    var id_actual = $('#usuario_id').text();
    var comentario = $('#comentario').val();
    if($.trim(comentario).length > 0){
      $.ajax({
        url:"php/registrar_comentario.php",
        method:"POST",
        data:{id_actual: id_actual, id_comentado:id_comentado, comentario: comentario},
        cache:"false",
        beforeSend:function() {
          // $('#login_dialog').val("Conectando...");
        },
        success:function(data) {
          // $('#login_dialog').val("ENTRAR");
          if (data == "1") {
            debugger;
            $('#comentario').val('');
            esconder_textarea();
            alert('comentario exitoso');
            } else {
            debugger;
            alert('error en registro de comentario');
            // $("#resultado").html("<strong>¡Error!</strong> las credenciales son incorrectas");
          }
        }
      });
    }else {
      alert('Comentario vacío');
    }
  }

// método que obtiene id del correo que va a ser comentado
  function obtener_id_comentado(){
    debugger;
    var comentado = $('#contacto_correo').text();
    $.ajax({
      url:"php/obtener_id_comentado.php",
      method:"POST",
      data:{comentado: comentado},
      cache:"false",
      beforeSend:function() {
        // $('#login_dialog').val("Conectando...");
      },
      success:function(data) {
        // $('#login_dialog').val("ENTRAR");
        if (data>"0") {
          debugger;
          id_comentado = data;
          // dialog.close();
        } else {
          debugger;
          alert('no');
          // $("#resultado").html("<strong>¡Error!</strong> las credenciales son incorrectas");
        }
      }
    });
  }
