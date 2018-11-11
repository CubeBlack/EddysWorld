	<link rel="stylesheet" type="text/css" href="css/entradaNuvem.css">
	<link rel="stylesheet" type="text/css" href="css/entradaEdit.css">
<?php
	$pageTitle = "EW | Entradas";
	include "openingPage.php";
?>
<!-------------------- conteudo -->
    <template id="tDialogo">
        <a style='font-size:{tamanho}px;'  onClick = 'entrada.get("{entrada}")'>
            {entrada}
            <SUP>{quantidade}</SUP>
        </a>
    </template>
    <template>

    </template>
	<section id="entradaedit" class="aside">
		<section id="display">
			<h2>{entrada}</h2>
			<p>uso: {entrada.uso}</p>
			<a href="wiki.php?tipo=entrada&entada={entrada}">wiki</a>
		</section>
		<section id="saidas">
			<textarea onkeypress="autoResize(this)" dialogoId="{dialogoId}" id="i{saidaIndex}">{saida}</textarea>
		</section>
		<div id="comandos">
			<input type="button" onclick="entrada.salvar()" value="Salvar">
			<input type="button" onclick="entrada.addSaida()" value="Adicionar Saida">
			<input type="button" onclick="entrada.cancelar()" value="Cancelar Edicao">
		</div>
	</section>
    <section class = "bloco content">
        <section class="bloco">
            <input id="entradaquery" onKeypress="dialogo.listar();">
        </section>
        <section id="entradanuvem">
	   </section>
    </section>

	<script src="js/entradaNuvem.js" charset="utf-8"></script>
	<script src="js/entradaNuvem.js" charset="utf-8"></script>
	<script src="js/entradaEdit.js" charset="utf-8"></script>
<!-------------------- conteudo -->
<?php
	include "endingPage.php";
	
