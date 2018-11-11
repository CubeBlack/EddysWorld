<?php
    class Wiki{
        function __construct(){
            
        }
        function listar($rTipo = "arr"){
            global $db;
            $resposta = $db->tableSelect("ew_wikipage","");
            if($rTipo == "json") return json_encode($resposta);
            return $resposta;
        }
        function pageByTitle(){
            
        }
        function pageById($id,$rTipo = "arr"){
            global $db;
            $resposta = $db->tableSelect("ew_wikipage","WHERE id = '$id'")[0];
            if($rTipo == "json") return json_encode($resposta);
            return $resposta;
        }
        function addPage(){
            
        }
        function editPage(){
            
        }
        function hidePage(){
            
        }
    }
