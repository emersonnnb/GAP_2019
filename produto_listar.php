<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>GAP</title>
    <link rel="icon" href="imagem/favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script defer src="js/fontawesome-all.min.js"></script>
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/dashboard.css">
</head>

<body>
        <!-- navbar -->
    <nav class="navbar navbar-expand navbar-dark bg-primary">
        <a class="sidebar-toggle text-light mr-3">
            <span class="navbar-toggler-icon"></span>
        </a>
        <a class="navbar-brand" href="#">GAP</a>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle menu-header" href="#" id="navbarDropdownMenuLink"
                        data-toggle="dropdown">
                        <img class="rounded-circle" src="imagem/icon.png" width="20" height="20"> &nbsp;<span
                            class="d-none d-sm-inline">Produto</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#"><i class="fas fa-user"></i> Perfil</a>
                        <a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt"></i> Sair</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

     <!-- Menu sidebar -->
    <div class="d-flex">
        <nav class="sidebar">
            <ul class="list-unstyled">
                <li><a href="home.html"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                <li>
                    <a href="#submenu1" data-toggle="collapse">
                        <i class="fas fa-user"></i> Usuário
                    </a>
                    <ul id="submenu1" class="list-unstyled collapse">
                        <li><a href="usuario_cadastrar.html"><i class="fas fa-user-plus"></i> Novo </a></li>
                        <li class="active"><a href="usuario_listar.html"><i class="fas fa-users"></i> Usuários </a></li>
                        <li><a href="#"><i class="fas fa-key"></i> Nível de Acesso </a></li>
                    </ul>
                </li>
                <li>
                    <a href="#submenu2" data-toggle="collapse"><i class="fas fa-list-ul"></i> Produtos</a>
                    <ul id="submenu2" class="list-unstyled collapse">
                        <li><a href="produto_cadastrar.php"><i class="fas fa-tags"></i> Cadastrar</a></li>
                        <li><a href="#"><i class="far fa-list-alt"></i> Listar </a></li>
                    </ul>
                </li>
                <li>
                    <a href="#submenu3" data-toggle="collapse"><i class="fas fa-folder"></i> Categoria</a>
                    <ul id="submenu3" class="list-unstyled collapse">
                        <li><a href="#"><i class="fas fa-folder-plus"></i> Cadastrar</a></li>
                        <li><a href="#"><i class="fas fa-folder-open"></i> Listar </a></li>
                    </ul>
                </li>
                <li>
                    <a href="#submenu4" data-toggle="collapse"><i class="fas fa-truck"></i> Fornecedor</a>
                    <ul id="submenu4" class="list-unstyled collapse">
                        <li><a href="#"><i class="fas fa-tags"></i> Cadastrar</a></li>
                        <li><a href="#"><i class="far fa-list-alt"></i> Listar </a></li>
                    </ul>
                </li>
                <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Sair</a></li>
            </ul>
        </nav>

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
</body>

</html>
