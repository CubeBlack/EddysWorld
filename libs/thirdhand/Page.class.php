<?php
class Page{
	//----------- publicos----------------
	function __construct(){
		//inniciar valores
		$this->otherHeaders = [];
		$this->navArr = [];
		$this->content = "Empty: Nenhum conteudo foi adicionado";
		$this->name = "Empty: pagina não nomeada";
	}
	//adicionar nome
	public function setName($nome){
		$this->name = $nome;
	}
	//adicionar conteudo a pagina
	public function setContent($content){
		$this->content = $content;
	}
	//criar menu
	public function menuMake(){
		$navHTML = "";
		foreach ($this->navArr as $key => $i) {
				$i["submenu"] = "";
		    $navHTML .= Page::setTemplate("nav_item",$i);
		}
		return $navHTML;

	}
	/// adicionar item ao menu
	public function menuAddItem($label="Empty!", $link="#",$level=0){
		$n = [
			"label"=>$label,
			"link"=>$link,
			"level"=>$level
		];
		$this->navArr[] = $n;
		return true;
	}
	//exibir pagina
	public function write(){
		$d = [
			"page"=>$this->name,
			"header" => "\n".implode("\n",$this->otherHeaders),
			"nav"=> "\n" . $this->menuMake(),
			"content"=> "\n" . $this->content
		];

		echo Page::setTemplate("page",$d);
	}
	//--------- staticos -------------
		static function setTemplate($template,$valor=array()){
		$file = TEMABASEPATH."/".TEMANAME.".d/{$template}.tem.html";
		//verificar se o arquivo existe
		if(!file_exists($file)) Page::error("Template not fould<br>$file", "setTemplate()");
    //pegar o conteudo do arquivo
    $str = file_get_contents($file);
    if(is_string($valor)) "[$valor]\n";

    //verificar se o template está vazio
		if($str == "") Page::error("Template is empty<br>$file", "Page::setTemplate()");
		//exibir no me do artquivo
		if(SHOWSOURCENAME){
			echo "[page_template|$file] ";
		}

		// -- carregar  conteudo
    if(is_string($valor)){
    	$valor = ["value"=>$valor];
    }
    //Valores padrão
    $valor["TEMAPATH"] = TEMABASEPATH."/".TEMANAME.".d/";
    $valor["LIBSPATH"] = LIBSPATH;

    //Trocar keys pelos valolres
    foreach ($valor as $key => $dado) {
      $str = str_replace('{{'.$key.'}}', $dado, $str);
      //echo "[$key|$dado]";
    }
    //var_dump($str);
    return $str;
	}

	static function error($msg,$titulo="Erro"){
		echo "<pre><h2>Thirt Hand Error: $titulo</h2>\n<p>$msg</p>";
		die();
	}
	function addHeader($header){
		$this->otherHeaders[] = $header;
		//var_dump($this->otherHeaders);
	}
}
