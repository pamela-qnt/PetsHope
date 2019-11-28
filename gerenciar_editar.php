<div style='background-color: #3b3b3b; padding-top: 1%; '>
<?php
	include 'cabecalho.php';
	$id_produto = $_GET['id_produto'];
	$acao = $_GET['acao'];
	echo "<h1 style='margin-left: 11%; color: white; margin-bottom: 1%; font-size: 330%;'>Editar Produto</h1>";
?>
<br>
</div> </div>

<?php
	if(isset($acao) && $acao == 'editar') {
		//pegar o produto pelo número da id - ta funcionando
			$query = 'SELECT id_produto, nome_produto, qtd_estoque, desc_produto, valor, img_produto FROM produto WHERE id_produto ="' .$id_produto. '"';
			$stmt = $connect->prepare($query);
			$result = $stmt->execute(array(
				$nome_produto = ':nome_produto',
				$qtd_estoque = ':qtd_estoque',
				$desc_produto = ':desc_produto',
				$valor = ':valor',
				$img_produto = ':img_produto',
			));
		while ($row = $stmt->fetch()) {
			$v = $row['valor'];
			$q = $row['qtd_estoque'];

?>
		<form class="ui form" action="gerenciar_editar_help.php?acao=editar&id_produto=<?php echo $id_produto;?>&acao=<?php echo $acao;?>" method="post" style="margin-bottom: 2%; width: 100%; float: left; margin-left: 8%; padding: 0.5%; margin-top: 2%;">

			<img src="<?php print_r($row['img_produto']); ?>" style="float: left; width: 25%; height: 35%; border: dotted; padding: 0.5%; border-radius: 5px; margin-bottom: 3%; margin-left: 10%; margin-top: 3%;">

			<div style="float: left; margin-left: 5%; margin-top: 3%;">
				<h2><?php print_r($row['nome_produto']); ?></h2>
				<b>Nome<br>
					<input class="ui input" type="text" name="nome_produto" value="<?php print_r($row['nome_produto']); ?>"><br>
				</b>

				<b>Descrição<br>
					<input class="ui input" type="text" name="desc_produto" value="<?php print_r($row['desc_produto']); ?>"><br>
				</b>

				<b>Valor<br>
					<input class="ui input" type="text" name="valor" value="<?php print_r($row['valor']); ?>"><br>
				</b>

				<b>Quantidade em Estoque<br>
					<input class="ui input" type="number" name="qtd_estoque" min="1" max="500" value="<?php print_r($row['qtd_estoque']); ?>">
				</b>

					<input action="add" name="adicionado" type="submit" class="ui primary button" value="Confirmar edição" style="margin-top: 10%; width: 100%; "><br><br><br><br>

			</div>

			</form>
			

			

<?php
		}
		
	}	
?>