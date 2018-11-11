conta = [];
conta.user = [];
conta.eleFormLogin = document.getElementById("conta.formlogin");
conta.eleDisplayUser = document.getElementById("conta.displayUser");
//---------- Pegar usuario ------
conta.rGet = function (msg) {
    //console.log(msg);
    conta.user = JSON.parse(msg);
    if (conta.user.id == "0") {
        //Voce n;ao sesta logado
        conta.eleFormLogin.style.display = "block";
    } else {
        conta.eleFormLogin.style.display = "none";
        conta.getPer();
    }
    conta.carregar();
}
conta.get = function () {
    term.com(conta.tGet, conta.rGet);
}
conta.tGet = "user.get(json)";
//-------------- Exibir dados do usuario
conta.carregar = function () {
    dados = {
        "id": conta.user.id,
        "nick": conta.user.nick
    }
    conta.eleDisplayUser.innerHTML = page.replace(conta.tDisplayUser, dados);
}
conta.tDisplayUser = "<h1>{id} - {nick}</h1><p><input type='button' value='sair' onclick='conta.sair()'></p>";
//------------- logar -----------
conta.eleUser = document.getElementById("conta.form.user");
conta.elePass = document.getElementById("conta.form.pass");
conta.rLogar = function (msg) {
    console.log(msg);
    conta.get();
    // se conseguir logar, recarregar pagina
}
conta.logar = function () {
    com = page.replace(conta.tLogar, {
        "user": conta.eleUser.value,
        "pass": conta.elePass.value
    });
    term.com(com, conta.rLogar);
    console.log(term.ultimoRequerimentoDoServidor);
}
conta.tLogar = "user.login({user},{pass})";
//------------- sair -----------
conta.rSair = function () {
    conta.get()
}
conta.sair = function () {
    term.com("user.sair()", conta.rSair);
    console.log(term.ultimoRequerimentoDoServidor);
}
//------------ per --------------
conta.rGetper = function (msg) {
    if (msg[0] != "{") {
        conta.DivPer.innerHTML = msg;
        return;
    }

    var obj;
    var resposta;
    var dado;

    obj = JSON.parse(msg);
    dado = {
        "per.nome": obj.name,
        "per.inteligencia": obj.intelligence,
        "per.strong": obj.strong,
        "per.speed": obj.speed
    };

    resposta = page.replace(conta.tDivPer, dado);
    conta.DivPer.innerHTML = resposta;
}
conta.getPer = function () {
    term.com("me.me(json);", conta.rGetper);
}
conta.DivPer = document.getElementById("divpersonagem")
conta.tDivPer = conta.DivPer.innerHTML;
conta.DivPer.innerHTML = "";
//-------------  -----------
conta.get();
console.log("/js/conta.js");
