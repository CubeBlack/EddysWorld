<?php
	require_once "engine.php";
	//-------------------
	$conteudo = "[wiki psots]";
	//--------------------
	$page->setName("Wiki");
	$page->setContent($conteudo);
	$page->write();
