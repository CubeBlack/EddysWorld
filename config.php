<?php
/*
configração do sistama
*/
// MODO DE MANUTENÇÃO
define("SHOWSOURCENAME",false);
define("SHOWDBASEERROR",false);
define("SHOWDBASEQUERY",false);
//
define("TEMABASEPATH","tema.d");
define("TEMA","simple");
//
define("DBHOSTNAME","localhost");
define("DBHOSTUSER","daniel");
define("DBHOSTPASS","1");
define("DBHOSTDBNA","lima");
//
define("VAZIO", "Empty!");

//$show_sourcename = false;
//
$var1 = [];
define("TERMVARS1",$var1);
//

require_once("engine/functions.php");
sourceName("config.php");
