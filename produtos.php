<<<<<<< HEAD
    <div style='background-color: #3b3b3b; padding-top: 1%; '>
    <?php

        include 'cabecalho.php';
        //require 'config.php';
        echo "</br></br></br>";
        $tipo = $_GET['tipo'];
        echo "<h1 style='margin-left: 11%; color: white; margin-bottom: 1%; font-size: 330%;'>" . $tipo . "</h1>";
    ?>

    </div>

    <?php

=======
    <?php

        include 'cabecalho.php';
        require 'config.php';
        echo "</br></br></br>";

    ?>

    <?php

        $tipo = $_GET['tipo'];

>>>>>>> 63af685f60b5bba47fdac5ff45cd501939787d41
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
<<<<<<< HEAD
                <div style="border: solid; border-width: 1px; border-radius: 2px; margin-bottom: 2%; width: 25%; float: left; margin-left: 6%; padding: 0.5%; margin-top: 2%;">

                    <img src="<?php print_r($row['img_produto']); ?>" style="width: 100%; height: 35%; border-radius: 2px; margin-bottom: 3%;">
=======

                <div style="border: solid; border-width: 1px; border-radius: 2px; margin-bottom: 2%; width: 25%; float: left; margin-left: 6%; padding: 0.5%">

                    <img src="<?php print_r($row['img_produto']); ?>" style="width: 100%; height: 50%; border-radius: 2px;">
>>>>>>> 63af685f60b5bba47fdac5ff45cd501939787d41

                    <?php
                    print_r("<b>" . $row['nome_produto'] . "</b>");
                    echo "<br>";
<<<<<<< HEAD

                    print_r("R$" . $row['valor']);
                    echo "<br>";
                    ?>

                    <a href="produto_ind.php?id_produto=<?php print_r($row['id_produto']); ?>" class="ui primary button" style="margin-top: 5%; margin-bottom: -5%;">Ver Produto</a>

                    <?php
                    echo "<br><br><br>";
                    ?>

                </div>
        <?php
            }
        ?>

    <?php
            exit;
        }
        catch(PDOException $e) {
            echo $e->getMessage();
        }
    ?>
=======
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
>>>>>>> 63af685f60b5bba47fdac5ff45cd501939787d41
