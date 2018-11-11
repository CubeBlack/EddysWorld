<META http-equiv="refresh" content="1;">
<?php
require_once("eddysworld_server.php");
$retorno = $atos->onTime();
//var_dump($retorno);
?>
<h1>Time: <?php echo $retorno["time"]?></h1>
<?php if(!isset($retorno["ato"])) {echo "Não existem atos a serem executados!"; }else{?>
<table>
<tr>
<td>[ID]</td>
<td>[AÇÃO]</td>
<td>[RETORNO]</td>
<td>[REMING]</td>
</tr>
<?php foreach($retorno["ato"] as $ato){?>
<tr>
<td><?php echo $ato["id"]?></td>
<td><?php echo $ato["acao"]?></td>
<td><?php echo $ato["retorno"]?></td>
<td><?php echo $ato["reming"]?></td>
</tr>
<?php }}?>
</table>
