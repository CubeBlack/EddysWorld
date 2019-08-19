<?php
/*
*
* G2 - Daniel A. Lima
*/
//------- carregar automaticamete as classes -----------
function carregaClasse($nomeDaClasse) {
	 require_once("engine.d/".$nomeDaClasse.".class.php");
}
spl_autoload_register("carregaClasse");
//-------------------
class E{
  function __construct($argument){}

  function sourceName($name){
		if(SHOWSOURCENAME){
		  echo "[sourceName|$name] ";
		}
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
	function retornoTipo($valor,$tipo=""){
		//-- tipo de retorno --
		if ($tipo == 'dump') {
			var_dump($valor);
			return $retorno;
		}
		//-- json --
		if ($tipo == 'json') {
			return json_encode($valor);
		}
		//-- Apenas o objeto --
		return $valor;
	}
	function libLoad($libName){
		$filefullname = LIBSPATH."/{$libName}/load.php";
		if (file_exists($filefullname)) {
			require_once $filefullname;
			return;
		}
		die("Erro ao carregar livraria: {$libName}");
	}
}
