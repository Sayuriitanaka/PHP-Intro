<?php
	$a = isset($_GET["a"]) ? $_GET["a"] : 0;
	$b = isset($_GET["b"]) ? $_GET["b"] : 0;
	$c = $a + $b;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Somador</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>Somador</h1>
	<p>A soma de a=<?php echo $a; ?> e b=<?php echo $b; ?> é c=a+b=<?php echo $c; ?>.</p>
	<form method="GET" action="somador.php" >
		<fieldset>
			<legend>Nova soma</legend>
			<label>a</label> <input type="number" name="a" value="<?php echo $a; ?>" /><br />
			<label>b</label> <input type="number" name="b" value="<?php echo $b; ?>" /><br />
			<input type="submit" name="operacao" value="Somar" />
		</fieldset>
	</form>
</body>
</html>