<?php
	class Forum{
		public function listar(){
			global $db;
			$retorno = array();
			$table = $db->tableSelect(Database::forumPostTb,"");
			foreach($table as $key => $row){
				$retorno[] = GameObject::ofDatabase($row) ;
			}
			return $retorno;
		}
		public function getById($id, $rTipo = "arr"){
			global $db;
			$retorno = array();
			$obj = $db->tableSelect(Database::forumPostTb,"WHERE `id`='$id'")[0];
			$retorno = GameObject::ofDatabase($obj);

			if($rTipo=="json") $retorno = json_encode($retorno);
			return $retorno;
		}
		public function getByTitle($title,$rTipo="arr"){
			global $db;
			$retorno = array();
			$retorno = $db->tableSelect(Database::forumPostTb,"WHERE `title`='$title' ");
			if(empty($retorno)) return "Empty!";
			$retorno = $retorno[0];
			if($retorno["tipo"] == "dialogo"){
				$retorno["dialogos"] = Dialogo::getByEntrada($title);
			}			
			if($rTipo=="json") $retorno = json_encode($retorno);
			return $retorno;
		}
		public function novo($tipo, $titulo,$descricao){
			global $db;
			$dados=array(null,$tipo,$titulo,$descricao);
			$id = $db->tableInsert(Database::forumPostTb,$dados);
			return $id;
		}
		public function addComenet(){
		
		}
	}
