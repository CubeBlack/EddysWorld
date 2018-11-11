var wiki = [];
wiki.rSearch = function (msg) {
    if (msg[0] != "[") {
        wiki.eleContent.innerHTML = msg;
        return;
    }
    var obj = JSON.parse(msg);
    var retorno = "";
    for (var i = 0; i < obj.length; i++) {
        var dado = {
            "id": obj[i].id,
            "titulo": obj[i].titulo
        }
        retorno += page.replace(wiki.tListaItem, dado);
    }
    wiki.elePrincipal.innerHTML = retorno;
}
wiki.search = function () {
    term.com("wiki.listar(json)", wiki.rSearch);
    //term.com("wiki.listar(json)");
}
//
wiki.eleContent = document.getElementById("content");
wiki.elePrincipal = document.getElementById("principal");
wiki.tListaItem = document.getElementById("principal").innerHTML;
document.getElementById("principal").innerHTML = "";
wiki.search();
//
console.log("wikiSeach.js");
