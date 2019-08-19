<?php
  require_once 'config.php';
  include_once "engine.d/E.class.php";
  $com = (isset($_POST["com"]))?$_POST["com"]:"";

ini_set("highlight.comment", "#008000");
ini_set("highlight.default", "#000000");
ini_set("highlight.html", "#808080");
ini_set("highlight.keyword", "#0000BB; font-weight: bold");
ini_set("highlight.string", "#DD0000");

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Eddy's World Terminal</title>
    <style media="screen">
      .return{
        white-space: pre-wrap;
      }
      textarea{
        width: 100%;
      }
    </style>
  </head>
  <body>
    <h1>Eddy's World Terminal</h1>
    <form class="" action="" method="post">
      <textarea name="com" rows="8" cols="80"><?php echo $com ?></textarea>
      <input type="submit" name="" value="Executar">
    </form>
    <h2>Codigo</h2>
<div class="return"><?php echo highlight_string('<?php '.$com); ?></div>
      <h2>Execução</h2>
<div class="return"><?php $retorno = eval($com); ?>
    </div>
      <h2>Retorno</h2>
      <div class="return"><?php
        if (is_string($retorno)) echo $retorno;
          else var_dump($retorno);

      ?></div>
  </body>
</html>
