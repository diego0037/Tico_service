$(document).ready(function(){
  var chars = $('#usuario_a').html();
  if (chars.includes('@')) {
    $('#login_img').css('display', 'none');
    $('#usuario_div').css('display', 'block');
    $('#usuario_img').css('display', 'inline-block');
    $('#cerrar_sesion_a').css('display', 'block');

    // $('#usuario_a').css('display', 'block');
    // $('#usuario_img').css({'display', 'block'});
  }else {
    //no presentar cerrar session
    //no presentar a de usuario
    $('#cerrar_sesion_a').css('display', 'none');
    $('#usuario_img').css('display', 'none');
  }

});

$('#cerrar_sesion_a').click(function(){
  location('logout.php');
});
