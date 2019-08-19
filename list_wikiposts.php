<?php
require_once "engineweb.php";
	//-------------------
	$conteudo = "[wiki psots]";
	//--------------------
	$page->setName("Wiki");
	$page->setContent($conteudo);
	$page->write();
