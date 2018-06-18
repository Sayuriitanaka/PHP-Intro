<?php
header("Content-Type: application/json; charset=UTF-8");
$nome = isset($_GET["nome"]) ? $_GET["nome"] : "Mundo";
?>
{
	"ola": "Olá, <?=$nome?>."
}