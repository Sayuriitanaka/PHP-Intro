<?php
	session_start();
	$usuario = isset($_SESSION["usuario"]) ? $_SESSION["usuario"] : "";
	$logado = isset($_SESSION["logado"]) && $_SESSION["logado"] == 1 ? 1 : 0;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Conteúdo Não Protegido</title>
	<meta charset="utf-8">
</head>
<body>
	<?php if ($logado == 1) { ?>
	<div>Bem-vindo, <?php echo $usuario; ?> | <a href="sair.php">sair</a></div>
	<?php } else { ?>
	<div>Bem-vindo, visitante | <a href="login.php">entrar</a></div>
	<?php } ?>
	<h1>Este conteúdo é liberado!</h1>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

	<p>Para acessar o <a href="conteudo-protegido.php">conteúdo protegido</a> você precisa antes fazer o login. <a href="login.php?redirect=home.php">Faça o login</a>.</p>	
</body>
</html>