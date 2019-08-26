server = "http://" + window.location.host + "/";
//------------ Link ---------------
function link(url) {
  window.location.href = url;
}
//------------ MSGbox ------------
var MSGbox = new Object();
MSGbox.eleFundo = document.getElementById('msgbox_fundo');
MSGbox.eleConteudo = document.getElementById('msgbox_conteudo');
MSGbox.show = function (conteudo){
  this.eleFundo.style.display = "block";
  this.eleConteudo.innerHTML = conteudo;
}
MSGbox.close = function(){
  this.eleFundo.style.display = "none";
}
//--------------- Menu ---------------
function menuOpen(item){
  //pegar o li, e nÃ£o o span
  item = item.parentElement;
  //console.log(item);
  if (item.getAttribute("submenu")=="true") {
    if (item.getAttribute("s")!="aberto") {
      item.className = "menuamberto";
      item.setAttribute("s","aberto");
    }
    else {
      item.className = "menufechado";
      item.setAttribute("s","fechado");
    }
    return;
  }
  link = item.getAttribute("link");
  window.location.href = link;
}
menunav = document.getElementById('menunav');
function menuShow(){
  if (menunav.style.display == "block") {
    menunav.style.display = "none";
  }else{
    menunav.style.display = "block";
  }
}
