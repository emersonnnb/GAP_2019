<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="../style.css">
<body>
<?php include_once('menu.php'); ?>
    <div class="container">
        <h3 style="margin-bottom:30px">Lista de Categorias</h3>

        <table class="table">
            <thead>
                <tr>
                <th></th>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <td class="text-center"><th scope="col">Ações</th></td>
                </tr>
            </thead>
            <tbody>

                <?php
include_once 'conexao.php';
$sql = "SELECT IdCategoria, Nome FROM `categoria`";
$retorno = mysqli_query($conexao, $sql);

while ($array = mysqli_fetch_array($retorno, MYSQLI_ASSOC)) {
    $idCategoria = $array['IdCategoria'];
    $nome = $array['Nome'];
    ?>
                <tr>
                <td></td>
                    <td><?=$idCategoria?></td>
                    <td><?=$nome?></td>
                    <td class="text-center">
                        <td><a class="btn-editar btn btn-sm btn-warning" href="editar_categoria.php?id=<?=$idCategoria?>"
                            role="button"><i class="far fa-edit"></i> Editar</a>
                            <a class="btn-editar btn btn-sm btn-danger" href="excluir_categoria.php?id=<?=$idCategoria?>"
                            role="button"><i class="far fa-trash-alt"></i> Excluir</a></td>
                    </td>        
                </tr>
                <?php }?>

            </tbody>
        </table>

        <?php
            if (isset($_GET['atualizado'])) {
                echo '<div id="alerta" class="alert alert-success" role="alert">
                Categoria <b>'. $_GET['atualizado']. '</b> atualizada com sucesso!.
                </div>';
            }
            if (isset($_GET['excluido'])) {
                echo '<div id="alerta" class="alert alert-danger" role="alert">
                Categoria <b>'. $_GET['excluido']. '</b> excluida com sucesso!.
                </div>';
            }
        ?>
    </div>


</body>

</html>