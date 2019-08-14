<?php
include_once "config.php";
include_once "engine.d/E.class.php";

$page = new Page();
//-------- Menu ----------------
$user = User::getByToken(User::webToken());
if(User::logued()) $page->menuAdditem($user["nick"],"view_perfil.php");
else $page->menuAdditem("Logar","form_login.php");
$page->menuAdditem("Inicio","view_inicio.php");
$page->menuAdditem("Objetos","list_objetos.php");
$page->menuAdditem("Quests","list_quests.php");
$page->menuAdditem("Mundo","view_mundo.php");
$page->menuAdditem("Eciclopedia","list_wikiposts.php");
$page->menuAdditem("Administrar Sistema","admin.php");
