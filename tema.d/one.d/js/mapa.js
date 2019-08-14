view = {};
view.x = 0;
view.x0 = 0;
view.y = 0;
view.y0 = 0;
//não ta funcionando
view.z = 8;
view.z0 = 8;
view.ofmeposition = true;
view.mFps = 50000;
view.bGrid = 50;
view.obj = [];
view.resetar = function () {
    view.x = view.x0;
    view.x = view.y0;
    view.z = view.z0;
    view.rewrite2();
}
view.setIn = function () {
    view.z = view.z * 2;
    view.rewrite2();
}
view.setOut = function () {
    view.z /= 2;
    view.rewrite2();
}
view.setRigth = function () {
    view.x -= 40 / view.z;
    view.rewrite2();
}
view.setLeft = function () {
    view.x += 20 / view.z;
    view.rewrite2();
}
view.setUp = function () {
    view.y -= 20 / view.z;
    view.rewrite2();
}
view.setDown = function () {
    view.y += 20 / view.z;
    view.rewrite2();
}
view.loop = function () {
    receved = function (msg) {

        if (msg == view.old) {
            //view.loop();
            window.setTimeout(view.loop(), view.mFps);
            return;
        }
        view.old = msg;
        if (msg[0] != "[") {
            window.setTimeout(view.loop(), view.mFps);
            view.ele.innerHTML = msg;
            return;
        }
        view.obj = JSON.parse(msg);
        view.rewrite2();
        window.setTimeout(view.loop(), view.mFps);
    }

    termView.com("world.show(json)", receved);
}
view.rewrite0 = function () {
    view.ele.innerHTML = "";
    //definir o x e y do centro da view
    if(view.ofmeposition == true){
        for (index = 0; index < view.obj.length; index++) {
            if (view.obj[index].itsme) {
                view.x = -parseInt(view.obj[index].position.x);
                view.y = -parseInt(view.obj[index].position.y);
            }
        }
    }
    view.grid();

    for (index = 0; index < view.obj.length; index++) {
        gObj = document.createElement("div");
        gObj.setAttribute("id", view.obj[index].go_id);
        gObj.setAttribute("onclick", "go.propriedades(" + view.obj[index].go_id + ")");
        style = "";
        style += "top:" + ((parseInt(view.obj[index].position.y) * view.z) + (view.y * view.z) + view.ele.offsetHeight / 2) + "px;";
        style += "left:" + ((parseInt(view.obj[index].position.x) * view.z) + (view.x *view.z) + view.ele.offsetWidth / 2) + "px;";
        style += "width:" + (view.obj[index].tamanho.x * view.z) + "px;";
        style += "height:" + (view.obj[index].tamanho.y * view.z) + "px;";
        //diferenciar o meu player e setar como horigem
        if (view.obj[index].itsme) {
            style += "border: 1px solid red;";
        }
        gObj.setAttribute("style", style);
        gObj.innerHTML = "<label>" + view.obj[index].name + "</label>";
        //console.log(view.obj[index]);
        if (view.obj[index].tipo == "personagem") {
            gObj.setAttribute("class", "per");
            gObj.innerHTML = gObj.innerHTML + "<img src='img/personagemUp.svg'>";
        } else {
            gObj.setAttribute("class", "innert");
        }


        view.ele.appendChild(gObj);

    }
    view.dlx.innerHTML = view.x;
    view.dly.innerHTML = view.y;
    view.dlz.innerHTML = view.z;
}
view.rewrite2 = function () {
    var zeroScreen = 0;
    view.ele.innerHTML = "";
    //definir o x e y do centro da view
    if(view.ofmeposition == true){
        for (index = 0; index < view.obj.length; index++) {
            if (view.obj[index].itsme) {
                view.x = -parseInt(view.obj[index].position.x);
                view.y = -parseInt(view.obj[index].position.y);
            }
        }
    }
    view.grid2(zeroScreen);
    content = view.ele.innerHTML;
    for (index = 0; index < view.obj.length; index++) {

        var dados = {
            "id": view.obj[index].go_id,
            "name": view.obj[index].name,
            "top": ((parseInt(view.obj[index].position.y) * view.z) + (view.y * view.z) + view.ele.offsetHeight / 2),
            "left": ((parseInt(view.obj[index].position.x) * view.z) + (view.x *view.z) + view.ele.offsetWidth / 2),
            "width": (view.obj[index].tamanho.x * view.z),
            "height": (view.obj[index].tamanho.y * view.z),
            "angle": view.obj[index].angle,

            "view.top": -(40 * view.z)/2,
            "view.left": -(40 * view.z)/2,
            "view.width": (40 * view.z),
            "view.height": (40 * view.z),

        };
        if (view.obj[index].tipo == "personagem") {
            content += page.replace(view.tPer,dados);
        } else {
            content += page.replace(view.tInert,dados);
        }
    }
    view.ele.innerHTML = content;

    view.dlx.innerHTML = view.x;
    view.dly.innerHTML = view.y;
    view.dlz.innerHTML = view.z;
}



view.grid = function () {
    for (num = 1; num < view.ele.offsetWidth / view.bGrid; num++) {
        v = document.createElement("div");
        v.setAttribute("id", "");
        v.setAttribute("onclick", "");
        style = "";
        style += "top:0px;";
        style += "left:" + ((view.ele.offsetWidth) - (num * view.bGrid)) + "px;";
        style += "width:0px;";
        style += "height:100%; ";
        v.setAttribute("style", style);
        v.setAttribute("class", "grid");
        v.innerHTML = "1";
        view.ele.appendChild(v);
    }
    for (num = 1; num < (view.ele.offsetHeight ) / view.bGrid; num++) {
        h = document.createElement("div");
        h.setAttribute("id", "");
        h.setAttribute("onclick", "");
        style = "";
        style += "left:0px;";
        style += "top:" + (view.ele.offsetHeight - (num * view.bGrid)) + "px;";
        style += "width:100%;";
        style += "height:0px; ";
        h.setAttribute("style", style);
        h.setAttribute("class", "grid");
        h.innerHTML = "1";
        view.ele.appendChild(h);
    }
}
view.grid2 = function(){
  
    for (num = 1; num < view.ele.offsetWidth / view.bGrid; num++) {
        v = document.createElement("div");
        v.setAttribute("id", "");
        v.setAttribute("onclick", "");
        style = "";
        style += "top:0px;";
        style += "left:" + ((view.ele.offsetWidth) - (num * view.bGrid)) + "px;";
        style += "width:0px;";
        style += "height:100%; ";
        v.setAttribute("style", style);
        v.setAttribute("class", "grid");
        v.innerHTML = "1";
        view.ele.appendChild(v);
    }
}

//------- ao carregar
view.loaded();
console.log("view.js");
