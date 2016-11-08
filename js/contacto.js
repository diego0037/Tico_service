var x = new Boolean("true");

function hide_funct(){
  if(x){
    document.getElementById('comentario_texto').style.display='block';
    x = false;
  }else {
    document.getElementById('comentario_texto').style.display='none';
    x = true  ;
  }
}
