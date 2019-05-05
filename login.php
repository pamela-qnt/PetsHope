<!--<?php

/*	session_start();

	//abre o arquivo que contem o json
	$json = file_get_contents("usuarios.json");

	//converte o conteúdo desse arquivo para array
	$listaUsuarios = json_decode($json, true);

	$login = $_POST['login'];
	$senha = $_POST['senha'];


	foreach($listaUsuarios as $contato) {

	    if ($login == $contato['email'] and $senha == $contato['password']) {
	        $_SESSION['login'] = $login;
	        $_SESSION['nome'] = $contato['name'];
	        $_SESSION['senha'] = $senha;

	        header("location: index.php");
	    } else {
	        print("Senha Incorreta");

	        print('<meta http-equiv="refresh" content="3;url=login.php">');
	    }

	}

?>
--> 
*/