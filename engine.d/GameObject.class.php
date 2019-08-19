<?php
	class GameObject{
		//Não e nescesario, o objeto não deve ser instanciado;
		function __construct(){}
		//Criar um novo objeto
		static function add(){
			$id = DB::queryId("insert into ew_go set creation = now();");
			return $id;
		}

		//Listar GOs
		function list($r = ''){
			$sql = "SELECT * FROM ew_go";
			$retorno =  DB::queryObject($sql);
			return E::retornoTipo($retorno,$r);
		}
		//Pegar a GO
		function get($id,$r=""){
			$sql = "SELECT
				ew_go.*,
				ew_label.valor as label
			FROM ew_go
			LEFT JOIN ew_label on ew_go.id = ew_label.id_go
			WHERE id='$id';
			";
			$retorno =  DB::queryObject($sql);
			if (empty($retorno)) return;

			return E::retornoTipo($retorno[0],$r);
		}
}
