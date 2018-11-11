quest = [];
quest.eleContent = document.getElementById("conteudo");
quest.rListar = function (msg) {
	if (msg[0]!="[") {quest.eleContent.innerHTML = msg; return;};
	objQuests = JSON.parse(msg);
	console.log(objQuests[0].entrada);
	retorno = "";
	for (i = 0; i < objQuests.length;i++) {
		dados = {
			"id":objQuests[i].id,
			"nome":objQuests[i]["nome"],
			"descricao":objQuests[i]["descricao"]
			};
		retorno += page.replace(quest.tquest,dados);
	}
	quest.eleContent.innerHTML = retorno;
	return;
}
quest.open = function (url) {
	window.location.href = url;
}
quest.tquest = "<div class=\"row\" onClick=\"quest.open('questEdit.php?query={id}')\"><div class=\"cell\" >{id}</div><div class=\"cell\" >{nome}</div><div class=\"cell\" >{descricao}</div></div>";
quest.listar = function () {
	term.com("quest.listar( ,json);",quest.rListar);
}
quest.listar();
console.log("js/quest.js");
