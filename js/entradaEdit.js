entrada = [];
entrada.aTitle = "";
entrada.aNumEntradas = 0;
function autoResize(ele)
{
    //objTextArea = document.getElementById('txtTextArea');
    while(ele.scrollHeight > ele.offsetHeight){
        ele.rows += 1;
    }

	//console.log(ele.scrollHeight);
}
entrada.rGet = function(msg){
	//console.log(msg);
	obj = JSON.parse(msg);
	console.log(obj);
	saidas = "";
	for(i = 0; i < obj.length; i++){
		dado = {
			"dialogoId":obj[i]["id"],
			"saida":obj[i]["saida"],
			"saidaIndex":i
		};
		saidas +=  page.replace(entrada.tSaida,dado);
	}
	entrada.aNumEntradas = i;
	entrada.eleDisplay.innerHTML = page.replace(entrada.tDisplay,{"entrada":obj[0]["entrada"]});
	entrada.eleSaidas.innerHTML = saidas;
}
entrada.get = function(title){
	entrada.aTitle = title;

	term.com("dialogo.getByTitle(strBegin\""+title+"\"strEnd,json)",entrada.rGet);
}
entrada.addSaida = function(msg){
	strSaidas = entrada.eleSaidas.innerHTML;
	strSaidas += page.replace(entrada.tSaida,{});
	entrada.eleSaidas.innerHTML = strSaidas;
}
entrada.rSalvar = function(msg){
	console.log(msg);
	entrada.get(entrada.aTitle);
}
entrada.salvar = function(){
	com = "";
	//getAttribute( "href" )
	
	for (i = 0; i < entrada.aNumEntradas; i++) {
		ele = document.getElementById("i"+i);
		//e se for uma nova saida?
		dado = {
			"saida": term.toStr(ele.value),
			"id": ele.getAttribute("dialogoId")
		};
		com += page.replace(entrada.tSalvar, dado);
	}
	console.log(com);
	term.com(com,entrada.rSalvar);
}
entrada.cancelar = function (){
	entrada.get(entrada.aTitle);
}
entrada.tSalvar = "dialogo.setSaida({id},{saida});";

entrada.eleDisplay = document.getElementById("display");
entrada.tDisplay = document.getElementById("display").innerHTML;
entrada.eleDisplay.innerHTML = "";
entrada.eleSaidas = document.getElementById("saidas");
entrada.tSaida = document.getElementById("saidas").innerHTML;
entrada.eleSaidas.innerHTML = "";

console.log("entradaEdit.js");
