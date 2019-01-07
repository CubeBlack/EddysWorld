grimorio = [];
grimorio.windowLabel = Math.floor(Math.random() * Math.floor(1000));
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
//--- sentir
grimorio.rSentir = function ( msg){
    //console.log("[cronos|" + msg + "]");
		setTimeout(grimorio.sentir,1000);
    if(msg == "") return;
    	grimorio.setMsg(msg,"receved");

		//setInterval(grimorio.sentir,1000);
}
grimorio.sentir = function(){
    grimorio.termC.com(page.replace(grimorio.tSentir,{"label":grimorio.windowLabel}),grimorio.rSentir);
}
grimorio.tSentir = "me.sentir(Web{label})";
//------
grimorio.tMsg = {};
grimorio.tMsg["system"] = "<div class='system'>{msg}</><div></div>";
grimorio.tMsg["receved"] = "<div class='receved'>{msg}</><div></div>";
grimorio.tMsg["sended"] = "<div class='send'>{msg}</><div></div>";
//----------
grimorio.termC = new Terminal();
//--------  declarar terminal
grimorio.termC.server = term.server;
grimorio.termC.on();
//---
//windown label

grimorio.sentir();
//window.setTimeout(grimorio.sentir,1000);
console.log("grimorio.js");
