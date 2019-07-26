<?php
    include("cabecalho.php");
    require 'config.php';
    

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
                $stmt = $connect->prepare('SELECT id_usuario, nome_usuario, email, tel_contato, senha FROM usuario WHERE email = :email');
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
                style="margin-left: 28%; margin-right: 28%; margin-top: -5%; background-color: #C0C0C0; padding: 4%; border-radius: 20px;">
            <div class="field">
                <label>Email</label>
                <input type="text" name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email'] ?>" autocomplete="off" class="box"/><br/>
            </div>
            <div class="field">
                <label>Senha</label>
                <input type="password" name="senha" value="<?php if(isset($_POST['senha'])) echo $_POST['senha'] ?>" autocomplete="off" class="box" /><br/>
            </div>

            <input class="ui button submit" type="submit" style="background-color: black; color: white;" name="login" value="Login"></input>
        </form> 
        

