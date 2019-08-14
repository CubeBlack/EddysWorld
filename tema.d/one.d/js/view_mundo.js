view = {};
//-------- configuração inicial  -----------
view.bGrid = 30;
view.z = 8;
view.x = 0;
view.y = 0;
//------------- Grid --------------//
view.gridContent = document.getElementById('view_grid');
view.grid = function (){
  grid = "";
  //-- eixo x --
  for (num = 1; num < view.gridContent.offsetWidth / view.bGrid; num++) {
    d = {};
    d.top = 0;
    d.left = ((view.gridContent.offsetWidth) - (num * view.bGrid));
    d.width = 0;
    d.height = view.gridContent.offsetHeight;
    d.content = num;
    grid += setTemplate("grid_line",d);
  }
  //-- eixo y --
  for (num = 1; num < view.gridContent.offsetHeight / view.bGrid; num++) {
    d = {};
    d.left = 0;
    d.top = ((view.gridContent.offsetHeight) - (num * view.bGrid));
    d.width = view.gridContent.offsetWidth;
    d.height = 0;
    d.content = num;
    grid += setTemplate("grid_line",d);
  }
  //
  view.gridContent.innerHTML = grid;
}
//------------- Load ---------------
view.content = document.getElementById('view_content');
view.request = wrequest();
view.loadOld = "";
view.load = function(){
  send  = hookweb+"?a=mundo";
  //console.log(send);
  view.request.postMessage(send);
  view.request.onmessage = function (event) {
    setTimeout(view.load, 1000);
    if(event.data == view.loadOld) return;
    view.loadOld = event.data;
    //
    mapaObject = JSON.parse(event.data);
    //console.log(mapaObject);
    retorno = "";
    for (var i = 0; i < mapaObject.length; i++) {
      mapaObject[i].x = mapaObject[i].x * view.z;
      mapaObject[i].y = mapaObject[i].y * view.z;
      mapaObject[i].h = mapaObject[i].h * view.z;
      mapaObject[i].w = mapaObject[i].w * view.z;
      mapaObject[i].nome = "";
      retorno += setTemplate("inert",mapaObject[i]);
    }
    view.content.innerHTML = retorno;

  }
}
//--------- Ações -------------
view.setRewrite = function () {
  view.loadOld = "";
  view.grid();
}
view.setIn = function () {
    view.z = view.z * 2;
    view.setRewrite();
}
view.setOut = function () {
    view.z /= 2;
    view.setRewrite();
}
view.setRigth = function () {
    view.x -= 40 / view.z;
    view.setRewrite();
}
view.setLeft = function () {
    view.x += 20 / view.z;
    view.setRewrite();
}
view.setUp = function () {
    view.y -= 20 / view.z;
    view.setRewrite();
}
view.setDown = function () {
    view.y += 20 / view.z;
    view.setRewrite();
}
//-----------------
view.grid();
view.load();
console.log("view_mundo.js");
