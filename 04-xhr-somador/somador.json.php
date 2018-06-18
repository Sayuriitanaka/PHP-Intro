<?php
	header("Content-Type: application/json; charset=utf8");
	$a = isset($_GET["a"]) ? $_GET["a"] : 0;
	$b = isset($_GET["b"]) ? $_GET["b"] : 0;
	$c = $a + $b;
?>
{
	"a": <?php echo $a; ?>,
	"b": <?php echo $b; ?>,
	"c": <?php echo $c; ?>
	
}