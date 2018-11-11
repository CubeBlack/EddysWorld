var wikiPage = [];
wikiPage.rOpem = function (msg) {
    if (msg[0] != "{") {
        wiki.eleContent.innerHTML = msg;
        return;
    }
    var obj = JSON.parse(msg);
    var dados = {
        "conteudo":obj["conteudo"]
    };
    wikiPage.elePage.innerHTML = page.replace(wikiPage.tPage,dados);
}
wikiPage.opem = function (id) {
    //term.com("wiki.pageById("+id+",json)");
    term.com("wiki.pageById(" + id + ",json)", wikiPage.rOpem);
}
//
wikiPage.tPage = document.getElementById("pagina").innerHTML;
document.getElementById("pagina").innerHTML = "";
wikiPage.elePage = document.getElementById("pagina");
//
console.log("wikiPage.js");
