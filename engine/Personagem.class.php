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
         $retorno["a"] = $go->angle;
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
    public function novaPosicao($x, $y){
        global $db;
        $query = "UPDATE `ew_object` SET `x` = '$x', `y` = '$y' WHERE `id` = {$this->id};";
        $db->mePDO->query($query);
        return "Ok!";
    }
    public function novoAngulo($a){
        $this->setAngle($this->id,$a);
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
    function angle(){
        return $this->me()["a"];
    }
    function  position(){
        return $this->me()["position"];
    }
    // ------------ ações
		public function sentir($label="none"){
			/*
				vericar se alguem ou alguma coisa entrou no campo de visão e retornar para o usuario
				verificar se alguem lhe esta atacando
				Verificar se a novidades no server
				Verificar se ouve siginificativa alteração de life/força/magia/xp
				verificar se o personagem eta logado
			*/
			// remover isso quando der
			if($this->id == 0){
				return "Error: você não esta logado| label: " . $label;
			}
			///
			global $atos;
			$atos->onTime();
			///
			$objs = $this->ver();
			//var_dump($objs);
			return "";

		}
    public function andar(){
        $this->translate(0,$this->speed(),"andar");

        return "Ok!";
    }
    public function parar(){
        //global $ato;
        Atos::dropByAtor($this->id);
    }
    public function atacar(){
			global $atos;
			$atos->set("user;",0,$this->id,"atacar");
    }
    public function fugir(){

    }
    public function pegar(){

    }
    public function ver(){
		global $db;
        $me = $this->me();
        $meX = $me["position"]->x;
        $meY = $me["position"]->y;
        $meId = $me["id"];
        $areaL = 20;
       //echo  $where = "WHERE (y + h) > ($meX - $areaL)";
       $where = "where
                (
                    x > ($meX - $areaL) or
                    x + w > ($meX - $areaL) /* adicionar largura*/
                ) and
                (
                    x < ($meX + $areaL)
                )and
                (
                    y > ($meY - $areaL) or
                    y + h > ($meY - $areaL)
                ) and
                (
                    y < ($meY + $areaL)
                ) and

                id != $meId and
                id != 0
                ;";
		$objs = $retorno = $db->tableSelect("ew_object",$where);
        foreach($objs as $key => $obj){
            $objs[$key] = GameObject::ofDatabase($obj);
            //echo "[" . $objs[$key]->name . "]";
        }

        //var_dump($objs);
       // var_dump($objs[2]->name);
			 return $objs;

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
