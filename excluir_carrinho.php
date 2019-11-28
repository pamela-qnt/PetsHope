<?php
	require 'config.php';
	$id_usuario = $_SESSION['id_usuario'];
	$id_produto = $_GET['id_produto'];
	$acao = $_GET['acao'];

	if (isset($acao) && $acao == 'excluir') {
		$sql = "DELETE FROM carrinho WHERE carrinho . id_usuario_fk = '$id_usuario' and carrinho . id_produto_fk = '$id_produto'"; 

	    $connect->exec($sql);

	    header('Location: carrinho.php');
	}else{
		echo "Algo deu errado.";
		header("location: index.php");
		exit();
	}
?>