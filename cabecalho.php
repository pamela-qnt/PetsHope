<?php
		require 'config.php';
?>
<!DOCTYPE html>
	<html>
		<head>

				<!-- LINK's NECESSÁRIOS --> 

				<link rel="stylesheet" href="semantic.min.css" type="text/css">
				<link rel="stylesheet" src="cabecalho.css" type="text/css"></link>

				<link rel="sortcut icon" href="images/favicon.png" type="image/png"/>

				<title> PetsHope </title>
		</head>
	<div>
		<div>
			<div class="ui container" style="margin-top: 1%;">
			<div class="ui large gray menu">
			
				<a class="item" href="index.php">Home</a>
			<?php
                if (isset($_SESSION['id_tipo_usuario_fk']) && $_SESSION['id_tipo_usuario_fk'] == '2') {
            ?>
                    <a class="item" href="gerenciar_produtos.php">Gerenciar Produtos</a>
                    <a class="item" href="cadastrar_produto.php">Cadastrar Produto</a>
            <?php
                }
            ?>
				<div class="right menu">
				<?php 
					if(!isset($_SESSION['id_usuario'])){ 
				?>
						<a class="item" href="cadastrar_usuario.php">Cadastre-se</a>
						<a class="item" href="entrar.php">Entrar</a>

				<?php
					}else{
				?>
						<a class="item">Bem vindo(a) <?php echo $_SESSION['nome_usuario']?></a>
						<a href="carrinho.php" class="item">Carrinho</a>
						<a href="perfil.php" class="item">Perfil</a>  
						<a href="logout.php" class="item">Sair</a>
				<?php
					}
				?>
				</div>
			</div>
		</div>
	</div>  