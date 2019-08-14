<?php
	require_once "engine.php";
	$d=[];
	//-------------------
	//--------------------
	$page->setName("Mundo");
	$page->setContent(Page::setTemplate("view_mundo",$d));
	$page->write();
