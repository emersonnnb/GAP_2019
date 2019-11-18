<?php
include_once 'conexao.php';
include_once('head.php');
$id = $_GET['id'];
?>

<div style="padding:20px 0;max-width:800px" class="container">
    <h4 style="padding:0 0 20px 0;margin-bottom:35px;" class="border-bottom">FORMULARIO DE ATUALIZAR PRODUTO</h4>
    <form action="atualizar_produto.php" method="POST">
        <?php
            $sql = "SELECT * FROM estoque WHERE IdFornecedor = $idFornecedor";
            $retorno = mysqli_query($conexao,$sql);
            while($array = mysqli_fetch_array($retorno,MYSQLI_ASSOC)){
                $idFornecedor = $array['IdFornecedor'];
                $nome = $array['Nome'];
                $cnpj = $array['Cnpj'];
               
        ?>

