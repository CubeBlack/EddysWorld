<?php
//require_once"engine2/Termianl.class.php";
class Dialogo{
	function __construct(){

	}
	public function getByTitle($title,$rTipo = "arr"){
		//echo "|$rTipo|";
		$retorno = Dialogo::getByEntrada($title);
		if($rTipo == "json")
			$retorno = json_encode($retorno);
		return $retorno;
	}
	static function getByEntrada($str){
		global $db;
		 //array_rand()
		
		$str = Dialogo::simplificar($str);
		//if($str) == ;
		$retorno = $db->tableSelect(Database::dialogoTb,"WHERE entrada='$str'");
		if(!empty($retorno)){
			Dialogo::addUso($retorno[0]["id"]);
		}
		else{
			//var_dump($retorno);
			return Dialogo::novo($str);
			//Retorar saida de dialogo inesesetente
		}
		return $retorno;
	}
	static function getById($id){
		global $db;
		$retorno = $db->tableSelect(Database::dialogoTb,"WHERE id='$id'")[0];
		return $retorno;
	}
	static function getByEntradaLike($str){
		global $db;
		 //array_rand()
		
		$str = Dialogo::simplificar($str);
		//if($str) == ;
		$retorno = $db->tableSelect(Database::dialogoTb,"WHERE entrada like'%$str%'");
		if(!empty($retorno)){
			Dialogo::addUso($retorno[0]["id"]);
		}
		else{
			//var_dump($retorno);
			return Dialogo::novo($str);
			//Retorar saida de dialogo inesesetente
		}
		return $retorno;
	}
	function listar($criterio="",$rTipo="arr"){
		global $db;
        
        //EXPLAIN SELECT DISTINCT entrada, count(*), sum(uso) from ew_dialogo WHERE entrada like '%a%' group by entrada, uso order by sum(uso) desc LIMIT 100 
		$query = "SELECT DISTINCT entrada, count(*), sum(uso) from ew_dialogo WHERE entrada like '%$criterio%' group by entrada, uso order by sum(uso) desc LIMIT 100 ";
		//$retorno = $db->tableSelect(Database::dialogoTb,"");
		
		$retorno = $db->mePDO->query($query)->fetchAll();
		//var_dump($retorno);
		if($rTipo=="json") return json_encode($retorno);
		return $retorno;
	}
	function novo($entrada, $saida = 'Empty!', $personagem = "0"){
		global $db;
		$entrada = Dialogo::simplificar($entrada);
		if($saida==""||$saida==null) $saida = 'Empty!';
		$dados=array(null,$entrada,$saida,$personagem,0);
		$id = $db->tableInsert(Database::dialogoTb,$dados);
		return $id;
	}
	//eModo, he o tipo de entrada: json/array
	static function replace($id,$entrada,$retorno,$personagem, $eModo = "json"){
		global $db;
		$entrada = Grimorio::simplificar($entrada);
		$table = Database::dialogoTb;
		$query = "REPLACE INTO `$table` VALUES($id,'$entrada','$retorno',$personagem)";

		$db->mePDO->query($query);
	}
	public function setSaida($id,$saida){
		global $db;
		//UPDATE `lima`.`ew_dialogo` SET `saida`='gri.dizer(é uma letra);' WHERE `id`='29';
		$query = "UPDATE `ew_dialogo` SET `saida`='$saida' WHERE `id`='$id';";
		$retorno = $db->mePDO->query($query);
		return $retorno;
	}
	function drop(){
		//desnecesario
	}
	static function simplificar($str){
		// sudo apt install php7.0-mbstring
		// var_dump($str);
		$str = mb_strtoupper($str);
		//$str = strtoupper($str);
		
		$map = array(
			'Á' => 'A',
			'À' => 'A',
			'Ã' => 'A',
			'Â' => 'A',
			'É' => 'E',
			'Ê' => 'E',
			'Í' => 'I',
			'Ó' => 'O',
			'Ô' => 'O',
			'Õ' => 'O',
			'Ú' => 'U',
			'Ü' => 'U',
			'Ç' => 'C',
			'\'' => "`"
		);
		 
		$str = strtr($str, $map); // funciona corretamente
		return $str;
	}
	static function addUso($id){
		global $db;
		$dialogo = Dialogo::getById($id);
		$aUso = $dialogo["uso"];
		$aUso++;
		$query = "update `ew_dialogo` set `uso`='$aUso' where `id`='$id' limit 1";
		$db->mePDO->query($query);
	}
}

