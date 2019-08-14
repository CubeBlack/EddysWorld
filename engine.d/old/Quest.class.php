<?php
	class Quest{
		function __construct(){
				
		}
		function listar($query="",$rTipo="arr"){
			global $db;
			$retorno = $db->tableSelect("ew_quests","");
			if($rTipo=="json") $retorno = json_encode($retorno);
			return $retorno;
		}
		function adicionar($x,$y,$heigth,$width,$tipo){
			global $db;
			$dados=array("null",$x,$y,$heigth,$width,$tipo);
			$id = $db->tableInsert("ew_quests",$dados);
			return $id;
		}
		function getById($id,$rTipo="arr") {
			global $db;
			$retorno = $db->tableSelect("ew_quests","where `id` = '$id'")[0];
			//dialogo por quest
			if($rTipo=="json") $retorno = json_encode($retorno);
			return $retorno;
		}
}
