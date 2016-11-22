$(document).ready(function() {
  $('#submit').click(function(){
    var correo = $('#correo').val();
    var contrasena = $('#contrasena').val();
    if($.trim(correo).length > 0 && $.trim(contrasena).length > 0){
      $.ajax({
        url:"php/verificar_usuario.php",
        method:"POST",
        data:{correo:correo, contrasena:contrasena},
        cache:"false",
        beforeSend:function() {
          $('#submit').val("Conectando...");
        },
        success:function(data) {
          debugger;
          $('#submit').val("ENTRAR");

          if (data>0) {
            $(location).attr('href','Principal.php');
          } else {
            $("#resultado").html("<strong>¡Error!</strong> las credenciales son incorrectas");
          }
        }
      });
    };
  });
});
