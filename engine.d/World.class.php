<?php
	class World{
		function __construct(){
			$this->gameObject = array();
		}
      //retorna todos os objetos em uma determinada arrea
		function view($tRetorno="obj", $position="me",$filtro=""){
			$retorno = GameObject::findByLocation("");
			switch($tRetorno){
				case "obj":
					return $retorno;
					break;
				case "json":
					return json_encode($retorno);
					break;
				default:
					return "erro 001(Wolrd.show):tipo de retorno '$tRetorno'nao reconhecido";
					break;
			}
		}
		//execução de tempo de uma determinada area
        function cronos($referencia){
            global $atos, $grimorio;
            $atos->onTime();
            $resposta = $grimorio->perceber();
            $resposta = "";
            return $resposta;
        }
      public $help ="
=== Wolrd(word) ===
 .show(tRetorno[obj], position[me],filtro[]) - retorna todos os objetos em uma determinada arrea
 .cronos(referencia) - Execução cronologica dos 'atos' de uma determinada area
";

	}
