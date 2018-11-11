<?php
class Grimorio2{
    function __contruct(){
        
    }
    function ouvir($msg=""){
        //caso esteja sentindo msg = ""
        //caso esteja deigitando um comando, simundo terminal
        if(strlen($msg)>2){if($msg[0] == "."){
            $msg = substr($msg,1);
            return $this->fazer($msg);
        }}
        
        //caso esteja respondendo
        else if($this->respondendo()){
            return "respondendo";
        }
        //caso esteja perguntando
        $com = Dialogo::getByEntrada($msg);
		if(!is_array($com)) {
            //exibe o id do novo dialogo criado
			return $this->dizer("Não foi posivel entender($com)");
		};
        //bagunçar as posiveis saidas encontradas
        shuffle($com);
		if($com[0]["saida"] == "Empty!"){
            //casp a saida esteja vazia
			return $this->dizer("Não foi posivel entender(Empty!)");
		}
        $retorno = $this->fazer($com[0]["saida"]);
        
        return $retorno;
    }
    function dizer($texto){
        return "$texto";
    }
    function perceber(){
        global $me;
        return $me->status();
    }
    
    function fazer($com){
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
            "quest"
        );
        
        $term = new Terminal2($vars,array(), false);
        $retorno = $term->chamada($com);
        $str = "";
        if(is_array($retorno)){
            //falta verificar se o terminal retornou um erro
            //vetor 2
            foreach($retorno as $ret){
				if(is_numeric($ret))
					$str .= " $ret ";
				else if(is_string($ret))
					$str .= $ret;
				else $str .= "[undefineted]";
            }
            return $str;
        }
        return $retorno;
    }
    function pergunta($id){
        global $me;
        $me.setStatus("[perguntando=true]");
    }
    function respondendo(){
        return false;
    }
    //
}
