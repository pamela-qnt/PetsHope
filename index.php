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

    <script src="assets/library/jquery.min.js"></script>
    <script src="../dist/components/visibility.js"></script>
    <script src="../dist/components/sidebar.js"></script>
    <script src="../dist/components/transition.js"></script>
  
    <div class="pusher" >
      <div class="ui inverted vertical masthead center aligned segment cabecalho" style="padding-bottom: 38%; background-image: url(images/happy.jpg); background-repeat: no-repeat; ">

        <div class="ui container" style="width: 80%; ">
          <div class="ui large secondary inverted pointing menu" style="margin-top: -2%;">
            <a class="toc item">
              <i class="sidebar icon"></i>
            </a>
            <a href="index.php" class="active item">Home</a>
            <a class="item">Produtos</a>
            <a class="item">Adoção</a>
            <div class="right item">
            <?php 
                if(!isset($_SESSION['id_usuario'])){ 
            ?>

                <div><a class="ui inverted button" href="entrar.php">Log in</a></div>
                <div><a class="ui inverted button" href="cadastrar.php">Sign Up</a></div>

            <?php
                }else{
            ?>
                    <div class="ui icon top left simple dropdown">
                        <i class="user outline icon" style="width: 150%; margin-bottom: 2%;">
                            <h5 style="float: right;">
                                <?php
                                    echo $_SESSION['nome_usuario'];
                                ?>
                            </h5>
                        </i>
                        <div class="menu">
                            <div class="header">Configurações</div>
                            <a class="item" href="perfil.php">Perfil</a>
                            <div class="item">Carrinho</div>
                            <div class="item">Editar</div>
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
  
  

<div class="ui four cards" style="margin-top: 5%; margin-left: 5%; margin-bottom: 5%">
  <div class="ui card">
    <div class="image">
      <img src="images/utilitarios.webp" >
    </div>
    <div class="content">
      <div class="header">Comedouros</div>
      <div class="meta">
        <a class="group">Ver mais</a>
      </div>
      <div class="description">Comedouros versáteis, úteis e lindos para seu animal, confira mais produtos como este em nosso site!</div>
    </div>
    <div class="extra content">


      <div class="ui animated fade button" tabindex="0" style="margin-left: 50%; width: 50%">
  <div class="visible content">12.99</div>
  <div class="hidden content">
   Adicionar ao Carrinho
  </div>
</div>
    </div>
  </div>

   <div class="ui card" style="margin-left: 7%">
    <div class="image">
      <img src="images/acessorios.png">
    </div>
    <div class="content">
      <div class="header">Acessórios</div>
      <div class="meta">
        <a class="group">Ver mais</a>
      </div>
      <div class="description">Deixe seu animal com seu estilo!</div>
    </div>
    <div class="extra content">
      <div class="ui animated fade button" tabindex="0" style="margin-left: 50%; width: 50%">
  <div class="visible content">12.99</div>
  <div class="hidden content">
   Adicionar ao Carrinho
  </div>
</div>
    </div>
  </div>

  <div class="ui card" style="margin-left: 7%">
    <div class="image">
      <img src="images/brinquedos.jpg">
    </div>
    <div class="content">
      <div class="header">Brinquedos</div>
      <div class="meta">
        <a class="group">Meta</a>
      </div>
      <div class="description">One or two sentence description that may go to several lines</div>
    </div>
    <div class="extra content">
           <div class="ui animated fade button" tabindex="0" style="margin-left: 50%; width: 50%">
  <div class="visible content">12.99</div>
  <div class="hidden content">
   Adicionar ao Carrinho
  </div>
</div>
    </div>
  </div>

</div>






<?php
    include 'rodape.php';
?>