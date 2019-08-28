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
  







<!-- Menu -->

  <div class="ui inverted vertical masthead center aligned segment" style="background-image: url(images/branco.jpg); background-repeat: no-repeat; background-size: 100%">

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
                            <div class="header">Config</div>
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

    <div class="ui text container" style="margin-top: 15%; margin-bottom: 10%; margin-left: 10%">
      <h1 class="ui inverted header" style="font-family: 'Bad Script', cursive; font-size: 110px; color: black">
        PetsHope
      </h1>
      <h2 style="color: black">Tudo para o seu Pet</h2>
      
    </div>

  </div>

  <!-- "Produtos" --> 

  <div class="ui vertical stripe segment" style="margin-top: 2%">
    <div class="ui middle aligned stackable grid container">
      <div class="row">
        <div class="eight wide column">
          <h2 class="ui header" style="font-size: 32px">Texto explicando o produto</h2>
          <h4>Lorem ipsum dolor sit amet consectetur adipiscing elit purus mattis, primis luctus curabitur metus mauris proin tempus massa himenaeos, montes quisque sociosqu consequat auctor sapien nam sem. Tempor sagittis suscipit eu erat aliquam sapien posuere finibus, dictum blandit enim dignissim class vivamus elit maximus cubilia, volutpat consequat euismod per pharetra lacus hac.</h4>
        </div>
          <div class="six wide right floated column" >
            <a href="https://google.com" class="ui medium image">
            <img src="images/brinquedos.jpg" class="ui large bordered rounded image">
            </a>
          </div>
      </div>
    </div>
  </div>
  

<!-- Grid com três fotos -->

    <div class="ui three cards" style="margin-left: 5%; margin-right: 5%; margin-top: 5%">
     <div class="card" style="background-image: url(images/gatos_cama.jpg); background-size: 100%; background-repeat: no-repeat;">
        <a href="https://www.google.com/"><div class="image">
           <h2 style="font-family: 'Bad Script', cursive; font-size: 25px; color: black; margin-top: 98%; text-align: center; background-color: white;">Camas</h2>
        </div></a>
      </div>

      <div class="card"  style="background-image: url(images/comedouro.png); background-size: 100%; background-repeat: no-repeat;">
        <a href="https://www.google.com/"><div class="image">
          <h2 style="font-family: 'Bad Script', cursive; font-size: 25px; color: black; margin-top: 98%; text-align: center;">Comedouros</h2>
        </div></a>
      </div>

      <div class="card" style="background-image: url(images/gato_coleira.jpg); background-size: 100%; background-repeat: no-repeat;">
         <a href="https://www.google.com/"><div class="image">
          <h2 style="font-family: 'Bad Script', cursive; font-size: 25px; color: black; margin-top: 98%; text-align: center; background-color: white">Acessórios</h2>
        </div></a>
      </div>
    </div>









