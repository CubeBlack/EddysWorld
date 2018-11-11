dialogo = [];
dialogo.eleContent = document.getElementById("entradanuvem");
dialogo.rListar = function (msg) {
	if (msg[0]!="[") {dialogo.eleContent.innerHTML = msg; return;};
	objDialogos = JSON.parse(msg);
	//console.log(objDialogos[0].entrada);
	retorno = "";
	for (i = 0; i < objDialogos.length;i++) {
		dados = {
			"entrada":objDialogos[i].entrada,
			"quantidade":objDialogos[i]["count(*)"],
			"tamanho":"30"
			};
		retorno += page.replace(dialogo.tDialogo,dados);
	}
	dialogo.eleContent.innerHTML = retorno;
	return;
}
//dialogo.tDialogo = "<a style='font-size:{tamanho}px;' href='forum.php?tipo=dialogo&titulo={entrada}'>{entrada}<SUP>{quantidade}</SUP></a>";
dialogo.tDialogo = "<a style='font-size:{tamanho}px;'  onClick = 'entrada.get(\"{entrada}\")'>{entrada}<SUP>{quantidade}</SUP></a>";
dialogo.listar = function () {
	term.com("dialogo.listar( ,json);",dialogo.rListar);
}
dialogo.listar();
console.log("js/dialogoNuvem.js");
