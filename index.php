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
    <script>
    
        $(document).ready(function() {

          // fix menu when passed
            $('.masthead').visibility({
                once: false,
                onBottomPassed: function() {
                    $('.fixed.menu').transition('fade in');
                },
                onBottomPassedReverse: function() {
                    $('.fixed.menu').transition('fade out');
                }
            });

          // create sidebar and attach to menu open
            $('.ui.sidebar')
                .sidebar('attach events', '.toc.item')
            ;

        });
    </script>

    <div class="pusher" >
      <div class="ui inverted vertical masthead center aligned segment" style="padding-bottom: 38%; background-image: url(images/caroussel.jpg); background-repeat: no-repeat;">

        <div class="ui container" style="width: 80%; ">
          <div class="ui large secondary inverted pointing menu" style="margin-top: -1%;">
            <a class="toc item">
              <i class="sidebar icon"></i>
            </a>
            <a class="active item">Home</a>
            <a class="item">Work</a>
            <a class="item">Company</a>
            <a class="item">Careers</a>
            <div class="right item">
            <?php 
                if(!isset($_SESSION['id_usuario'])){ 
            ?>

                <div><a class="ui inverted button" href="entrar.php">Log in</a></div>
                <div><a class="ui inverted button" href="cadastrar.php">Sign Up</a></div>

            <?php
                }else{
                    echo "Olá! " . $_SESSION['nome'];
            ?>
                <a href="logout.php">   Sair</a>
            <?php
                }
            ?>
            </div>
          </div>
        </div>
      </div>  
    </body>