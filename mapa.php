<link rel="stylesheet" type="text/css" href="css/mapa.css">
<link rel="stylesheet" type="text/css" href="css/view.css">
<?php
$pageTitle = "EW | Mapa Mund";
include "openingPage.php";


?>
<!-------------------- onteudo -->

<section id="mapa">
    <div id="view"></div>
    <div id="menu-view">
        <input type="button" onclick="view.setIn()" value="."><input type="button" onclick="view.setUp()" value="^"><input type="button" onclick="" value="."><br>
        <input type="button" onclick="view.setRigth()" value="<"><input type="button" onclick="view.resetar()" value="*"><input type="button" onclick="view.setLeft()" value=">"><br>
        <input type="button" onclick="view.setIn()" value="+"><input type="button" onclick="view.setDown()" value="v"><input type="button" onclick="view.setOut()" value="-"><br>
        <input type="checkbox" checked><label> my position</label><br>
        <label id="display-label-x"></label> of X<br>
        <label id="display-label-y"></label> of y<br>
        <label id="display-label-z"></label> of z<br>
    </div>
</section>
<section id="options">
    <label>GameObject</label>
    <label>Dialogos</label>
    <div id="proprieades-go">
        GameObject
        <p><input id="proprieades-go-id" disabled>is your <label>id</label></p>
        <p><input id="proprieades-go-x">m is postion <label>x</label></p>
        <p><input id="proprieades-go-y">m is postion <label>y</label></p>
        <p><input id="proprieades-go-height">m of <label>height</label></p>
        <p><input id="proprieades-go-width">m of <label>width</label>
            <p><input id="proprieades-go-tipo" onkeyup="go.setTipo()">of <label>type</label></p>
    </div>
    <div id="proprieades-inert">
        Tipo Inert
        <p><input id="proprieades-inert-nome"> of <label>Nome</label></p>
        <p><textarea id="proprieades-inert-desc"></textarea> and <label>About</label></p>
    </div>
    <div id="proprieades-personagem">
        Tipo personagem
        <p><input>and your <label>Nome</label></p>
        <p><input>name of your <label>Grimorio</label></p>
        <p><input><label>Dinheiro</label></p>
        <p><input><label>Magia</label></p>
        <p><input><label>vigor</label></p>
        <p><input><label>velocidade</label></p>
        <p><input><label>invetorio</label></p>
        <p><input><label>tipo</label></p>
    </div>
    <div id="proprieades-player">
        Tipo Player
        <p><input> e seu <label>Nick</label></p>
        <p><input> e seu <label>Email</label></p>
    </div>
    <section id="options-acoes">
        <input type="button" onclick="go.novo()" value="Novo">
        <input id="proprieades-acao" type="button" value="None" disabled>
        <input type="button" onclick="go.cancelar()" value="Cancelar">
        <input type="button" onclick="go.apagar()" value="Apagar">
        <input type="button" onclick="go.apagar()" value="pesquisar">
    </section>
</section>
<script src="js/go.js" charset="utf-8"></script>
<script src="js/view.js" charset="utf-8"></script>
<!-------------------- onteudo -->
<?php

include "endingPage.php";
