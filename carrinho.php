<div style='background-color: #3b3b3b; padding-top: 1%; '>
	<?php
		include("cabecalho.php");
		if (!isset($_SESSION['id_usuario'])) {
            header("location: index.php");
        }
		//require "config.php";
		echo "</br></br></br>";
		echo "<h1 style='margin-left: 11%; color: white; margin-bottom: 1%; font-size: 330%;'>Carrinho</h1>";
echo "</div>"; //fecha a div da primeira linha

		$id_usu = $_SESSION['id_usuario'];

		//select de todos os produtos no carrinho do usuario logado - ta funcionando
		try {
			$query = 'SELECT id_produto, nome_produto, qtd_estoque, desc_produto, valor, img_produto, id_carrinho, qtd_produto, valor_final FROM produto, carrinho, usuario WHERE id_usuario_fk = id_usuario and id_produto_fk = id_produto and id_usuario ="' .$id_usu. '"';
			$stmt = $connect->prepare($query);
			$result = $stmt->execute(array(
					$id_produto = ':id_produto',
					$nome_produto = ':nome_produto',
					$qtd_estoque = ':qtd_estoque',
					$desc_produto = ':desc_produto',
					$valor = ':valor',
					$img_produto = ':img_produto',
					$id_carrinho = ':id_carrinho',
					$qtd_produto = ':qtd_produto',
					$valor_final = ':valor_final'
				));
			while ($row = $stmt->fetch()) {
				$p = $row['id_produto'];

		?>


		<div style="border: solid; border-width: 1px; border-radius: 4px; margin-bottom: 0.5%; margin-top: 2%; margin-left: 20%; width: 60%; height: 10%; float: left; padding: 0.5%;">

			<img src="<?php print_r($row['img_produto']); ?>" style="width: 10%; height: 100%; border-radius: 2px; margin-bottom: 3%; float: left;">

			<div style="float: left; font-size: large; margin-left: 5%; margin-top: 1%;">
				<?php
				print_r("<b><a href='produto_ind.php?id_produto=$p' style='text-decoration: none; color: black;'>" . $row['nome_produto'] . "</a></b><br>");

				print_r("R$" . $row['valor'] . " * " . $row['qtd_produto'] . " = " . "<b style='color: green;'>" . $row['valor_final'] . "</b>");
				?>
			</div>

			<a href="excluir_carrinho.php?acao=excluir&id_produto=<?php echo $p;?>" class="ui red button" style="margin-left: 5%; float: right; margin-top: 1.5%;">Remover</a>


		</div>

		

		<?php
				}
			exit;
		}catch(PDOException $e) {
		echo $e->getMessage();
		}
		?>
<?php
	include("rodape.php");
?>