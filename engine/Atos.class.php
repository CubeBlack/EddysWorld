<?php
    class Atos{
        function onTime($limit = 10){
            $retorno = array();
            $retorno["time"] = time();
            //existem atos que so podem ser executados
            //se chamados pelo usuario expecifico
            $atos = $this->listar();
            foreach($atos as $ato){
                $com =  $ato["atos"];
                $aAto["id"] = $ato["id"];
                
                $aAto["reming"] = $ato["limit"] - time();
               
                $aAto["retorno"] = $this->executar($com);
                $aAto["acao"] = $com;
                $aAto["inicio"] = $ato["inicio"];
                $aAto["limite"] = $ato["limit"];
                
                if($ato["limit"] > 0){
                    if($aAto["reming"] < 0){
                        $this->drop($ato["id"]);
                    }
                }else{
                    $aAto["reming"] = "Indefinited";
                }
                $retorno["ato"][] = $aAto;
            }
            return $retorno;
        }
        function set($ato,$limit){
            //INSERT INTO `ew_atos` (`id`, `atos`, `inicio`, `limit`) VALUES (NULL, 'Empty!', '1538319563', '1538319563');
            global $db;
            $inicio = time();
            if($limit > 0) $limit = $limit + time();
            $query = "INSERT INTO `ew_atos` (`id`, `atos`, `inicio`, `limit`) VALUES (NULL, '$ato', '$inicio', '$limit');";
            $results = $db->mePDO->query($query);
            return $db->mePDO->lastInsertid();
        }
        function setT($ato,$limit){
            
            
        }
        
        function drop($id){
            global $db;
            //DELETE FROM `ew_atos` WHERE `ew_atos`.`id` = 8
            $query = "DELETE FROM `ew_atos` WHERE `ew_atos`.`id` = $id";
            $results = $db->mePDO->query($query);
            
        }
        function update(){
            
        }
        function executar($com){
            $vars = array(
                "help",
                "config",
                "user",
                "gameObject", "go",
                "dialogo",
                "forum",
                "wiki",
                "inert",
                "db",
                "dbl",
                "world",
                "grimorio", "gri",
                "me",
                "term",
                "quest",
                "atos"
            );
            $term = New Terminal2($vars,false);
            return $term->chamada($com);
        }
        function listar($limit = 10){
			global $db;
			$retorno = array();
			$table = $db->tableSelect("ew_atos","");

			return $table;
        }
        public $help = "
=== Atos(atos) ===
.onTime() as print
.set() as bool
.setT()
.drop()
.listat()
";
    }