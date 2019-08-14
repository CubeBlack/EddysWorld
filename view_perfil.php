<?php
	require_once "engine.php";
	//-------------------
	$user = User::getByToken(User::webToken());
	$conteudo = Page::setTemplate("Perfil",$user);
	//--------------------
	$page->setName("Meu Perfil");
	$page->setContent($conteudo);
	$page->write();
