<?php
	require 'config.php';
	$id_produto = $_GET['id_produto'];
	$acao = $_GET['acao'];

	if(isset($acao) && $acao == 'editar') {

	  	$nome_produto = $_POST["nome_produto"];
	  	$qtd_estoque = $_POST["qtd_estoque"];
	  	$valor = $_POST["valor"];
	  	$desc_produto = $_POST["desc_produto"];

	$sql = "UPDATE produto SET nome_produto = '$nome_produto', qtd_estoque = '$qtd_estoque', valor = '$valor', desc_produto = '$desc_produto' WHERE id_produto = '$id_produto'"; 

	$connect->exec($sql);

	header('Location: gerenciar_produtos.php');
	}

?>