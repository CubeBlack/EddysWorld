<?php
include_once "config.php";
include_once "engine.d/E.class.php";
$user = User::getByToken(User::webToken());
//------- pegar ação ----------
$a = (isset($_REQUEST["a"]))?$_REQUEST["a"]:"a";
// -- com --
if($a == "com"){
  $com = (isset($_REQUEST["com"]))?$_REQUEST["com"]:"";
  $retorno = eval($com);
  die();
}
if ($a == "view") {
  echo World::view("json");
  die();
}
?>
<h1>Ação não reconhecida!</h1>
<p>Use as seguintes ações:</p>
<ul>
  <li>Mundo</li>
</ul>
