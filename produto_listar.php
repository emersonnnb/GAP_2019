<?php
$page = 'listar_produto';
require('header.php');
?>

 <!-- Listar produtos -->
        <div class="content p-1">
            <div class="list-group-item">
                <div class="d-flex">
                    <div class="mr-auto p-2">
                        <h2 class="display-4 titulo">Listar Produto</h2>
                    </div>
                </div>
               <!-- <div class="alert alert-success" role="alert">
                    Produto apagado com Sucesso!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>-->
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-bordered ">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Quantidade</th>
                                <th>Categoria</th>
                                <th>Fornecedor</th>
                                
                               
                            </tr>
                        </thead>    
                        <tbody>

                            <?php
                                include_once 'produto_view.php';?>                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal param exibição de um registo-->
    <div class="modal fade" id="visualizarRegistro" tabindex="-1" role="dialog" aria-labelledby="visualizarRegistro"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="exampleModalLabel">Dados do Produto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <?php
                        include_once 'conexao.php';
                        $id = $_GET['id'];

                        $sql = "SELECT * FROM `produto` WHERE id_produto = $id";
                        $retorno = mysqli_query($conn, $sql);

                        while ($array = mysqli_fetch_array($retorno, MYSQLI_ASSOC)) {
                            $id_produto = $array['id_produto'];
                            $numero = $array['numero'];
                            $nome = $array['nome'];
                            $quantidade = $array['quantidade'];
                            $categoria = $array['fornecedor'];
                                                
                    ?>
                            <dl class="row">
                                <dt class="col-sm-3">ID</dt>
                                <dd class="col-sm-9"><?= $id_produto ?></dd>

                                <dt class="col-sm-3">Numero</dt>
                                <dd class="col-sm-9"><?= $numero ?></dd>

                                <dt class="col-sm-3">Quantidade</dt>
                                <dd class="col-sm-9"><?= $quantidade ?></dd>

                                <dt class="col-sm-3 text-truncate">Categoria</dt>
                                <dd class="col-sm-9"><?= $categoria ?> </dd>

                                <dt class="col-sm-3 text-truncate">Fornecedor</dt>
                                <dd class="col-sm-9"><?= $fornecedor ?> </dd>
                            </dl>
                    <?php } ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" data-dismiss="modal">OK</button>                    
                </div>
            </div>
        </div>
    </div>
    <?php
    require('footer.php');
?>

