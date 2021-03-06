<?php
/*
	==== Terminal3 ======
	Nova veção do terminal parar adicionar clausulas de saida
	<comando>|<clausula>
	*"user|X;"
		para por na pilha de memoria
	*user|off;
		para não ser retornado o valor do retorno

	outra atualização é a utilização de variaveis como parametro
		*gri.dizer([[X]]);
			Para utilizar o ultimo valor da pilha de memoria


*/
global $user;
class Terminal3{
	public function __construct($vars,$echo=true, $welcome=""){
		$this->vars = $vars;
		$this->echo = $echo;
		if($welcome == "") $this->welcome = "Welcome to Amanda Script Terminal";
			else $this->welcome = $welcome;
	}
	public function chamada($com) {
		if($com == "" || $com == " ") {
			echo $this->welcome;
			return $this->welcome; 		
		}		
		
		$com = Terminal3::parce($com);
		$com = Terminal3::call($com,$this->vars);
		if($this->echo) {
			//exibir ou guardar depende da clausula
			if(is_string($com)) echo $com;
			else if(is_object($com)){
				if(isset($com->help))				
					echo $com->help;
				else
					echo "Is object(help don't fould).";
			} 
			else var_dump($com);

		}
		return $com;
	}
	static function parce($comStr) {
			$comArr = [];
			$params = [];
			$nods = [];
			$aCom = 0;
			$get = "";
			$tGet = "node";


			//--------
			for($i = 0; $i < strlen($comStr);$i++){
				//----- getnos --
				if($tGet=="node") {
					//ignorar linha e espacos
					if($comStr[$i] == " "||$comStr[$i] == "\n"){
						continue;
					}
					if($comStr[$i]==".") {
						if($get!="") $nods[] = $get;
						$get = "";
						continue;
					}
					if($comStr[$i]=="(") {
						if($get!="") $nods[] = $get;
						$comArr[$aCom]["nodes"] = $nods;
						$comArr[$aCom]["tipo"] = "funcion";
						$tGet = "param";
						$get = "";
						continue;
					}
					if($comStr[$i]==";") {
						if($get!="") $nods[] = $get;
						$comArr[$aCom]["nodes"] = $nods;
						$get = "";
						$nods = [];
						$params = [];
						$aCom++;
						continue;
					}
					//mudar para pegar a clausula de saida
					if ($comStr[$i]=="|") {
						$tGet = "clausula";
						continue;
					}
				}
				//----- params --
				if($tGet=="param") {
					if($comStr[$i]==",") {
						if($get!="") $params[] = $get;
						//$params[] = $get;
						$get = "";
						continue;
					}
					if($comStr[$i]==")") {
						if($get!="") $params[] = $get;
						$comArr[$aCom]["params"] = $params;
						$tGet = "node";
						$get = "";
						continue;
					}
					///------ Verificar se é parametro String
					if(strlen($get)>7){
						if(
							$comStr[$i-8] == "s"&
							$comStr[$i-7] == "t"&
							$comStr[$i-6] == "r"&
							$comStr[$i-5] == "B"&
							$comStr[$i-4] == "e"&
							$comStr[$i-3] == "g"&
							$comStr[$i-2] == "i"&
							$comStr[$i-1] == "n"&
							$comStr[$i-0] == "\""){
							$tGet = "paramStr";
							$get = "";
							continue;

							//echo "+++";
						}
					}
					//------
				}
				//verificar se o parametroString chegou ao fim
				if($tGet=="paramStr") {
					if(strlen($comStr)>7){
						if(
							$comStr[$i-6] == "\""&
							$comStr[$i-5] == "s"&
							$comStr[$i-4] == "t"&
							$comStr[$i-3] == "r"&
							$comStr[$i-2] == "E"&
							$comStr[$i-1] == "n"&
							$comStr[$i-0] == "d"){
							$tGet = "param";
							$get = substr($get,0,-6);
							//if($get!="") $params[] = $get;
							$params[] = $get;
							$get = "";
							continue;
						}
					}
				}
				$get .=  $comStr[$i];
			}
			//pegar parametro
			if($tGet=="clausula") {
				if ($comStr[$i]=="|") {

				}
				if ($comStr[$i]==";") {
					$tGet = "node";
				}
			}
			//ends
			if($comStr[strlen($comStr)-1]!=";") {
				if($tGet=="node") {
					if($get!="") $nods[] = $get;
					$comArr[$aCom]["nodes"] = $nods;
				}
				if($tGet=="param") {
					if($get!="") $params[] = $get;
					$comArr[$aCom]["params"] = $params;
				}
				if($tGet=="clausula") {
					//if($get!="") $clausula[] = $get;
					//$comArr[$aCom]["clausula"] = $clausula;
				}
			}

			//--------
			return $comArr;
	}
	static function call($coms,$vars=[]) {
		//var_dump($coms);
		//---------- varives globais -----
		foreach($vars as $var){
			global ${$var};
		}
		//-------------------------
		$retorno = [];
		foreach($coms as $keyCom => $com){
			if(!isset($com["tipo"])) $com["tipo"] = "var";
			$var = null;
			//pegar variavel a aprtir dos nos
			foreach($com["nodes"] as $keyNod => $nod){
				//se for o ultimo e for do tipo fun;'ao
				if($com["tipo"] == "funcion"&& $keyNod == sizeof($com["nodes"])-1) {
					continue;
				}
				//se for o primeiro
				if($keyNod == 0) {
					if(!isset(${$nod})) {
						$retorno[] = "Erro = O no $keyNod do comando $keyCom [$nod] não foi reconhecido";
						break;
					}
					$var = ${$nod};
					continue;
				}

				if(!isset($var->{$nod})) {
					$retorno[] = "Erro = O no $keyNod do comando $keyCom [$nod] não foi reconhecido";
					break;
				}
				$var = $var->{$nod};
			}

			//executar funcao

			// ----functions
			$uNod =  $com["nodes"][sizeof($com["nodes"])-1];
			if($com["tipo"] == "funcion") {
				switch(sizeof($com["params"])) {
					case 0: $retorno[] = $var->{$uNod}();
						break;
					case 1: $retorno[] = $var->{$uNod}($com["params"][0]);
						break;
					case 2: $retorno[] = $var->{$uNod}($com["params"][0],$com["params"][1]);
						break;
					case 3: $retorno[] = $var->{$uNod}($com["params"][0],$com["params"][1],$com["params"][2]);
						break;
					case 4: $retorno[] = $var->{$uNod}($com["params"][0],$com["params"][1],$com["params"][2],$com["params"][3]);
						break;
					case 5: $retorno[] = $var->{$uNod}($com["params"][0],$com["params"][1],$com["params"][2],$com["params"][3],$com["params"][4]);
						break;
					case 6: $retorno[] = $var->{$uNod}($com["params"][0],$com["params"][1],$com["params"][2],$com["params"][3],$com["params"][4],$com["params"][5]);
						break;
					case 7: $retorno[] = $var->{$uNod}($com["params"][0],$com["params"][1],$com["params"][2],$com["params"][3],$com["params"][4],$com["params"][5],$com["params"][6]);
						break;
					case 8: $retorno[] = $var->{$uNod}($com["params"][0],$com["params"][1],$com["params"][2],$com["params"][3],$com["params"][4],$com["params"][5],$com["params"][6],$com["params"][7]);
						break;
					default: $retorno[] = "Erro = Numero de parametros nao suportado pelo terminal";
						break;
				}
			}
			elseif($com["tipo"] == "var") {
				$retorno[] = $var;
			}

		}
		if(sizeof($retorno)==0) $retorno = "Empty!";
		if(sizeof($retorno)==1) $retorno = $retorno[0];
		//$retorno["type"] = "RetornoList";
		return $retorno;
	}
}
