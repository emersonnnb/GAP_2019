<?php
                include_once 'conexao.php';
                $sql = "SELECT id_produto, nome, quantidade, categoria, fornecedor FROM `produto`";
                $retorno = mysqli_query($conn, $sql);

                while ($array = mysqli_fetch_array($retorno, MYSQLI_ASSOC)) {
                    $id_produto = $array['id_produto'];
                    $nome = $array['nome'];
                    $quantidade = $array['quantidade'];
                    $categoria = $array['categoria'];
                    $fornecedor = $array['fornecedor'];
                                      
                    ?>
                <tr>
                    <th><?= $id_produto ?></th>
                    <td class="d-none d-sm-table-cell"><?= $nome ?></td>
                    <td class="d-none d-lg-table-cell"><?= $quantidade ?></td>
                    <td class="text-center">                                
                        <span class="d-none d-md-block">
                            <a href="produto_visualizar.php?id=<?=$id_produto?>" class="btn btn-outline-primary btn-sm" data-toggle="modal"
                                    data-target="#visualizarRegistro">Visualizar</a>

                            <a href="produto_editar.php?id=<?=$id_produto?>"
                                class="btn btn-outline-warning btn-sm">Editar</a>

                            <a href="produto_apagar.php?id=<?=$id_produto?>" 
                            class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target=" #apagarRegistro">Apagar</a>
                        </span>
                        <div class="dropdown d-block d-md-none">
                            <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Ações
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">
                                <a class="dropdown-item" href="visualizar.php?id=<?=$id_produto?>" data-toggle="modal"
                                    data-target="#visualizarRegistro">Visualizar</a>
                                <a class="dropdown-item" href="produto_editar.html">Editar</a>
                                <a class="dropdown-item" href="produto_apagar.html" data-toggle="modal"
                                    data-target="#apagarRegistro">Apagar</a>
                            </div>
                        </div>
                    </td>
                </tr>
                <?php } ?>


                <?php
        if (isset($_GET['atualizado'])) {
            echo '<div id="alerta" class="alert alert-success" role="alert">
                Produto <b>' . $_GET['atualizado'] . '</b> atualizado com sucesso!.
                </div>';
        }
        if (isset($_GET['excluido'])) {
            echo '<div id="alerta" class="alert alert-danger" role="alert">
                Produto <b>' . $_GET['excluido'] . '</b> excluido com sucesso!.
                </div>';
        }
        if (isset($_GET['cadastrado'])) {
            echo '<div id="alerta" class="alert alert-success" role="alert">
                Produto cadastrado com sucesso!.
                </div>';
        }
        ?>
                


            