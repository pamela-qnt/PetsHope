    <?php
        include("cabecalho.php");
    ?>
    <?php
        require 'config.php';

        if(isset($_POST['register'])) {
            $errMsg = '';

            // Get data from FROM
            $nome = $_POST['nome_usuario'];
            $email = $_POST['email'];
            $tel_contato = $_POST['tel_contato'];
            $senha = $_POST['senha'];

            if($nome == '')
                $errMsg = 'Preencha seu nome';
            if($email == '')
                $errMsg = 'Preencha seu email';
            if($senha == '')
                $errMsg = 'Preencha sua senha';
            if($errMsg == ''){
                try {
                    $stmt = $connect->prepare('INSERT INTO usuario (nome_usuario, email, tel_contato, senha) VALUES (:nome_usuario, :email, :tel_contato, :senha)');
                    $stmt->execute(array(
                        ':nome_usuario' => $nome,
                        ':email' => $email,
                        ':tel_contato' => $tel_contato,
                        ':senha' => $senha                    ));
                    header('Location: cadastrar.php?action=joined');
                    exit;
                }
                catch(PDOException $e) {
                    echo $e->getMessage();
                }
            }
        }

        if(isset($_GET['action']) && $_GET['action'] == 'joined') {
            print('<meta http-equiv="refresh" content="0;url=entrar.php">');
        }
    ?>

    <?php
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

       <form action="cadastrar.php" method="post" post="register" class="ui form" style="margin-left: 28%; margin-right: 28%; margin-top: -6%; background-color: #C0C0C0; padding: 5%; border-radius: 20px; opacity: 0.9;">
            <div class="field">
                <label>Nome Completo</label>
                <input type="text" name="nome_usuario" placeholder="Nome" autocomplete="off" class="box"/><br/>
            </div>
            <div class="field">
                <label>Email</label>
                <input type="text" name="email" placeholder="Email" autocomplete="off" class="box"/><br/>
            </div>
            <div class="field">
                <label>Telefone</label>
                <input type="text" name="tel_contato" placeholder="Telefone" autocomplete="off" class="box"/><br/>
            </div>
            <div class="field">
                <label>Senha</label>
                <input type="password" name="senha" placeholder="Senha" class="box" /><br/>
            </div>
            
            <input action="joined" class="ui button submit" type="submit" style="background-color: black; color: white;" name="register" value="cadastrar"></input>
        </form>

