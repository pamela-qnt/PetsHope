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
      <div class="ui inverted vertical masthead center aligned segment cabecalho" style="padding-bottom: 38%; background-image: url(images/caroussel.jpg); background-repeat: no-repeat;">

        <div class="ui container" style="width: 80%; ">
          <div class="ui large secondary inverted pointing menu" style="margin-top: -1%;">
            <a class="toc item">
              <i class="sidebar icon"></i>
            </a>
            <a href="index.php" class="active item">Home</a>
            <a class="item">Produtos</a>
            <a class="item">Adoção</a>
            <a class="item">Perfil</a>
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
                                    echo $_SESSION['nome'];
                                ?>
                            </h5>
                        </i>
                        <div class="menu">
                            <div class="header">Display Density</div>
                            <div class="item">Comfortable</div>
                            <div class="item">Cozy</div>
                            <div class="item">Compact</div>
                            <div class="ui divider"></div>
                            <div class="item">Settings</div>
                            <div class="item">
                                <i class="dropdown icon"></i>
                                <span class="text">Upload Settings</span>
                                <div class="menu">
                                    <div class="item">
                                        <i class="check icon"></i>
                                        Convert Uploaded Files to PDF
                                    </div>
                                    <div class="item">
                                        <i class="check icon"></i>
                                        Digitize Text from Uploaded Files
                                    </div>
                                </div>
                            </div>
                            <div class="item">Manage Apps</div>
                            <div class="item">Keyboard Shortcuts</div>
                            <div class="item">Help</div>
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
  
  <div class="ui grid" style="margin-top: 1%; margin-bottom: 1%;">
  <div class="four wide column">
      <div class="ui card" style="margin-left: 3%">
        <div class="ui move reveal image">
          <div class="visible content">
            <img class="ui fluid image" src="images/cachorro_index.jpeg" style="width: 30%">
          </div>
          <div class="hidden content">
            <img class="ui fluid image" src="images/cachorro2.jpeg">
          </div>
      </div>
    </div>
  </div>
  <div class="four wide column">
    <div class="ui card" style="margin-left: 3%">
        <div class="ui move reveal image">
          <div class="visible content">
            <img class="ui fluid image" src="images/dogs.jpg">
          </div>
          <div class="hidden content">
            <img class="ui fluid image" src="images/dogs.jpg">
          </div>
      </div>
    </div>
  </div>
  <div class="four wide column">
    <div class="ui card" style="margin-left: 3%">
        <div class="ui move reveal image">
          <div class="visible content">
            <img class="ui fluid image" src="images/dogs.jpg">
          </div>
          <div class="hidden content">
            <img class="ui fluid image" src="images/dogs.jpg">
          </div>
      </div>
    </div>
  </div>
  <div class="four wide column">
    <div class="ui card" style="margin-left: 3%">
        <div class="ui move reveal image">
          <div class="visible content">
            <img class="ui fluid image" src="images/dogs.jpg">
          </div>
          <div class="hidden content">
            <img class="ui fluid image" src="images/dogs.jpg">
          </div>
      </div>
    </div>
  </div>
</div>

<?php
    include 'rodape.php';
?>