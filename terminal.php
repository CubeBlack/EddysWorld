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
    <?php
      $com = (isset($_POST["com"]))?$_POST["com"]:"";
     ?>
    <form class="" action="" method="post">
      <textarea name="com" rows="8" cols="80"><?php echo $com ?></textarea>
      <input type="submit" name="" value="Executar">
    </form>
      <h2>Execução</h2>
      <div class="return">
<?php
        require_once 'config.php';
        include_once "engine.d/E.class.php";


        $retorno = eval($com);
      ?>
    </div>
      <h2>Retorno</h2>
      <div class="return">
<?php
        if (is_string($retorno)) echo $retorno;
          else var_dump($retorno);

      ?>
    </div>
  </body>
</html>
