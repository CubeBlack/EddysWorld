<?php
/**
 *
 */
class DB{
  //deixa todos os objetos staticos mesmo... da menos merda
  function __construct(){}
    //--------- Caracteres especiais no DB --------------
    static function arrParaDbArr($arr){
      foreach ((array)$arr as $key => $value) {
        $arr[$key] = (is_string($value))?urlencode($value):DB::arrParaDbArr($value);
      }
      return $arr;
    }
    static function dbArrParaArr($arr){
      foreach ((array)$arr as $key => $value) {

        $arr[$key] = (is_string($value))?urldecode($value):DB::dbArrParaArr($value);
      }
      return $arr;
    }
    //-----------------------
    Static function conect(){
      try {
          $db = new PDO(
              "mysql:host=".DBHOSTNAME.";dbname=".DBHOSTDBNA."",
              DBHOSTUSER,
              DBHOSTPASS
          );
          $txtQuery = "select now()";
      } catch (PDOException $e) {
          if(SHOWDBASEERROR){
            $msg = "Erro ao buscar informações do sistema.\n";
            $msg .= "{$e->getMessage()}";
            Page::error($msg);
          }else {
            Page::error("Erro ao conectar com o banco de dados");
          }
      }
      return $db;
    }
    //Retorna tabela
    static function query($query){
      if(SHOWDBASEQUERY)
          echo "<span style='color:green'>[dbQuery|$query]</span>";
      $db = DB::conect();
      //----------- executar Query ---------------
      $results = $db->query($query);
      //-------------- tratar o erro ---------------
      $erro = $db->errorInfo();
      if ($erro[0] != "00000") {
        if(SHOWDBASEERROR){
          $msg = "Erro ao buscar informações do sistema.\n";
          $msg .= "$query\n";
          $msg .= "{$erro[1]}:{$erro[2]}";
          Page::error($msg);
        }else {
          Page::error("Erro ao buscar informações do sistema.","E.class");
        }
      }
      //tornar array
       $retorno = $results->fetchAll();
       //filtar
       //var_dump($retorno);
       $retorno = DB::dbArrParaArr($retorno);
       //
       return $retorno;
    }
    static function queryObject($query){
      if(SHOWDBASEQUERY)
          echo "<span style='color:green'>[dbQuery|$query]</span>";
      $db = DB::conect();
      //----------- executar Query ---------------
      $results = $db->query($query);
      //-------------- tratar o erro ---------------
      $erro = $db->errorInfo();
      if ($erro[0] != "00000") {
        if(SHOWDBASEERROR){
          $msg = "Erro ao buscar informações do sistema.\n";
          $msg .= "$query\n";
          $msg .= "{$erro[1]}:{$erro[2]}";
          Page::error($msg);
        }else {
          Page::error("Erro ao buscar informações do sistema.","E.class");
        }
      }
       $retorno = $results->fetchAll(PDO::FETCH_CLASS);
       return $retorno;
    }
    static function queryId($query){
      if(SHOWDBASEQUERY)
          echo "<span style='color:green'>[dbQuery|$query]</span>";
      $db = DB::conect();
      //----------- executar Query
      $results = $db->query($query);
      //-------------- tratar o erro
      $erro = $db->errorInfo();
      if ($erro[0] != "00000") {
        if(SHOWDBASEERROR){
          $msg = "Erro inserrir informações.\n";
          $msg .= "$query\n";
          $msg .= "{$erro[1]}:{$erro[2]}";
          Page::error($msg);
        }else {
          Page::error("Erro inserrir informações.","E.class");
        }
      }
      //retornar ID
      return $db->lastInsertid();;
    }

    static function queryCount($query){
      if(SHOWDBASEQUERY)
          echo "<span style='color:green'>[dbQuery|$query]</span>";
      $db = DB::conect();
      //----------- executar Query
      $results = $db->query($query);
      //-------------- tratar o erro
      $erro = $db->errorInfo();
      if ($erro[0] != "00000") {
        if(SHOWDBASEERROR){
          $msg = "Erro inserrir informações.\n";
          $msg .= "$query\n";
          $msg .= "{$erro[1]}:{$erro[2]}";
          Page::error($msg);
        }else {
          Page::error("Erro inserrir informações.","E.class");
        }
      }
      //retornar Linhas afetadas
      return $results->rowCount();;
    }

    function autoConfig(){
      $com = DB::conect();
      $sql = file_get_contents("engine.d/database.sql");
			$com->query($sql);
			return "Ok!";
    }

    function bekup(){
      return "faill!";
    }
}
