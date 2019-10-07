    <?php
    require 'config.php';
?>
<!DOCTYPE html>
  <html>
    <head>

        <!-- LINK's NECESSÁRIOS --> 

        <link rel="stylesheet" href="semantic.min.css" type="text/css">
        <link rel="stylesheet" src="cabecalho.css" type="text/css"></link>

        <link rel="sortcut icon" href="imagens/favicon.png" type="image/png"/>

        <title> PetsHope </title>
    </head>
  <div>
    <div>
      <div class="ui container" style="margin-top: 1%;">
      <div class="ui large gray menu">
      
        <a class="item" href="index.php">Home</a>
        <a class="item" href="produtos.php">Produtos</a>
        <a class="item">Adotar</a>
        <div class="right menu">
         <?php 
                if(!isset($_SESSION['id_usuario'])){ 
          ?>
            <a class="item" href="cadastrar_usuario.php">Cadastre-se</a>
            <a class="item" href="entrar.php">Entrar</a>

         <?php
                }else{
            ?>
                    <div class="ui icon top left simple dropdown" style="color:black">
                        <i class="user icon" style="width: 110%; margin-top: 19%; margin-left: -35%">
                            <h5 style="float: right;">
                                <?php
                                    echo $_SESSION['nome_usuario'];
                                ?>
                            </h5>
                        </i>
                        <div class="menu">
                            <a class="item" href="perfil.php">Perfil</a>
                            <a class="item">Carrinho</a>
                            <a class="item">Editar</a>
                            <a class="item" href="logout.php">Sair</a>
                        </div>
                    </div>
            <?php
                }
            ?>
        </div>
      </div>
    </div>
  </div>  
