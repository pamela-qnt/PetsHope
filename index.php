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
                    echo "Olá! " . $_SESSION['nome'];
            ?>
                 <a class="item" href="logout.php">Sair</a>
            <?php
                }
            ?>
            </div>
          </div>
        </div>
      </div>  

      <tr> <!--linha-->
        <td> <!--coluna-->
          <div class="ui small image" style="width: 30%; margin-top: 3%; margin-left: 3%; margin-bottom: 3%; margin-right: 3%;"> 
             <img src="images/index.jpeg">
          </div>
        </td> 
        
        <td> <!--coluna-->
          <div class="ui small image" style="width: 30%; margin-bottom: 3%; width: 60%; margin-bottom: 1%"> 
             <img src="images/dogs.jpg">
          </div>
        </td>   
      </tr>



  <div class="ui inverted vertical footer segment">
    <div class="ui container">
      <div class="ui stackable inverted divided equal height stackable grid">
        <div class="three wide column">
          <h4 class="ui inverted header">About</h4>
          <div class="ui inverted link list">
            <a href="#" class="item">Sitemap</a>
            <a href="#" class="item">Contact Us</a>
            <a href="#" class="item">Religious Ceremonies</a>
            <a href="#" class="item">Gazebo Plans</a>
          </div>
        </div>
        <div class="three wide column">
          <h4 class="ui inverted header">Services</h4>
          <div class="ui inverted link list">
            <a href="#" class="item">Banana Pre-Order</a>
            <a href="#" class="item">DNA FAQ</a>
            <a href="#" class="item">How To Access</a>
            <a href="#" class="item">Favorite X-Men</a>
          </div>
        </div>
        <div class="seven wide column">
          <h4 class="ui inverted header">Footer Header</h4>
          <p>Extra space for a call to action inside the footer that could help re-engage users.</p>
        </div>
      </div>
    </div>
  </div>
</div>



</body>

</html>
    </body>