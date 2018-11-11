<?php
class Personagem extends GameObject{
	function __construct($id=0){
        $this->id = $id;
	}
	public function status(){
		global $dbl;
		$retorno = array();
		$retorno=$this->statusT();
		//var_dump($retorno);
		if($this->id != 0){ 
			$retorno["logued"] = "true";
		}
		else 
			$retorno["logued"] = "false";
		

		return $retorno;
	}
    public function me($rTipo = "arr"){
        $go = $this->get($this->id);
        $retorno = $this->getById($this->id);
        $retorno["position"] = $go->position;
        if($rTipo=="json") $retorno = json_encode($retorno);
        return $retorno;
    }
	public function statusT($rTipo = ""){
		global $dbl;
        $data = $dbl->get();
        //var_dump($data["status"]);
		if(!isset($data["status"])) return array();
		return (array)$data["status"];
	}
	public function getById($id,$rTipo = "arr"){
        global $db;
        $retorno = array();
        $obj = $db->tableSelect("ew_personagem","WHERE `id`='$id'")[0];
        //$retorno = GameObject::ofDatabase($obj);
        $retorno = $obj;
        if($rTipo=="json") $retorno = json_encode($retorno);
        return $retorno;
        
	}
	public function setStatusF(){
		
	}
	public function setStatusT($chave,$valor){
		global $dbl;
		$status = $this->statusT();
		$status[$chave]=$valor;
		$retorno = $dbl->set("status",$status);

		return $retorno;
	}
    public function id(){
        return $this->me()["id"];
    }
    public function nome(){
        return $this->me()["name"];
    }
    //Valores
    function manaA(){
        return $this->me()["manaA"];
    }
    function manaM(){
        return $this->me()["manaM"];
    }
    function speed(){
        return $this->me()["speed"];
    }
    function strong(){
        return 100;
    }
    function life(){
        return 100;
    }
    function  position(){
        return $this->me()["position"];
    }
    // ------------ ações
    public function andar(){
        $this->translate(0,$this->speed());
        
        return "Ok!";
    }
    public function parar(){
        $this->stop();
        global $ato;
    }
    public function atacar(){
        
    }
    public function fugir(){
        
    }
    public function pegar(){
        
    }
    public function ver(){
        
    }
    static function byDatabase($id, $base){
		global $db;
		$retorno = $db->tableSelect("ew_personagem","WHERE `id`='$id'")[0];
        $base->name = $retorno["name"];
        return $base;
    }
    
//------------
public $help = "
=== Personagem(iniciado como 'me') === 
-- Valores --
.nome()
.magi()
.speed()
.strong()
-- Ações --
.atacar()
.fugir()
.pegar()
*
";
}
