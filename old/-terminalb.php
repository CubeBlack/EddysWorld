
<?php
	include_once("eddysworld_server.php");
	
	if(!isset($_REQUEST["q"])){
		$comStr = "";
	}else {
		$comStr = $_REQUEST["q"];
	}
	
?>
<!doctype html>
<html>
<head>
<title>Teminal[basico]</title>
</head>
<body>
	<header>
		<hgroup>
			<h1 >Terminal Basic<a href="?">o</a></h1>
			<p >Amanda Script Basic Terminal</p>
		</hgroup>
	</header>
	
	<hr>	
	
	<section>
	<form action="">
		<p >Comando</p>
		<p ><input type="text" name="q" width="100%" /><p>
	</form>	
	</section>
	
	<hr>	
	
	<section>
		<h3>
		<?php echo $comStr ?></h3>	
		<pre bgcolor="blue">
<?php $term->chamada($comStr); ?>
		</pre>
	</section>
	
<hr>	
	
	<footer>
	<p >Maked by Daniel Lima</p>	
	</footer>
</body>
</html>



