<?php
	require 'config.php';
	$id_produto = $_GET['id_produto'];
	$acao = $_GET['acao'];

	if (isset($acao) && $acao == 'excluir') {
		$sql = "DELETE FROM produto WHERE produto . id_produto = '$id_produto'"; 

		$connect->exec($sql);

		header('Location: gerenciar_produtos.php');
	}

?>