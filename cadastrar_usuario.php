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
            $imagem_usuario = $_FILES["foto_perfil"];
            $target_dir = "imagens/perfil/";
            $target_file = $target_dir . basename($_FILES["foto_perfil"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

            // Se a foto estiver sido selecionada
            if (!empty($foto_perfil["name"])) {
                // Largura máxima em pixels
                $largura = 40000;
                // Altura máxima em pixels
                $altura = 40000;
                // Tamanho máximo do arquivo em bytes
                $tamanho = 1000000;

                $error = array();

                // Verifica se o arquivo é uma imagem

                if (!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $foto_perfil["type"])) {
                    $error[1] = "Isso não é uma imagem.";
                }

                // Pega as dimensões da imagem
                $dimensoes = getimagesize($foto_perfil["tmp_name"]);

                // Verifica se a largura da imagem é maior que a largura permitida
                if ($dimensoes[0] > $largura) {
                    $error[2] = "A largura da imagem não deve ultrapassar " . $largura . " pixels";
                }

                // Verifica se a altura da imagem é maior que a altura permitida
                if ($dimensoes[1] > $altura) {
                    $error[3] = "Altura da imagem não deve ultrapassar " . $altura . " pixels";
                }

                // Verifica se o tamanho da imagem é maior que o tamanho permitido
                if ($foto_perfil["size"] > $tamanho) {
                    $error[4] = "A imagem deve ter no máximo " . $tamanho . " bytes";
                }

                // Se não houver nenhum erro
                if (count($error) == 0) {
                    // Pega extensão da imagem
                    preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto_perfil["name"], $ext);

                    // Faz o upload da imagem para seu respectivo caminho
                    if (move_uploaded_file($_FILES["foto_perfil"]["tmp_name"], $target_file)) {
                        echo "The file " . basename($_FILES["foto_perfil"]["name"]) . " has been uploaded.";
                    } else {
                        echo "Sorry, there was an error uploading your file.";
                    }
                    // move_uploaded_file($foto_perfil["tmp_name"], $caminho_imagem);

                    if ($nome == '')
                        $errMsg = 'Preencha seu nome';
                    if ($email == '')
                        $errMsg = 'Preencha seu email';
                    if ($senha == '')
                        $errMsg = 'Preencha sua senha';
                    if ($errMsg == '') {
                        try {
                            $stmt = $connect->prepare('INSERT INTO usuario (nome_usuario, email, tel_contato, senha, imagem_usuario) VALUES (:nome_usuario, :email, :tel_contato, :senha, :imagem_usuario)');
                            $stmt->execute(array(
                                ':nome_usuario' => $nome,
                                ':email' => $email,
                                ':tel_contato' => $tel_contato,
                                ':senha' => $senha,
                                ':imagem_usuario' => $_FILES["foto_perfil"]["name"]
                            ));
                            header('Location: cadastrar.php?action=joined');
                            exit;
                        } catch (PDOException $e) {
                            echo $e->getMessage();
                        }

                        // Se houver mensagens de erro
                        if (count($error) != 0) {
                            foreach ($error as $erro) {
                                echo "<br><br><br><br><br>";
                                echo "outro local";
                                echo $erro . "<br />";
                            }
                        }
                    }
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

       <form action="cadastrar_usuario.php" method="post" post="register" class="ui form"
             style="margin-left: 35%; margin-right: 35%; margin-top: 5%; padding: 4%;">
            <h1 style="color: white;">PetsHope</h1>
            <div class="field">
                    <input type="text" name="nome_usuario" placeholder="Nome Completo" autocomplete="off" class="box"/><br/>
            </div>
            <div class="field">
                    <input type="text" name="email" placeholder="Email" autocomplete="off" class="box"/><br/>
            </div>
            <div class="field">
                    <input type="text" name="tel_contato" placeholder="Telefone" autocomplete="off" class="box"/><br/>
            </div>
           <div class="field">
                    <input type="file" name="imagem_usuario" id="imagem_usuario">
           </div>
            <div class="field">
                    <input type="password" name="senha" placeholder="Senha" class="box" /><br/>
            </div>
            
            <input action="joined" class="ui button submit" type="submit" style="width: 100%; background-color: #C0C0C0; color: white;" name="register" value="Cadastrar">
        </form>