<?php
	require_once "engineWeb.php";
	E::libLoad('gameview');
	$d=[];
	//-------------------
	E::libLoad('thirdhand');
	//--------------------
	$page->setName("Mundo");
	$page->setContent(Page::setTemplate("view_mundo",$d));
	$page->write();
