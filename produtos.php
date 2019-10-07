    <?php

        include 'cabecalho.php';
        require 'config.php';
        echo "</br></br></br>";

    ?>

    <?php

        $tipo = $_GET['tipo'];

        try {
            $query = 'SELECT id_produto, nome_produto, qtd_estoque, desc_produto, valor, img_produto, desc_tipo_prod FROM produto, tipo_produto WHERE id_tipo_prod_fk = id_tipo_prod and desc_tipo_prod ="' .$tipo. '"';
            $stmt = $connect->prepare($query);
            $result = $stmt->execute(array(
                    $id_produto = ':id_produto',
                    $nome_produto = ':nome_produto',
                    $qtd_estoque = ':qtd_estoque',
                    $desc_produto = ':desc_produto',
                    $valor = ':valor',
                    $img_produto = ':img_produto',
                    $desc_tipo_prod = ':desc_tipo_prod'
                ));
            while ($row = $stmt->fetch()) {
    ?>

                <div style="border: solid; border-width: 1px; border-radius: 2px; margin-bottom: 2%; width: 25%; float: left; margin-left: 6%; padding: 0.5%">

                    <img src="<?php print_r($row['img_produto']); ?>" style="width: 100%; height: 50%; border-radius: 2px;">

                    <?php
                    print_r("<b>" . $row['nome_produto'] . "</b>");
                    echo "<br>";
                    ?>

                    <button class="ui primary button" style="margin-top: 5%; margin-bottom: -5%;">

                    <?php
                    print_r("R$" . $row['valor']);
                    ?>

                    </button>

                    <?php
                    echo "<br>";
                    echo "<br><br>";
                    ?>

                </div>

<?php
            }
            exit;
    }
    catch(PDOException $e) {
        echo $e->getMessage();
    }

?>