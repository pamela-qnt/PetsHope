<?php
	//iniciar a sessão
	session_start();

	//dfestrói a sessão
	session_destroy();

	//redirecionar para a pagina inicial em 0 segundos
	print('<meta http-equiv="refresh" content="0;url=index.php">');
?>