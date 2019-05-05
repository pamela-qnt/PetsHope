<?php
    require 'config.php';
    include("cabecalho.php");

        if(isset($_POST['login'])) {
        $errMsg = '';

        // Get data from FORM
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        if($email == '')
            $errMsg = 'Enter email';
        if($senha == '')
            $errMsg = 'Enter senha';

        if($errMsg == '') {
            try {
                $stmt = $connect->prepare('SELECT nome, email, tel_contato, senha FROM usuario WHERE email = :email');
                $stmt->execute(array(
                    ':email' => $email
                    ));
                $data = $stmt->fetch(PDO::FETCH_ASSOC);

                if($data == false){
                    $errMsg = "User $email not found.";
                }
                else {
                    if($senha == $data['senha']) {
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
        <form action="entrar.php" method="post" class="ui form" 
                style="margin-left: 28%; margin-right: 28%; margin-top: 13%; background-color: #C0C0C0; padding: 4%; border-radius: 20px;">
            <div class="field">
                <label>Email</label>
                <input type="text" name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email'] ?>" autocomplete="off" class="box"/><br/>
            </div>
            <div class="field">
                <label>Senha</label>
                <input type="password" name="senha" value="<?php if(isset($_POST['senha'])) echo $_POST['senha'] ?>" autocomplete="off" class="box" /><br/>
            </div>
            <div class="field">
                <div class="ui checkbox">
                    <input type="checkbox" tabindex="0">
                    <label>I agree to the Terms and Conditions</label>
                </div>
            </div>
            <input class="ui button submit" type="submit" style="background-color: black; color: white;" name="login" value="Login"></input>
        </form> 
        
<?php
    include("rodape.php");
?>
