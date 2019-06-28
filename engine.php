<?php
/*
Scrip para juntar dependencias do motor
*/
//antigas dependencias
include_once "eddysworld_server.php";

//dependencias
include_once "config.php";
include_once "engine/functions.php";
//
spl_autoload_register("carregaClasse");
//variables

///------------
