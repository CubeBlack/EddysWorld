<?php
require_once "./config.php";

function sourceName($name){
  if(SHOWSOURCENAME){
    echo "[sourceName|$name] ";
  }
}

function carregaClasse($nomeDaClasse) {
        require_once("engine/".$nomeDaClasse.".class.php");
}

function dbQuery($query){
//SHOWDBASEQUERY
if(SHOWDBASEQUERY)
    echo "[dbQuery|$query] ";
//
    try {
        $db = new PDO(
            "mysql:host=".DBHOSTNAME.";dbname=".DBHOSTDBNA."",
            DBHOSTUSER,
            DBHOSTPASS
        );
        $txtQuery = "select now()";
    } catch (PDOException $e) {
        print "<pre>Error(DBServer::construct)!".$e->getMessage();
        die();
    }

    $results = $db->query($query);
    if(SHOWDBASEERROR){
        $error = $db->errorInfo(); 
        echo $error[2];
    }
   return $results->fetchAll();
    
}
sourceName("functions.php");
