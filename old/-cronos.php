<META http-equiv="refresh" content="1;">
<?php
require_once("eddysworld_server.php");
$retorno = $atos->onTime();
//var_dump($retorno);
?>
<h1>Time: <?php echo $retorno["time"]?></h1>
<p><a href=".">Voltar</a></p>
<?php if(!isset($retorno["ato"])) {echo "Não existem atos a serem executados!"; }else{?>
<table border="1">
<tr>
<td>ID</td>
<td>ATOR</td>
<td>STATUS</td>
<td>AÇÃO</td>
<td>RETORNO</td>
<td>REMING</td>
</tr>
<?php foreach($retorno["ato"] as $ato){?>
<tr>
<td><?php echo $ato["id"]?></td>
<td><?php echo $ato["ator"]?></td>
<td><?php echo $ato["tag"]?></td>
<td><?php echo $ato["acao"]?></td>
<td><?php var_dump($ato["retorno"])?></td>
<td><?php echo $ato["reming"]?></td>
</tr>
<?php }}?>
</table>
