	<div style='background-color: #3b3b3b; padding-top: 1%; '>
	<?php
		include 'cabecalho.php';
		echo "</br></br></br>";
        if (!isset($_SESSION['id_usuario'])) {
            header("location: index.php");
        }
        echo "<h1 style='margin-left: 11%; color: white; margin-bottom: 1%; font-size: 330%;'>Gerenciar Produtos</h1>";
	?>
	</div>

	<div class="ui eight item menu">
        <a class="item" href="gerenciar_categoria.php?tipo=Para Morder">Brinquedos</a>
        <a class="item" href="gerenciar_categoria.php?tipo=Camas">Camas</a>
		<a class="item" href="gerenciar_categoria.php?tipo=Coleira">Coleira</a>
        <a class="item" href="gerenciar_categoria.php?tipo=Comedouro">Comedouro</a>
        <a class="item" href="gerenciar_categoria.php?tipo=Guia">Guia</a>
        <a class="item" href="gerenciar_categoria.php?tipo=Peitorais">Peitorais</a>
        <a class="item" href="gerenciar_categoria.php?tipo=Para Vestir">Roupas</a>
        <a class="item" href="gerenciar_produtos.php">Todos</a>
	</div>

	<?php
        try {
            $query = 'SELECT id_produto, nome_produto, qtd_estoque, desc_produto, valor, img_produto FROM produto';
            $stmt = $connect->prepare($query);
            $result = $stmt->execute(array(
                    $id_produto = ':id_produto',
                    $nome_produto = ':nome_produto',
                    $qtd_estoque = ':qtd_estoque',
                    $desc_produto = ':desc_produto',
                    $valor = ':valor',
                    $img_produto = ':img_produto',
                    $desc_tipo_prod = ':desc_tipo_prod'
                ));
            while ($row = $stmt->fetch()) {
                $id = $row['id_produto'];
    ?>
                <div style="border: dashed; border-width: 1px; border-radius: 2px; margin-bottom: 2%; width: 25%; float: left; margin-left: 6%; padding: 0.5%; margin-top: 2%;">

                    <img src="<?php print_r($row['img_produto']); ?>" style="width: 100%; height: 35%; border-radius: 2px; margin-bottom: 3%;">

                    <?php
                    print_r("<b><a href='produto_ind.php?id_produto=$id' style='text-decoration: none; color: black;'>" . $row['nome_produto'] . "</a></b><br><br>");
                    echo "<br>";

                    print_r("R$" . $row['valor']);
                    echo "<br>";
                    ?>

                    <div class="ui buttons" style="align-items: center;">
	                    <a href="gerenciar_editar.php?id_produto=<?php echo $id; ?>&acao=editar" class="ui button" style="margin-top: 5%; margin-bottom: -5%;">Editar</a>
	                    <div class="or" data-text="ou"></div>
	                    <a href="gerenciar_excluir.php?id_produto=<?php echo $id;?>&acao=excluir" class="ui negative button" style="margin-top: 5%; margin-bottom: -5%;">Excluir</a>
					</div>



                    <?php
                    echo "<br><br><br>";
                    ?>

                </div>
        <?php
            }
            exit;
        }
        catch(PDOException $e) {
            echo $e->getMessage();
        }
    ?>