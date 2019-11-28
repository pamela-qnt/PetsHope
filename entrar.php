<?php
    include("cabecalho.php");
      

        if(isset($_POST['login'])) {
        $errMsg = '';

        // Get data from FORM
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        if($email == '')
            $errMsg = 'Preencha seu email';
        if($senha == '')
            $errMsg = 'Preencha sua senha';

        if($errMsg == '') {
            try {
                $stmt = $connect->prepare('SELECT id_usuario, nome_usuario, email, tel_contato, senha, estado, cidade, bairro, desc_tipo_logradouro, id_tipo_usuario_fk, imagem_usuario FROM usuario WHERE email = :email');
                $stmt->execute(array(
                    ':email' => $email
                    ));
                $data = $stmt->fetch(PDO::FETCH_ASSOC);

                if($data == false){
                    $errMsg = "Usuário $email não encontrado.";
                }
                else {
                    if($senha == $data['senha']) {
                        $_SESSION['id_usuario'] = $data['id_usuario'];
                        $_SESSION['nome_usuario'] = $data['nome_usuario'];
                        $_SESSION['email'] = $data['email'];
                        $_SESSION['senha'] = $data['senha'];
                        $_SESSION['tel_contato'] = $data['tel_contato'];
                        $_SESSION['estado'] = $data['estado'];
                        $_SESSION['cidade'] = $data['cidade'];
                        $_SESSION['bairro'] = $data['bairro'];
                        $_SESSION['desc_tipo_logradouro'] = $data['desc_tipo_logradouro'];
                        $_SESSION['id_tipo_usuario_fk'] = $data['id_tipo_usuario_fk'];
                        $_SESSION['imagem_usuario'] = $data['imagem_usuario'];
                        header('Location: index.php');
                    }
                    else
                        $errMsg = 'Senha não confere.';
                }
            }
            catch(PDOException $e) {
                $errMsg = $e->getMessage();
            }
        }
    }

    if(isset($errMsg)){
        echo '<div style="color:#FF0000;text-align:center;font-size:17px;">'.$errMsg.'</div>';
    }
?>

        <style type="text/css">
        body{
            background-image: url(images/background_quatro.jpg);
            background-repeat: no-repeat;
            background-size: 100%;
            background-position: 30%;
        }
    </style>

        <form action="entrar.php" method="post" class="ui form" 
                style="margin-left: 35%; margin-right: 35%; margin-top: 7%; padding: 4%;">
            <h1 style="color: white;">PetsHope</h1>
            <div class="field">
                <input type="text" name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email'] ?>" autocomplete="off" class="box" placeholder="Email"/><br/>
            </div>
            <div class="field">

                <input type="password" name="senha" value="<?php if(isset($_POST['senha'])) echo $_POST['senha'] ?>" autocomplete="off" class="box" placeholder="Senha"/><br/>
            </div>

            <input class="ui button submit" type="submit" style="width: 100%; background-color: #C0C0C0; color: white;" name="login" value="Entrar"></input>
        </form> 
