<?php
	session_start();
	$usuario = isset($_SESSION["usuario"]) ? $_SESSION["usuario"] : "";
	$logado = isset($_SESSION["logado"]) && $_SESSION["logado"] == 1 ? 1 : 0;
	if ($logado == 0) $_SESSION["mensagem"] = "Para acessar este conteúdo você precisa antes fazer o login";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Conteúdo Protegido</title>
	<meta charset="utf-8">
	<?php if ($logado == 0) { ?>
	<meta http-equiv="refresh" content="0; url=login.php?redirect=conteudo-protegido.php" />
	<?php } ?>
</head>
<body>
	<?php if ($logado == 1) { ?>
	<div>Bem-vindo, <?php echo $usuario ? $usuario : "visitante"; ?> | <a href="sair.php">sair</a></div>
	<h1>Cuidado, este conteúdo é secreto!</h1>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

	<p>Suas credenciais: <pre>usuario=<?php echo $usuario; ?></pre></p>
	<?php } else { ?>
	<p>Para acessar este conteúdo você precisa estar logado. <a href="login.php">Faça o login</a>.</p>
	<?php } ?>
</body>
</html>