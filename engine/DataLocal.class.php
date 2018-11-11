<?php
	class DataLocal{
		function __construct(){
			if(!isset($_SESSION))
				session_start();
			if(isset($_SESSION["DataLocal"])){
				//$this->get();
			}
			else{
				$_SESSION["DataLocal"] = json_encode(array());
			}
		}
        
		function insert($valueName, $value){
			$data = $this->get();
			$data[$valueName] = $value;
			$dblJson = json_encode($data);
			$_SESSION["DataLocal"] = $dblJson;
			return $data;
		}
        function set($valueName, $value){
			$data = $this->get();
			$data[$valueName] = $value;
			$dblJson = json_encode($data);
			$_SESSION["DataLocal"] = $dblJson;
			return $data;
        }
		function get($index=""){
			$dblStr = "";
			$dblStr = $_SESSION["DataLocal"];
			$data = (array) json_decode($dblStr);
            if($index != ""){
                if(isset($data[$index])){
                    $data = $data[$index];
                }
            } 
			return $data;
		}
		function clear(){
			return session_destroy();
		}
        public $help = "
=== DatabaseLocal(dbl) ====
.clear() as string[Ok!, Fail!]
.insert([valuee name],[valuee]) as array // deve ser removido
.set([valuee name],[valuee]) as array
.get() as array
";
	}
