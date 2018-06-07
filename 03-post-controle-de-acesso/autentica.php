<?php
	session_start();
	$usuario = isset($_POST["usuario"]) ? $_POST["usuario"] : "";
	$senha = isset($_POST["senha"]) ? $_POST["senha"] : "login.php";

	$redirect = isset($_GET["redirect"]) ? $_GET["redirect"] : "home.php";

	if ($usuario == "usuario" && $senha == "senha") {
		http_response_code(302);
		header("Location: " . $redirect);
		$_SESSION["logado"] = 1;
		$_SESSION["usuario"] = $usuario;
	} else {
		http_response_code(401);
		header("Location: login.php?redirect=" . $redirect);
		$_SESSION["mensagem"] = "Usuário ou senha incorretos";
	}
?>
