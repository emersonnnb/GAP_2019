<?php

include_once 'conexao.php';
$id = $_GET['id'];

?>

<div style="padding:20px 0;max-width:800px" class="container">
    <h4 style="padding:0 0 20px 0;margin-bottom:35px;" class="border-bottom">Formulário de Cadastro de Categoria</h4>
    <form action="atualizar_Categoria.php" method="POST">
        <?php
            $sql = "SELECT * FROM estoque WHERE IdCategoria";
            $retorno = mysqli_query($conexao,$sql);

            while($array = mysqli_fetch_array($retorno,MYSQLI_ASSOC)){
                $idCategoria = $array['IdCategoria'];
                $categoria = $array['Categoria'];
                $fornecedor = $array['Fornecedor'];
                $nome = $array['Nome'];
                $numero = $array['Numero'];
                $quantidade = $array['Quantidade'];
        ?>
        <div class="form-group">
                <label for="numeroProduto">Nome Categoria</label>
                <input type="text" class="form-control" id="nomeCategoria" placeholder="Digite o nome da categoria"
                    name="nomeCategoria" required autocomplete="off">
            </div>
        <button type="submit" class="btn-enviar btn btn-primary btn-sm btn-block">Atualizar</button>
        <?php } ?>
    </form>
</div>