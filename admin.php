<?php
	include_once "config.php";
	include_once "engine.d/E.class.php";

  $a=(isset($_GET["a"]))?$_GET["a"]:"";
?>
<!DOCTYPE html>
<html lang="br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admim</title>
  </head>
  <body>
    <h2>Administrar Sistema</h2>
    <fieldset>
      <legend>Banco de Dados</legend>
      <p>
        <a href="?a=autoconfigdb">Resetar DB</a>
        <?php
          if ($a == "autoconfigdb") {
            echo DB::autoConfig();
          }
        ?>
      </p>
      <p>
        <a href="?a=backupdb">Efetuar Beckup</a>
        <?php
          if ($a == "bekupdb") {
            echo DB::beckup();
          }
        ?>
      </p>
    </fieldset>
    <fieldset>
      <legend>b</legend>
      aa
    </fieldset>
  </body>
</html>
