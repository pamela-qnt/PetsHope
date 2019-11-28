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

                <a href="index.php" class="item">Home</a>
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

                    <div><a class="item" href="cadastrar_usuario.php">Cadastre-se</a></div>
                    <div><a class="item" href="entrar.php">Entrar</a></div>

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

        <div class="ui text container" style="margin-top: 15%; margin-bottom: 10%; margin-left: 10%">
            <h1 class="ui inverted header" style=" font-size: 110px; color: black">
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
                    <h2 class="ui header" style="font-size: 32px">Nossa motivação é a felicidade!</h2>
                    <h4>Nós da PetsHope sabemos como um animalzinho de estimação pode se tornar um melhor amigo e até um membro da família, afinal eles compartilham os momentos bons e ruins ao nosso lado. Pensando nisso, criamos uma marca que se preocupa com o bem estar dos pets e dos donos, mas sem deixar de lado a estética, sempre com qualidade e bom gosto.</h4>
                </div>
                <div class="six wide right floated column" >
                    <a href="produtos.php?tipo=Para Morder" class="ui medium image">
                        <img src="images/mordedor_xaman.webp" class="ui large bordered rounded image">
                    </a>
                </div>
            </div>
        </div>
    </div>

<!-- Grid com três fotos -->

    <div class="ui three cards" style="margin-left: 5%; margin-right: 5%; margin-top: 5%">
        <div class="card" style="background-image: url(images/gatos_cama.jpg); background-size: 100%; background-repeat: no-repeat;">
            <div class="image">
               <a href="produtos.php?tipo=Camas"><h2 style="font-size: 25px; color: black; margin-top: 98%; text-align: center; background-color: white;">Caminhas</h2></a>
            </div>
        </div>

        <div class="card" style="background-image: url(images/comedouro.jpg); background-size: 100%; background-repeat: no-repeat;">
            <div class="image">
                <a href="produtos.php?tipo=Comedouro"><h2 style="font-size: 25px; color: black; margin-top: 98%; text-align: center; background-color: white">Comedouros</h2></a>
            </div>
        </div>

        <div class="card" style="background-image: url(images/gato_coleira.jpg); background-size: 100%; background-repeat: no-repeat;">
            <div class="image">
                <a href="produtos.php?tipo=Coleira"><h2 style="font-size: 25px; color: black; margin-top: 98%; text-align: center; background-color: white">Coleiras</h2></a>
            </div>
        </div>
    </div>
    <div class="ui three cards" style="margin-left: 5%; margin-right: 5%; margin-top: 5%">
        <div class="card" style="background-image: url(images/guias.jpg); background-size: 100%; background-repeat: no-repeat;">
            <div class="image">
                <a href="produtos.php?tipo=Guia"><h2 style="font-size: 25px; color: black; margin-top: 98%; text-align: center; background-color: white;">Guias</h2></a>
            </div>
        </div>

        <div class="card"  style="background-image: url(images/peitoral.jpg); background-size: 100%; background-repeat: no-repeat;">
            <div class="image">
                <a href="produtos.php?tipo=Peitorais"><h2 style="font-size: 25px; color: black; margin-top: 98%; text-align: center; background-color: white">Peitorais</h2></a>
            </div>
        </div>

        <div class="card" style="background-image: url(images/brinquedo.jpg); background-size: 100%; background-repeat: no-repeat;">
            <div class="image">
                <a href="produtos.php?tipo=Para Morder"><h2 style="font-size: 25px; color: black; margin-top: 98%; text-align: center; background-color: white">Brinquedos</h2></a>
            </div>
        </div>
    </div>
    <div class="ui three cards" style="margin-left: 5%; margin-right: 5%; margin-top: 5%;">
        <div class="card" style="width: 100%;">
            <img src="images/roupa.jpg" alt="" style="width: 100%; height: auto;">
            <a href="produtos.php?tipo=Para Vestir"><h2 style="font-size: 25px; color: black; text-align: center; background-color: white; height: 50%;">Roupas</h2></a>
        </div>
    </div>

    <?php
    include("rodape.php");
    ?>
