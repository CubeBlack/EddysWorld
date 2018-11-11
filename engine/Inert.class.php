<?php
class Inert extends GameObject{
	static function byDatabase($id, $base){
		global $db;
		$retorno = $db->tableSelect(Database::inerTb,"WHERE id='$id'");
        //pra que o foreach?
		foreach($retorno as $l){
			$base->name = $l["name"];
			$base->descricao = $l["descricao"];
		}
		return $base;
	}
	public function criar($x,$y,$heigth,$width,$nome,$desc){
		global $db;
		$id = GameObject::add($x,$y,$heigth,$width,"inert");
		Inert::replace($id,$nome,$desc);
		return $id;		
	}
	
	public function updateTipo($id,$x,$y,$heigth,$width,$nome,$desc){
		global $db;
		GameObject::update($id,$x,$y,$heigth,$width,"inert");
		Inert::replace($id,$nome,$desc);
		return $id;
				
	}
	
	static function replace($id,$nome,$desc){
		global $db;
		$query = "REPLACE INTO `ew_inert` VALUES($id,'$nome','$desc')";

		$db->mePDO->query($query);
	}
	
}
