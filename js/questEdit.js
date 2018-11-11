quest = [];
quest.rGet = function (msg) {
	if(msg[0]!= "{") { quest.eleDisplay.innerHTML = msg; return; }
	obj = JSON.parse(msg);
	dados = {
		"id":obj["id"],
		"nome":obj["nome"],
		"descricao":obj["descricao"]
	};
	quest.eleDisplay.innerHTML = page.replace(quest.tDisplay, dados);
}
quest.get = function (id) {
	term.com("quest.getById("+id+",json);",quest.rGet);
}
//---------------
quest.eleContent = document.getElementById("content");
quest.eleDisplay = document.getElementById("display");
quest.tDisplay = quest.eleDisplay.innerHTML;
quest.eleSide = document.getElementById("side");
quest.get(data["query"]);
console.log("questEdit.js");
