<?php 
	http_response_code(302);
	header("Content-Type: text/plain");
	header("Location: redirect.txt");
	echo "Redirecionar";
?>