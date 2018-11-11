<?php
function __autoload($className){
  $url = "engine/$className.class.php";
  require_once $url;
}
// variaveis globais
$config = new Config();
$dbl = new DataLocal();
$db = new Database ();
$user = new User();
$go = $gameObject = new GameObject();
$inert = new Inert();
$world = new World();
$dialogo = new Dialogo();
$forum = new Forum();
$gri = $grimorio = new Grimorio2();
$wiki = new Wiki();

$me = new Personagem($user->perId());
$quest = new Quest();
$atos = new Atos();
//sempre executar os antos pendentes
//padrão de 10 atospor vez, para não demorar o retorno
//$atos->exe(10);
// Help
$help = " --- Ajuda ---
Variaveis Globais(Objetos):
	* config
	* user
	* gameObject/go
	* inert
	* db
	* world

obs.: Para obter ajuda de uma determinada variavel basta utilizar a funcao `help`
	Exemplo: `user.help()`
";
//$grimorio = new Grimorio();
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
	"quest",
    "atos"
);
//$term = New Terminal($vars);
$term = New Terminal2($vars,true);
