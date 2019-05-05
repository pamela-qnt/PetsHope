    <?php
        include("cabecalho.php");
    ?>
    <?php
        require 'config.php';

        if(isset($_POST['register'])) {
            $errMsg = '';

            // Get data from FROM
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $tel_contato = $_POST['tel_contato'];
            $senha = $_POST['senha'];

            if($nome == '')
                $errMsg = 'Enter your nome';
            if($email == '')
                $errMsg = 'Enter email';
            if($senha == '')
                $errMsg = 'Enter senha';
            if($errMsg == ''){
                try {
                    $stmt = $connect->prepare('INSERT INTO usuario (nome, email, tel_contato, senha) VALUES (:nome, :email, :tel_contato, :senha)');
                    $stmt->execute(array(
                        ':nome' => $nome,
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
            $errMsg = 'Registration successfull. Now you can <a href="entrar.php">login</a>';
        }
    ?>

    <?php
        if(isset($errMsg)){
            echo '<div style="color:#FF0000;text-align:center;font-size:17px;">'.$errMsg.'</div>';
        }
    ?>

       <form action="cadastrar.php" method="post" post="register" class="ui form" style="margin-left: 28%; margin-right: 28%; margin-top: 12%; background-color: #C0C0C0; padding: 4%; border-radius: 20px;">
            <div class="field">
                <label>Nome Completo</label>
                <input type="text" name="nome" placeholder="Nome" autocomplete="off" class="box"/><br/>
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
            <div class="field">
                <div class="ui checkbox">
                    <input type="checkbox" tabindex="0" class="hidden">
                    <label>I agree to the Terms and Conditions</label>
                </div>
            </div>
            <input action="joined" class="ui button submit" type="submit" style="background-color: black; color: white;" name="register" value="register"></input>
        </form>
        
<?php
    include("rodape.php");
?>
