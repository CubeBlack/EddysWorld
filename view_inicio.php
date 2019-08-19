<?php
	require_once "engineweb.php";
	$d = [];
	//-------------------
	$conteudo = Page::setTemplate("view_inicio",$d);
	//--------------------
	$page->setName("Inicio");
	$page->setContent($conteudo);
	$page->write();
