//viriaveis 'titulo' e 'tipo' previamente declarados
forum = [];
forum.obj = [];
forum.eleDisplay = document.getElementById("display");
forum.rGetByTitle = function (msg) {
	console.log(msg);
	forum.obj =  JSON.parse(msg);
	forum.show();

}
forum.getByTitle = function () {
	com = page.replace(forum.tGetByTitle,{"title":titulo});
	term.com(com,forum.rGetByTitle);
}
forum.tGetByTitle = "forum.getByTitle({title},json);";
//----
forum.show = function(){
	display =  "";
	uso = 0;
	console.log(forum.obj.dialogos);
	if(forum.obj.tipo == "dialogo"){
		saidas = "";
		for(i = 0; i <forum.obj.dialogos.length; i++){
			saidas += page.replace(
				forum.tDisplayDialogoSaida, 
				{"saida":forum.obj.dialogos[i].saida}
			);
			uso += parseInt(forum.obj.dialogos[i].uso);
			//uso = forum.obj.dialogos[i].uso;			
		}
		dados = {
			"descricao":forum.obj.descricao,
			"uso":uso,
			"saidas":saidas
		};

		display = page.replace(forum.tDisplayDialogo, dados);
	}
	else{

	}
	forum.eleDisplay.innerHTML = display; 
}
forum.tDisplayDialogo = "{descricao}{uso}{saidas}";
forum.tDisplayDialogoSaida = "<textarea>{saida}</textarea>";

if(tipo=="dialogo"){
	forum.getByTitle();
}
else{
	forum.search();
}

console.log("js/forum");
