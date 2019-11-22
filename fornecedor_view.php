<?php
                include_once 'conexao.php';
                $sql = "SELECT idfornecedor , nome, cnpjfornecedor";
                $retorno = mysqli_query($conn, $sql);

                while ($array = mysqli_fetch_array($retorno, MYSQLI_ASSOC)) {
                    $idfornecedor  = $array['idfornecedor '];
                    $nome = $array['nome'];
                    $cnpj = $array['CnpjFornecedor'];
                   
                                      
                    ?>
                <tr>
                    <th><?= $idfornecedor  ?></th>
                    <td class="d-none d-sm-table-cell"><?= $nome ?></td>
                    <td class="d-none d-lg-table-cell"><?= $cnpj ?></td>
                    <td class="text-center">                                
                        <span class="d-none d-md-block">
                            <a href="fornecedor_visualizar.php?id=<?=$idfornecedor ?>" class="btn btn-outline-primary btn-sm" data-toggle="modal"
                                    data-target="#visualizarRegistro">Visualizar</a>

                            <a href="produto_editar.php?id=<?=$idfornecedor ?>"
                                class="btn btn-outline-warning btn-sm">Editar</a>

                            <a href="fornecedor_apagar.php?id=<?=$idfornecedor ?>" 
                            class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target=" #apagarRegistro">Apagar</a>
                        </span>
                        <div class="dropdown d-block d-md-none">
                            <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Ações
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">
                                <a class="dropdown-item" href="visualizar.php?id=<?=$idfornecedor ?>" data-toggle="modal"
                                    data-target="#visualizarRegistro">Visualizar</a>
                                <a class="dropdown-item" href="fornecedor_editar.html">Editar</a>
                                <a class="dropdown-item" href="fornecedor_apagar.html" data-toggle="modal"
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