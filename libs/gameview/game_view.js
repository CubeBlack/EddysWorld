GV = {};
//
//-------- configuração inicial  -----------
GV.bGrid = 30;
GV.z = 8;
GV.x = 0;
GV.y = 0;
//-------- Old Elementes ------
GV.gridContent = document.getElementById('view_grid');
GV.content = document.getElementById('view_content');
//------------- Grid --------------//
GV.grid = function (){
  grid = "";
  //-- eixo x --
  for (num = 1; num < GV.gridContent.offsetWidth / GV.bGrid; num++) {
    d = {};
    d.top = 0;
    d.left = ((GV.gridContent.offsetWidth) - (num * GV.bGrid));
    d.width = 0;
    d.height = GV.gridContent.offsetHeight;
    d.content = num;
    grid += setTemplate("grid_line",d);
  }
  //-- eixo y --
  for (num = 1; num < GV.gridContent.offsetHeight / GV.bGrid; num++) {
    d = {};
    d.left = 0;
    d.top = ((GV.gridContent.offsetHeight) - (num * GV.bGrid));
    d.width = GV.gridContent.offsetWidth;
    d.height = 0;
    d.content = num;
    grid += setTemplate("grid_line",d);
  }
  //
  GV.gridContent.innerHTML = grid;
}
//------------- Load ---------------
GV.request = wrequest();
GV.loadOld = "";
GV.load = function(){
  send  = hookweb+"?a=mundo";
  //console.log(send);
  GV.request.postMessage(send);
  GV.request.onmessage = function (event) {
    setTimeout(GV.load, 1000);
    if(event.data == GV.loadOld) return;
    GV.loadOld = event.data;
    //
    mapaObject = JSON.parse(event.data);
    //console.log(mapaObject);
    retorno = "";
    for (var i = 0; i < mapaObject.length; i++) {
      mapaObject[i].x = mapaObject[i].x * GV.z;
      mapaObject[i].y = mapaObject[i].y * GV.z;
      mapaObject[i].h = mapaObject[i].h * GV.z;
      mapaObject[i].w = mapaObject[i].w * GV.z;
      mapaObject[i].nome = "";
      retorno += setTemplate("inert",mapaObject[i]);
    }
    GV.content.innerHTML = retorno;

  }
}
//--------- Ações -------------
GV.setRewrite = function () {
  GV.loadOld = "";
  GV.grid();
}
GV.setIn = function () {
    GV.z = GV.z * 2;
    GV.setRewrite();
}
GV.setOut = function () {
    GV.z /= 2;
    GV.setRewrite();
}
GV.setRigth = function () {
    GV.x -= 40 / GV.z;
    GV.setRewrite();
}
GV.setLeft = function () {
    GV.x += 20 / GV.z;
    GV.setRewrite();
}
GV.setUp = function () {
    GV.y -= 20 / GV.z;
    GV.setRewrite();
}
GV.setDown = function () {
    GV.y += 20 / GV.z;
    GV.setRewrite();
}
//-----------------

console.log("game_view.js");
