<?php
    include 'cabecalho.php';

    $id_usuario = $_SESSION['id_usuario'];
    $nome_usuario = $_SESSION['nome_usuario'];
    $senha = $_SESSION['senha'];
    $email = $_SESSION['email'];
    $tel_contato = $_SESSION['tel_contato'];
    $estado = $_SESSION['estado'];
    $cidade = $_SESSION['cidade'];
    $bairro = $_SESSION['bairro'];
    $desc_tipo_logradouro = $_SESSION['desc_tipo_logradouro'];
    $id_tipo_usuario_fk = $_SESSION['id_tipo_usuario_fk'];
    $imagem_usuario = $_SESSION['imagem_usuario'];

    if ($_SESSION['id_tipo_usuario_fk'] == 2) {
      $id_tipo_usuario_fk = "Admin";
    }else{
      $id_tipo_usuario_fk = "Usuario Comum";
    }
  
    if(isset($_POST['editar'])) {

      $nome_usuario = $_POST["nome_usuario"];
      $senha = $_POST["senha"];
      $email = $_POST["email"];
      $estado = $_POST["estado"];
      $cidade = $_POST["cidade"];
      $bairro = $_POST["bairro"]; 
      $tel_contato = $_POST["tel_contato"]; 

    $sql = "UPDATE usuario SET 
      nome_usuario = '$nome_usuario',
      senha = '$senha', 
      email = '$email', 
      estado = '$estado', 
      cidade = '$cidade',
      bairro = '$bairro',
      tel_contato = '$tel_contato'
      WHERE id_usuario = '$id_usuario'"; 

      $connect->exec($sql);

      unset($_SESSION['nome_usuario']);
      unset($_SESSION['email']);
      unset($_SESSION['senha']);
      unset($_SESSION['estado']);
      unset($_SESSION['bairro']);
      unset($_SESSION['cidade']);
      unset($_SESSION['tel_contato']);

      $_SESSION['nome_usuario'] = $nome_usuario;
      $_SESSION['email'] = $email;
      $_SESSION['senha'] = $senha;
      $_SESSION['estado'] = $estado;
      $_SESSION['bairro'] = $bairro;
      $_SESSION['cidade'] = $cidade;
      $_SESSION['tel_contato'] = $tel_contato;

    header('Location: perfil.php');
    }

    if(isset($_POST['excluir'])) {

    $sql = "DELETE FROM usuario WHERE usuario . id_usuario = '$id_usuario'"; 

    $connect->exec($sql);

    session_destroy();

    header('Location: index.php');
    }

    $sql = "SELECT campo1,campo2 FROM tabela WHERE campo2 IS NULL"
?>
<!DOCTYPE html>
  <html lang="pt-br ">
    <head>

        <!-- LINK's NECESSÁRIOS --> 

        <link rel="stylesheet" href="semantic.min.css" type="text/css">
        <link rel="stylesheet" src="cabecalho.css" type="text/css"></link>

        <link rel="sortcut icon" href="imagens/favicon.png" type="image/png"/>


        <link href="https://fonts.googleapis.com/css?family=Bad+Script&display=swap" rel="stylesheet">

        <title> PetsHope </title>
        <meta charset="utf-8">
    </head>

    <script src="assets/library/jquery.min.js"></script>
    <script src="../dist/components/visibility.js"></script>
    <script src="../dist/components/sidebar.js"></script>
    <script src="../dist/components/transition.js"></script>

    
   <div class="ui container" style="margin-top: 2%; "> 
    <div class="ui two collumn grid">
      <div class="collumn" >
     <div class="ui link cards" >
  <div class="card" >
    <div class="image" >
      <img src="<?php echo $imagem_usuario;?>" >
    </div>
    <div class="content">
       


          <div class="ui list">
      <div class="item">
        <i class="user icon"></i>
        <div class="content">
           <div class="header"><?php echo $id_tipo_usuario_fk ?></div>
        </div>
      </div>
      <div class="item">
        <i class="envelope icon"></i>
        <div class="content">
          <div class="header"><?php echo $email; ?></div>
        </div>
      </div>
    </div>


    </div>
  </div>
</div>
</div>
<div class="collumn" style="width: 72%">

<form class="ui form" action="perfil.php" method="post" >
   <h4 class="ui dividing header">Perfil Usuário</h4>
  <div class="field">
    <label>Nome Usuário</label>
    <div class="two fields">
      <input type="text" name="nome_usuario" id="nome_usuario" value="<?php echo $nome_usuario; ?>">
    </div>
  </div>
  <div class="field">
    <label>Email</label>
    <div class="fields">
      <input type="text" name="email" id="email" value="<?php echo $email; ?>">
    </div>
  </div>
  <div class="field">
    <label>Senha</label>
    <div class="fields">
      <input type="text" name="senha" id="senha" value="<?php echo $senha; ?>">      
    </div>
  </div>
  <div class="field">
    <label>Telefone</label>
    <div class="fields">
      <input type="text" name="tel_contato" id="tel_contato" value="<?php echo $tel_contato; ?>">      
    </div>
  </div>
  <div class="field">
    <div class="fields">
      <div><label><b>Bairro</b></label><input type="text" name="bairro" id="bairro" value="<?php echo $bairro; ?>"></div>
      <div><label><b>Cidade</b></label><input type="text" name="cidade" id="cidade" value="<?php echo $cidade; ?>"></div>
      <div><label><b>Estado</b></label><input style="width: 167%" type="text" name="estado" id="estado" value="<?php echo $estado; ?>"></div>
    </div>
  </div>

  <input class="ui green button submit" type="submit" name="editar" value="Editar" action="editar"></input>
  <input class="ui  red button submit" type="submit" name="excluir" value="Excluir" action="excluir"></input>
</form>
</div>


  </div>
</div>  


<?php include 'rodape.php' ?>

</html>





<html>
<head>
</head>
<body>

