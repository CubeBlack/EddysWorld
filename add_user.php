<?php
	require_once "engine.php";
	$msg = "";
	//------------ Ação ------------
	$a = (isset($_POST["a"]))?$_POST["a"]:"";
	//
	if($a == "salvar"){
		$r = User::add($_POST);
		if($r["r"]) header("Location: form_login.php");
		else	$msg = $r["msg"];
	}
	//------------ pagina ------------
	$d = ["msg"=>$msg];
	$conteudo = Page::setTemplate("form_adduser",$d);
	$page->setName("Inicio");
	$page->setContent($conteudo);
	$page->setName("Login");
	$page->write();
