<link rel="stylesheet" type="text/css" href="css/wiki.css">
<?php
$pageTitle = "EW - Wiki";
include "openingPage.php";


?>
<!-------------------- onteudo -->
<section id="content">
    <div id="search">
        <label>Pesquisar: </label>
        <input>
        <input type="button" value="Ir">
    </div>

    <div id="principal">

        <div onclick="wikiPage.opem('{id}')" id="listaItem">
            <div>{id}</div>
            <div>{titulo}</div>
            <div>{acesso}</div>
        </div>
    </div>
    <div id="pagina">
        <p>
            <input type="button" value="Editar">
        </p>
        {conteudo}
    </div>
    <div id="paginaEdit">
        <p>
            <input type="button" value="Salvar">
            <input type="button" value="Cancelar">
        </p>
        <textarea>{conteudo}</textarea>
        <p>
            <input type="button" value="Salvar">
            <input type="button" value="Cancelar">
        </p>
    </div>
</section>
<section id="side">
    {chat}
</section>
<script src="js/wikSearch.js" charset="utf-8"></script>
<script src="js/wikiPage.js" charset="utf-8"></script>
<script src="js/wikiEdit.js" charset="utf-8"></script>
<!-------------------- onteudo -->
<?php

include "endingPage.php";
