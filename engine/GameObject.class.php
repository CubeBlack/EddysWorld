<?php
	class GameObject{
		function __construct(){
			$this->go_id = 0;
			$this->position = new Vector2();
			$this->tamanho = new vector2();
            $this->angle = 0;
		}
		static function add($x,$y,$heigth,$width,$tipo="null"){
			global $db;
			$dados=array("null",$x,$y,$heigth,$width,$tipo);
			$id = $db->tableInsert(Database::objcTb,$dados);
			return $id;
		}
        //deveria ser statico
		public function setPosition($id, $x, $y){
			global $db;
			$query = "UPDATE `ew_object` SET `x` = '$x', `y` = '$y' WHERE `id` = $id;";
			$db->mePDO->query($query);
			return "Ok!";
		}
        public function setAngle($id, $angle){
			global $db;
			$query = "UPDATE `ew_object` SET `a` = '$angle' WHERE `id` = $id;";
			$db->mePDO->query($query);
			return "Ok!";
        }
        //deveria ser statico?
		public function update($id,$x,$y,$w,$h,$tipo){
			global $db;
			$query = "UPDATE `ew_object` SET `x` = '$x', `y` = '$y', `w` = '$w', `h` = '$h', `tipo` = '$tipo' WHERE `id` = $id;";
			$db->mePDO->query($query);
			return "Ok!";
		}
        public function getPosition($indice=""){
            //se o id for 0, retornar posicao zerada
            $retorno = $this->get($this->id)->position;
            if($indice == "x"||$indice == "X")$retorno = $retorno->x;
            if($indice == "y"||$indice == "Y")$retorno = $retorno->y;
            return $retorno;
        }
        public function getAngle(){
            return $this->get($this->id)->angle;
        }
        public function getPositionById($id,$indice=""){
            //se o id for 0, retornar posicao zerada
            $retorno = $this->get($id)->position;
            if($indice == "x"||$indice == "X")$retorno = $retorno->x;
            if($indice == "y"||$indice == "Y")$retorno = $retorno->y;
            return $retorno;
        }
		public function get($id,$rTipo="arr"){
			global $db;
			$retorno = array();
			$obj = $db->tableSelect(Database::objcTb,"WHERE `id`='$id'")[0];
			$retorno = GameObject::ofDatabase($obj);
			if($rTipo=="json") $retorno = json_encode($retorno);
			return $retorno;
		}
		public function drop($id=""){
			global $db;
			$db->rowDrop(Database::objcTb,$id);
			return "Ok!";
		}
		static function findByName(){
			
		}
		static function findByLocation($location = null, $area=null){
            global $db, $me;
            $meId = $me->id();
			$retorno = array();
            // x > [x] , bla, bla, bla
			$table = $db->tableSelect(Database::objcTb,"");
			foreach($table as $key => $row){
                $thisObj = GameObject::ofDatabase($row);
                if($thisObj->go_id == $meId) $thisObj->itsme = true;
                    else $thisObj->itsme = false;
				$retorno[] = $thisObj ;
			}
			return $retorno;
		}
		static function ofDatabase($objArr){
			global $db;
			$nGo = new GameObject();
			
			$nGo->go_id = $objArr["id"];
				$np = new Vector2();
				$np->x = (float)$objArr["x"];
				$np->y = (float)$objArr["y"];
			$nGo->position = $np;
				$nt = new Vector2();
				$nt->x = $objArr["w"];
				$nt->y = $objArr["h"];
			$nGo->tamanho = $nt;
			$nGo->tipo = $objArr["tipo"];
            $nGo->angle = $objArr["a"];
            if($nGo->tipo=="personagem" ){
                //echo "aqui";
                $nGo = Personagem::byDatabase($nGo->go_id,$nGo);
            }
            else if($nGo->tipo=="inert"){
                //echo "ali";
				$nGo = Inert::byDatabase($nGo->go_id,$nGo);
			}
			
            return $nGo;
		}
        function transform($x,$y){
            $pos = $this->getPosition();
            
            $posx = $pos->x+$x;
            $posy = $pos->y+$y;
            
            $this->setPosition($this->id,$posx,$posy);
            return "Ok!";
        }
        function transformById($id,$xAdd,$yAdd){
            $obj = $this->get($id);
            $xOld = $obj->position->x;
            $yOld = $obj->position->y;
            $rad = deg2rad($obj->angle);
            //$rad = number_format(deg2rad($obj->angle),2);
            
            $xNew = $xOld;
            $yNew = $yOld;
            
            
            $yNew = $yOld - ((cos($rad) * $yAdd) + (sin($rad) * $xAdd));
            $xNew = $xOld + ((cos($rad) * $xAdd) + (sin($rad) * $yAdd));

            //echo "($rad)[" . ((cos($rad) * $yAdd) + (sin($rad) * $yAdd)) . "]x[" . ((cos($rad) * $xAdd) + (sin($rad) * $xAdd)) . "]";
            $this->setPosition($id,$xNew,$yNew);
            return "Ok!";
        }
        function translate($x,$y,$status = "translate"){
            global $atos, $me;
            $ator = $me->id;
            $str = "me.transformById({$this->id},$x,$y);";
            //$ato="user;",$limit=0,$ator=0,$status="ato"
            return $atos->set($str,0,$ator,$status);
        }
        function translatById(){
            
        }
        function rotate($angle){
            return $this->getAngle();
        }
        function rotation($angle){
            
        }
        function lookAt($x,$y){
            /*
            double deg = Math.toDegrees(Math.atan(1));
            int ang = Math.round( (float) deg);
            System.out.println(ang);
            */
        }
        function stop(){
            
        }
//------------
public $help = "
=== GameObject === 
";
}
