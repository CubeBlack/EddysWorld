<?php

	if(!isset($_GET['tipo'])) $tipo = "pesquisa";
		else $tipo = $_GET['tipo'];
	if(!isset($_GET['titulo'])) $titulo = "";
		else $titulo = $_GET['titulo'];

	$pageTitle = "EW | Forum[$tipo] : $titulo";
	include "openingPage.php";
?>
<!-------------------- onteudo -->
	<link rel="stylesheet" type="text/css" href="css/forum.css">
	<section id="content">
		<div id="display">{display}</div>
		<div id="coments">{post}</div>
		<div id="coments">{comentes}</div>
	</section>
	<script><?php echo "tipo='$tipo';titulo='$titulo';"?></script>
	<script src="js/forum.js" charset="utf-8"></script>
<!-------------------- onteudo -->
<?php
	include "endingPage.php";
	
