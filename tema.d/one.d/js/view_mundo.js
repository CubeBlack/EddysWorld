gv = new GameView(document.getElementById('view_content'));
requestView = wrequest();

function viewloop(){
  produtoid = '';
  send  = server + "hookweb.php?a=view&search=";
  requestView.postMessage(send);
  requestView.onmessage = function (event) {
    gv.loadContent(event.data);
  }
  console.log(send);
}
window.onload = function(){
  viewloop();
}
window.onresize = function(){
  gv.resize();
}
