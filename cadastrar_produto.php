<?php
include("cabecalho.php");

if(isset($_POST['register'])) {
    $errMsg = '';

    // Get data from FORM
    $nome_produto = $_POST['nome_produto'];
    $qtd_estoque = $_POST['qtd_estoque'];
    $desc_produto = $_POST['desc_produto'];
    $valor = $_POST['valor'];
    $img_produto = $_FILES["img_produto"];
    $id_tipo_prod = $_POST["id_tipo_prod_fk"];
    $target_dir = "images/";
    $nome_arquivo = mt_rand() . basename($_FILES['imagem_usuario']['name']);
    $target_file = $target_dir . $nome_arquivo;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Se a foto estiver sido selecionada
    if (!empty($img_produto["name"])) {
        // Largura máxima em pixels
        $largura = 40000;
        // Altura máxima em pixels
        $altura = 40000;
        // Tamanho máximo do arquivo em bytes
        $tamanho = 1000000;

        $error = array();

        // Verifica se o arquivo é uma imagem

        if (!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $img_produto["type"])) {
            $error[1] = "Isso não é uma imagem.";
        }

        // Pega as dimensões da imagem
        $dimensoes = getimagesize($img_produto["tmp_name"]);

        // Verifica se a largura da imagem é maior que a largura permitida
        if ($dimensoes[0] > $largura) {
            $error[2] = "A largura da imagem não deve ultrapassar " . $largura . " pixels";
        }

        // Verifica se a altura da imagem é maior que a altura permitida
        if ($dimensoes[1] > $altura) {
            $error[3] = "Altura da imagem não deve ultrapassar " . $altura . " pixels";
        }

        // Verifica se o tamanho da imagem é maior que o tamanho permitido
        if ($img_produto["size"] > $tamanho) {
            $error[4] = "A imagem deve ter no máximo " . $tamanho . " bytes";
        }

        // Se não houver nenhum erro
        if (count($error) == 0) {
            // Pega extensão da imagem
            preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $img_produto["name"], $ext);

            // Faz o upload da imagem para seu respectivo caminho
            if (move_uploaded_file($_FILES["img_produto"]["tmp_name"], $target_file)) {
                echo "The file " . basename($_FILES["img_produto"]["name"]) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
            // move_uploaded_file($img_produto["tmp_name"], $caminho_imagem);

            if ($nome_produto == '')
                $errMsg = 'Preencha o nome do produto';
            if ($qtd_estoque == '')
                $errMsg = 'Preencha a quantidade do produto em estoque';
            if ($valor == '')
                $errMsg = 'Preencha o valor do produto';
            if ($errMsg == '') {
                try {
                    $stmt = $connect->prepare('INSERT INTO produto (nome_produto, qtd_estoque, desc_produto, valor, img_produto, id_tipo_prod_fk) VALUES (:nome_produto, :qtd_estoque, :desc_produto, :valor, :img_produto, :id_tipo_prod_fk)');
                    $stmt->execute(array(
                        ':nome_produto' => $nome_produto,
                        ':qtd_estoque' => $qtd_estoque,
                        ':desc_produto' => $desc_produto,
                        ':valor' => $valor,
                        ':img_produto' => $target_file,
                        ':id_tipo_prod_fk' => $id_tipo_prod
                    ));
                    header('Location: cadastrar_produto.php?action=joined');
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
    print('<meta http-equiv="refresh" content="0;url=cadastrar_produto.php">');
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

<form action="cadastrar_produto.php" method="post" post="register" enctype="multipart/form-data" class="ui form"
      style="margin-left: 35%; margin-right: 35%; margin-top: 3%; padding: 4%;">
    <h1 style="color: white;">PetsHope</h1>
    <div class="field">
        <input type="text" name="nome_produto" placeholder="Nome do Produto" autocomplete="off" class="box"/><br/>
    </div>
    <div class="field">
        <input type="text" name="qtd_estoque" placeholder="Quantidade em Estoque" autocomplete="off" class="box"/><br/>
    </div>
    <div class="field">
        <input type="text" name="desc_produto" placeholder="Descrição do Produto" autocomplete="off" class="box"/><br/>
    </div>
    <div class="field">
        <input type="text" name="valor" placeholder="Valor do Produto" autocomplete="off" class="box"/><br/>
    </div>
    <div class="field">
        <input type="file" name="img_produto" id="imagem_produto">
    </div>
    <div class="field">
        <select name="id_tipo_prod_fk">
                <option value="1">Coleira</option>
                <option value="2">Guia</option>
                <option value="3">Comedouro</option>
                <option value="4">Para Morder</option>
                <option value="5">Para Vestir</option>
                <option value="6">Camas</option>
                <option value="7">Peitorais</option>
        </select>
    </div>

    <input action="joined" class="ui button submit" type="submit" style="width: 100%; background-color: #C0C0C0; color: white;" name="register" value="Cadastrar">
</form>
