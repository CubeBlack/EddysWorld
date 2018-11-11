grimorio = [];
grimorio.eleView = document.getElementById("chatvie");
grimorio.eleInput = document.getElementById("comandInp");
grimorio.inputEnter = function (event){
	var keynum;
	if(window.event) { //IE
		keynum = event.keyCode
	} else if(event.which) { // Netscape/Firefox/Opera 
		keynum = event.which
	}
	if( keynum == 13 ) {
		grimorio.enviar(grimorio.eleInput.value);
		grimorio.eleInput.value = "";
    }
	//console.log(keynum);
}
//--------------------------
grimorio.rEnviar = function (msg) {
	grimorio.setMsg(msg,"receved");
}
grimorio.enviar = function (msg,mudo=false) {
	term.com(page.replace(grimorio.tEnviar,{"msg":msg}),grimorio.rEnviar);
	if (!mudo) {
		grimorio.setMsg(msg,"sended");
	}
}
grimorio.tEnviar = "grimorio.ouvir({msg})";
//-------------------------------
grimorio.setMsg = function (msg,tipo="system") {
	template=grimorio.tMsg[tipo];
	grimorio.eleView.innerHTML += page.replace(template,{"msg":msg});
	grimorio.eleView.scrollTop = grimorio.eleView.scrollHeight;
}
///-------------------------------------
//--- cronos
grimorio.rCronos = function ( msg){
    //console.log(msg);
    setTimeout(grimorio.cronos,1000);
    if(msg == "") return;
    grimorio.setMsg(msg,"receved");
}
grimorio.cronos = function(){
    grimorio.termC.com(page.replace(grimorio.tCronos,{"referencia":3}),grimorio.rCronos);
}
grimorio.tCronos = "world.cronos({referencia})";
//------
grimorio.tMsg = {};
grimorio.tMsg["system"] = "<div class='system'>{msg}</><div></div>";
grimorio.tMsg["receved"] = "<div class='receved'>{msg}</><div></div>";
grimorio.tMsg["sended"] = "<div class='send'>{msg}</><div></div>";
//----------
grimorio.termC = new Terminal();
//--------  declarar terminal
grimorio.termC.server = "http://molly/eddysworld/eddysworld_server.term.php";
grimorio.termC.on();
//---
grimorio.cronos();
console.log("grimorio.js");