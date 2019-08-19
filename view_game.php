<?php
	require_once "engineweb.php";
	E::libLoad('gameview');
	$d = [];
	//-------------------
	$conteudo = Page::setTemplate("view_game",$d);
	//--------------------
	$page->setName("Viver");
	$page->setContent($conteudo);
	$page->write();
