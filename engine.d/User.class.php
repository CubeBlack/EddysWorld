<?php
if(!isset($_SESSION)){
	session_start();
}
//----
class User {
	function __construct(){}
	static function logued(){
		if(isset($_SESSION["ew_sessao"])) return true;
		return false;
	}
	static function getByToken($token){
		$query = "SELECT
			ew_user.id,
			ew_user.nick,
			ew_user.email
		FROM ew_usersessao
		INNER JOIN ew_user ON ew_usersessao.user_id = ew_user.id
		WHERE ew_usersessao.token = '$token'
		;";
		$user = DB::query($query);
		if(empty($user)) return;
		return $user[0];
	}
	static function logar($user, $password){
		$password = md5("vanessa".$password);
		$query = "SELECT id FROM ew_user WHERE (email = '$user' OR nick = '$user') AND password = '$password'";
		$retorno = DB::query($query);
		if(isset($retorno[0]["id"])){
			User::sessaoWebAdd($retorno[0]["id"]);
			return true;
		}
		false;
	}
	static function add($d){
		$d["senha"] = md5("vanessa".$d["senha"]);
		$d = DB::arrParaDbArr($d);
		$query = "INSERT INTO ew_user SET
			id=null,
			email = '{$d["email"]}',
			password = '{$d["senha"]}',
			nick = '{$d["nick"]}'
		";
		$nId = DB::queryId($query);
		return $nId;
	}
	static function sessaoWebAdd($id){
		$token = User::makeToken();
		//------- Salvar sessão no db ---------
		$query = "INSERT INTO ew_usersessao SET
			user_id = '$id',
			token = '$token',
			tipo = 1
		";
		$id = DB::queryId($query);
		//----- salvar sessao
		$_SESSION["ew_sessao"] = $token;

	}
	function webToken(){
		if(isset($_SESSION["ew_sessao"])) return $_SESSION["ew_sessao"];
		return false;

	}
	function makeToken(){
		return md5(rand().rand().rand().rand()."vanessa".time());
	}
	function sair(){
		session_destroy();
		return true;
	}
}
