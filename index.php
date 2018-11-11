<link rel="stylesheet" type="text/css" href="css/chat.css">
<?php
$pageTitle = "Eddy's world - Play Now";
include "openingPage.php";


?>
<!-------------------- onteudo -->

<section id="conteudo">
    <div id="view">
        <div id="intro">
            <h1>Bem vindo a um novo mundo!</h1>
            <p>Para saber mais sobre os tipos de dialogos...</p>

        </div>
    </div>
    <div id="query">
        <input type="text" id="comandInp" onKeyPress="grimorio.inputEnter(event)" autofocus>
    </div>
</section>
<script src="js/grimorio.js" charset="utf-8"></script>
<!-------------------- onteudo -->
<?php

include "endingPage.php";
