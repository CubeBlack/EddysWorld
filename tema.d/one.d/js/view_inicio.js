slQt = 9;
slAtual = 0;
sls = [];
//------
function sl_ocutar(){

  for (var i = 0; i < sls.length; i++) {
    //sls[i].style.display = "none";
    sls[i].setAttribute("class", "sl_parte");
  }
}
function sl_load(){
  for (var i = 0; i < slQt; i++) {
    sls[i] = document.getElementById('sl'+i);
  }
}
function sl_show(iten){
  sl_ocutar();
  console.log(iten);
  //sls[iten].style.display = "block";
  sls[iten].setAttribute("class", "sl_part sl_parte_ativo");
}
function sl_proximo(){
  ++slAtual;
  if (slAtual >= slQt) slAtual = 0;
  sl_show(slAtual);
}
function sl_anterior(){
  --slAtual;
  if (slAtual < 0) slAtual = slQt;
  sl_show(slAtual);
}
sl_load();
sl_ocutar();
sl_show(slAtual);
//-------
console.log("view_inicio.js");
