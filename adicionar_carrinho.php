	<?php
	require 'config.php';
		$id_prod = $_GET['id_produto'];
		$acao = $_GET['acao'];
		$id_usu = $_SESSION['id_usuario'];
		$valor = $_GET['valor'];
		$qtd = $_POST['qtd_produto'];
		$valor_final = $valor * $qtd;

		if (isset($acao) and $acao == 'adicionar') { //adicionar o produto selecionado ao carrinho - ta funcioando
				$tenta = $connect->prepare('INSERT INTO carrinho (id_usuario_fk, id_produto_fk, qtd_produto, valor_final) VALUES (:id_usuario, :id_produto, :qtd_produto, :valor_final)');
				$tenta->execute(array(
					':id_usuario' => $id_usu,
					':id_produto' => $id_prod,
					':qtd_produto' => $qtd,
					':valor_final' => $valor_final
				));
		}else{
			echo "Algo deu errado.";
			header("location: index.php");
			exit();
		}
		echo "<script type='javascript'>alert('Produto adicionado ao carrinho!');";
		echo "javascript:window.location='carrinho.php';</script>";
		header("location: carrinho.php");
		exit();
?>