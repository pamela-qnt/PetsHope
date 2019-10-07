<?php
    require 'config.php';
    include("cabecalho.php");

    $stmt = $connect->prepare('SELECT id_produto, nome_produto, descricao, preco FROM produto');
    $array_sql = $stmt->fetch(\PDO::FETCH_ASSOC);


?>

    <p>
        <?php
            print_r("$array_sql");
        ?>
    </p>
