<div style='background-color: #3b3b3b; padding-top: 1%; '>
<?php
	include 'cabecalho.php';
	$id_produto = $_GET['id_produto'];
?>
<br><br><br><br>
</div> </div>

<?php

	//pegar o produto pelo número da id - ta funcionando
	try {
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
	<form action="adicionar_carrinho.php?acao=adicionar&id_produto=<?php echo $id_produto;?>&valor=<?php echo $v;?>&qtd_produto=1" method="post" style="margin-bottom: 2%; width: 100%; float: left; margin-left: 8%; padding: 0.5%; margin-top: 2%;">

		<img src="<?php print_r($row['img_produto']); ?>" style="float: left; width: 25%; height: 35%; border: dotted; padding: 0.5%; border-radius: 5px; margin-bottom: 3%; margin-left: 16%; margin-top: 3%;">

		<div style="float: left; margin-left: 5%; margin-top: 3%;">
			<h2><?php print_r($row['nome_produto']); ?></h2>
			<h2> <?php print_r("R$" . $row['valor']); ?> </h2>
			<p><?php print_r($row['desc_produto']); ?></p>

			<input type="number" name="qtd_produto" min="1" max="<?php echo $q;?>" placeholder="1"><br>

			<div class="ui left icon input">
				<input action="add" name="adicionado" type="submit" class="ui primary button" value="Adicionar ao carrinho" style="margin-top: 25%; width: 100%;">
				<i class="cart arrow down" style="color: white;"></i>
			</div>

			<br><br><br>
		</div>
		<div style="margin-left: -9%; bottom: 0; position: absolute;">
				<?php include("rodape.php"); ?>
		</div>

	</form>

	<?php
	}
	exit;
	}
	catch(PDOException $e) {
		echo $e->getMessage();
	}
	
	?>