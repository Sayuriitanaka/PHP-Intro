<?php
	session_start();

	$usuario = isset($_SESSION["usuario"]) ? $_SESSION["usuario"] : "";
	$logado = isset($_SESSION["logado"]) && $_SESSION["logado"] == 1 ? 1 : 0;

	$redirect = isset($_GET["redirect"]) ? $_GET["redirect"] : "home.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<?php if ($logado == 1 && $redirect) { ?>
	<meta http-equiv="refresh" content="0; url=<?php echo $redirect; ?>" />
	<?php } ?>
</head>
<body>
	<?php if ($logado == 1 && $redirect) { ?>
	<p><a href="<?php echo $redirect; ?>">Redirecionando...</a></p>
	<?php 
	} else { 
		$mensagem = isset($_SESSION["mensagem"]) ? $_SESSION["mensagem"] : "";
		unset($_SESSION["mensagem"]);
	?>
	<div id="mensagem"><?php echo $mensagem; ?></div>
	<form action="autentica.php?redirect=<?php echo $redirect; ?>" method="POST">
		<fieldset>
			<legend>Login</legend>
			<label>Usuário</label> <input type="text" name="usuario"><br />
			<label>Senha</label> <input type="password" name="senha"><br />
			<input type="submit" name="acao" value="Entrar">
		</fieldset>
	</form>
	<?php } ?>
</body>
</html>