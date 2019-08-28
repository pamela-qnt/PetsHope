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


        <link href="https://fonts.googleapis.com/css?family=Bad+Script&display=swap" rel="stylesheet">

        <title> PetsHope </title>
    </head>

    <script src="assets/library/jquery.min.js"></script>
    <script src="../dist/components/visibility.js"></script>
    <script src="../dist/components/sidebar.js"></script>
    <script src="../dist/components/transition.js"></script>	      
	 

 <!--Menu-->
 <div class="ui vertical masthead center aligned segment">
 	<div class="ui container">
      <div class="ui large gray menu">
      
        <a class="item">Home</a>
        <a class="item" href="produtos.php">Produtos</a>
        <a class="item">Adotar</a>
        <div class="right menu">
         <?php 
                if(!isset($_SESSION['id_usuario'])){ 
          ?>
            <a class="item" href="cadastrar.php">Cadastre-se</a>
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
                            <div class="item">Carrinho</div>
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

   <div class="image">
      <div class="ui blurring inverted dimmer">
        <div class="content">
          <div class="center">
          </div>
        </div>
      </div>
      <img src="images/brinquedos.jpg">
    </div>




  


<table border="1">
    <tr>
        <td align="center">
            Código
        </td>
        <td align="center">
            Evento
        </td>
        <td align="center">
            Descrição
        </td>
        <td align="center">
            Nome da imagem
        </td>
        <td align="center">
            Tamanho
        </td>
        <td align="center">
            Visualizar imagem
        </td>
<td align="center">
            Excluir imagem
        </td>
    </tr>
    <?php
  
    $querySelecao = "SELECT nome_usuario, email, tel_contato, 
  FROM usuario";
  
    while ($aquivos = mysql_fetch_array($resultado)) { ?>
        <td align="center">
        <?php echo $aquivos[‘codigo’]; ?>
    </td>
        <td align="center">
        <?php echo $aquivos['nome_usuario']; ?>
    </td>
        <td align="center">
        <?php echo $aquivos['email']; ?>
    </td>
        <td align="center">
        <?php echo $aquivos['tel_contato']; ?>
    
    </td>
    <td align="center">
        <?php echo '<a href="excluir_imagem.php?id='.$aquivos[‘codigo’].
        '">Imagem '.$aquivos[‘codigo’].'</a>'; ?>
    </td>
    <?php } ?>
</table>
</body>
</html>