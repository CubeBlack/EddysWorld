<?php
	require_once "engine.php";
	$d = [];
	//-------------------
	$conteudo = Page::setTemplate("view_game",$d);
	//--------------------
	$page->setName("Viver");
	$page->setContent($conteudo);
	$page->write();
