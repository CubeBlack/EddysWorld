<?php
	require_once "engine.php";
	$msg = "";
	//------------ Ação ------------
	$a = (isset($_POST["a"]))?$_POST["a"]:"";
	//
	if($a == "login"){
		if(User::logar($_POST["email"],$_POST["senha"])) {
			//header("Location: view_world.php");
		}
		else	$msg = "Não foi possivel Logar";
	}
	//-----------
	if (User::logued()) {
		header("Location: view_game.php");
	}
	//------------ pagina ------------
	$d = ["msg"=>$msg];
	$conteudo = Page::setTemplate("form_login",$d);
	$page->setName("Inicio");
	$page->setContent($conteudo);
	$page->setName("Login");
	$page->write();
