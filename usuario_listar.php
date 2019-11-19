<?php
$page = 'listar_usuario';
require('header.php');
?>
        <!------------------- Listar usuarios --------------------------->
        <div class="content p-1">
            <div class="list-group-item">
                <div class="d-flex">
                    <div class="mr-auto p-2">
                        <h2 class="display-4 titulo">Listar Usuário</h2>
                    </div>
                </div>
                <div class="alert alert-success" role="alert">
                    Usuário apagado com Sucesso!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-bordered ">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Login</th>
                                <th class="d-none d-sm-table-cell">E-mail</th>
                                <th class="d-none d-lg-table-cell">Data do cadastro</th>
                                <th class="text-center">Ações</th>
                            </tr>
                        </thead>    
                        <tbody>

                        <?php
                include_once 'conexao.php';
                $sql = "SELECT id_usuario, user, email, data_cadastro FROM `usuario`";
                $retorno = mysqli_query($conn, $sql);

                while ($array = mysqli_fetch_array($retorno, MYSQLI_ASSOC)) {
                    $id_usuario = $array['id_usuario'];
                    $login = $array['user'];
                    $email = $array['email'];
                    $data_cadastro = $array['data_cadastro'];                    
                    ?>
                <tr>
                    <th><?= $id_usuario ?></th>
                    <td><?= $login ?></td>
                    <td class="d-none d-sm-table-cell"><?= $email ?></td>
                    <td class="d-none d-lg-table-cell"><?= $data_cadastro  ?></td>
                    <td class="text-center">
                        <span class="d-none d-md-block">
                            <a href="usuario_visualizar.php?id=<?=$id_usuario?>" class="btn btn-outline-primary btn-sm" data-toggle="modal"
                                    data-target="#visualizarRegistro">Visualizar</a>

                            <a href="usuario_editar.php?id=<?=$id_usuario?>"
                                class="btn btn-outline-warning btn-sm">Editar</a>

                            <a href="usuario_apagar.php?id=<?=$id_usuario?>" 
                            class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target=" #apagarRegistro">Apagar</a>
                        </span>
                        <div class="dropdown d-block d-md-none">
                            <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Ações
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">
                                <a class="dropdown-item" href="visualizar.php?id=<?=$id_usuario?>" data-toggle="modal"
                                    data-target="#visualizarRegistro">Visualizar</a>
                                <a class="dropdown-item" href="usuario_editar.html">Editar</a>
                                <a class="dropdown-item" href="usuario_apagar.html" data-toggle="modal"
                                    data-target="#apagarRegistro">Apagar</a>
                            </div>
                        </div>
                    </td>
                </tr>
                <?php } ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!------------------- Modal param exibição de um registo--------------------------->
    <div class="modal fade" id="visualizarRegistro" tabindex="-1" role="dialog" aria-labelledby="visualizarRegistro"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="exampleModalLabel">Dados do Usuário</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php
                        include_once 'conexao.php';
                        $id = $_GET['id'];

                        $sql = "SELECT * FROM `usuario` WHERE id_usuario = $id";
                        $retorno = mysqli_query($conn, $sql);

                        while ($array = mysqli_fetch_array($retorno, MYSQLI_ASSOC)) {
                            $id_usuario = $array['id_usuario'];
                            $nome = $array['nome'];
                            $email = $array['email'];
                            $data_cadastro = $array['data_cadastro'];                    
                    ?>
                            <dl class="row">
                                <dt class="col-sm-3">ID</dt>
                                <dd class="col-sm-9"><?= $id_usuario ?></dd>

                                <dt class="col-sm-3">Nome</dt>
                                <dd class="col-sm-9"><?= $nome ?></dd>

                                <dt class="col-sm-3">E-mail</dt>
                                <dd class="col-sm-9"><?= $email ?></dd>

                                <dt class="col-sm-3 text-truncate">Data do Cadastro</dt>
                                <dd class="col-sm-9"><?= $data_cadastro ?> </dd>
                            </dl>
                    <?php } ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" data-dismiss="modal">OK</button>                    
                </div>
            </div>
        </div>
    </div>
    <!------------------- Modal para confirmar a exclusão de um registo--------------------------->
    <div class="modal fade" id="apagarRegistro" tabindex="-1" role="dialog" aria-labelledby="apagarRegistro"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title" id="exampleModalLabel">Excluir item</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Tem certeza que deseja excluiir o item selecionado?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-danger">Apagar</button>
                </div>
            </div>
        </div>
    </div>


<?php
    require('footer.php');
?>