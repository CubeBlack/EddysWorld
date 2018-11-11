<?php
class Config{
  public function __construct(){
        $this->message_token = "EAAewovCZBxXEBANZCv46Es8nmdMUU2ZA26y5aZBq7ZAc8QFtZAlVI4POUrzTQLiZAkNpHmfBV5SNHPyErLjjeMPHX2qVSlZBufZBBvUkrbwTC5p6P40ZAwEnfy8ILhonb0Y9hbvJKgfV1ha4mcXrzOjGU4tVQSh0D2s0QZBZA2iJoZB1eOed8WtvxPZBGb";
      $this->message_webhookcode = "mamaeamameurevolver";
	if(file_exists("../config_server.php")){
		require_once "../config_server.php";
		$this->show_error = true;
		//--------- banco de dados
		$this->db_host = $config_db_host;
		$this->db_user = $config_db_user;
		$this->db_password = $config_db_password;
		$this->db_name = $config_db_name;
		return;
	 }
	 else{
		$this->show_error = true;
		//--------- banco de dados
		$this->db_host = "localhost";
		$this->db_user = "root";
		$this->db_password = "";
		$this->db_name = "cubeblack";
	 }
	 $this->show_error = true;
    //--------- Error
		if($this->show_error){
			ini_set('display_errors',1);
			ini_set('display_startup_erros',1);
			error_reporting(E_ALL);
		}
			
  }
	public function auto(){
		global $db;
		return $db->autoConfig();
	}
	public function help(){
		return <<<'EOT'
>> class Config(config)
.show_error - Bool - caso verdadeiro, os erros são exibidos
.db_host
.db_user
.db_password
.db_name

.auto() - Atalho para db.autoConfig()
EOT;
	}
}
