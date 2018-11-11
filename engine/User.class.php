<?php
/*
//ter todos estes dados na memoria do servidor é totalmente desnecesario
melhor gastar procesamento pra "pegalos" toda vez que nescesario.

*/
	class User{
		const 
			tUser_excluido = -1,
			tUser_banido = 0,
			tUser_anonymus = 1,
			tUser_player = 2,
			tUser_gm = 3,
			tUser_developer = 4
		;
		
		public $id;
		public $acesso;
		public $nick;
		public $email;
		public $tUser;
		public $personagem;
		
		function __construct(){
			global $dbl;
			if(isset($dbl->get()["user"])){
				$dUser = $dbl->get()["user"];
				$this->id = $dUser->id;
				$this->nick = $dUser->nick;
				$this->email = $dUser->email;
				$this->tUser = $dUser->tUser;
				$this->personagem = $dUser->personagem;
			}
			else{
				$this->id = 0;
				$this->nick = "Anonymus" . rand(0,9999);
				$this->email = "none";
				$this->tUser = $this::tUser_anonymus;
				$this->personagem = 0;
			}
			$this->acesso = time();
			//var_dump($this);
			$dbl->insert("user",$this);
			
		}
        function perId(){
            return $this->personagem;
        }
		function logued(){
			return $this->id > 0;
		}
		function login($user, $password){
			global $dbl, $db,$grimorio;
			//seguranca do banco de dados
			$user = urlencode($user);
			$password = urldecode($password);
			
			$retorno = $db->tableSelect(Database::userTb,"where nick = '$user' or email = '$user'");
			if(empty($retorno)) return false;
			if($retorno[0]["password"] == urldecode($password)){
				$this->id = $retorno[0]["id"];
				$this->nick = $retorno[0]["nick"];
				$this->email = $retorno[0]["email"];
				$this->tUser = $retorno[0]["tipo"];
				$this->personagem = $retorno[0]["personagem"];
				$this->acesso = time();
				
				$dbl->insert("user",$this);
				//$grimorio->weitClear();
				return true;
			}
			return $this;
		}
		function get ($rTipo = "arr") {
			if($rTipo=="json") {
				return json_encode($this);			
			}
			return $this;
		}
		function novo(){
			
		}
		function sair(){
			global $dbl;
			return $dbl->clear();
			
		}
		function loginByWeit(){
			$user = $grimorio->getWeited("user");
			$pass = $grimorio->getWeited("pass");
			$this->login($user,$pass);
		}
        public $heelp = "
=== User(user) ===
.perId() as intiger
.logued() as boolean
.login() as string[Ok!|Fail!]
.get() as array
.novo()
.sair()
.loginByWeit()
        ";
	}
	

