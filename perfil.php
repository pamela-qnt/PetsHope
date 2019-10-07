<?php
    include 'cabecalho.php';
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

    
   <div class="ui container" style="margin-top: 2%; "> 
    <div class="ui two collumn grid">
      <div class="collumn">
     <div class="ui link cards">
  <div class="card">
    <div class="image">
      <img src="images/neve.jpg">
    </div>
    <div class="content">
      <div class="header"><?php echo $_SESSION['nome_usuario']; ?></div>      
    </div>
  </div>
</div>
</div>
<div class="contentllumn">
   
    <h3> Nome: <?php echo  $_SESSION['nome_usuario'] ;?> </h3>
   
</div>
  
 
  </div>
</div>  
  



