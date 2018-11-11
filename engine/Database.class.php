<?php
	class Database{
		const
			userTb = "ew_user",
			persTb = "ew_pers",
			inerTb = "ew_inert",
			dialogoTb = "ew_dialogo",
			objcTb = "ew_object",
			forumPostTb = "ew_forumpost",
			forumComentTb = "ew_forumcoment"
		;
		function __construct(){
			global $config;
			try {
				$db = new PDO(
					"mysql:host={$config->db_host};dbname={$config->db_name}",
					$config->db_user,
					$config->db_password
				);
				$txtQuery = "select now()";
			} catch (PDOException $e) {
				print "<pre>Error(DBServer::construct)!".$e->getMessage();
				die();
			}
			$this->mePDO = $db;
		}
		public function tableInsert($table,$values){
		  global $error_show;
		  $query = "";
		  $query .= "INSERT INTO `$table` VALUES(";
		  for ($i = 0; $i < count($values) - 1; $i++) {
			if($values[$i] == null||$values[$i] == "null"){
				$query .= "null,";
				continue;
			}
			$query .= "'{$values[$i]}',";
		  }
		  $query .= "'{$values[$i]}'";
		  $query .= ");";
		  $results = $this->mePDO->query($query);
		  
		  return $this->mePDO->lastInsertid();
		}
		public function tableSelect ($table,$parametro){
		  global $config;
		  $query = "
			  SELECT * FROM `$table`
			  $parametro
			  ORDER BY id DESC
			  
		  ";
			//LIMIT 10
		  $results = $this->mePDO->query($query);
		  if($config->show_error){
			$error = $this->mePDO->errorInfo(); 
			echo $error[2];
		  }
		  if(!$results) return false;
		  return $results->fetchAll();
		}
		public function rowDrop($table,$id){
			$query = "DELETE FROM `$table` WHERE `ew_object`.`id` = $id";
			$this->mePDO->query($query);
			return "Ok!";
		}
		function autoConfig(){
			$sql = file_get_contents("engine/database.sql");
			$this->mePDO->Query($sql);
			return "Ok!";
		}
	}
	
