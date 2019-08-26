<?php
if(file_exists('../config.php')){
  include_once('../config.php');
}else {
  define("SHOWSOURCENAME",false);
  define("SHOWDBASEERROR",false);
  define("SHOWDBASEQUERY",false);
  //
  define("TEMABASEPATH","tema.d");
  define("TEMANAME","one");
  //
  define("DBHOSTNAME","");
  define("DBHOSTUSER","");
  define("DBHOSTPASS","");
  define("DBHOSTDBNA","");
  //
  define("VAZIO", "Empty!");

  //Lirarias
  define("LIBSPATH",'libs');
}
