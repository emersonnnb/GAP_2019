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
    <!------------------- navbar --------------------------->
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
                            class="d-none d-sm-inline">Usuário</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#"><i class="fas fa-user"></i> Perfil</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt"></i> Sair</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!------------------- Menu sidebar --------------------------->
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
                    </ul>
                </li>
                <li>
                    <a href="#submenu2" data-toggle="collapse"><i class="fas fa-list-ul"></i> Produtos</a>
                    <ul id="submenu2" class="list-unstyled collapse">
                        <li><a href="#"><i class="fas fa-tags"></i> Cadastrar</a></li>
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
        <!------------------- Title do formulário  --------------------------->
        <div class="content p-1">
            <div class="list-group-item">
                <div class="d-flex">
                    <div class="mr-auto p-2">
                        <h2 class="display-4 titulo">Editar Usuário</h2>
                    </div>
                    <div class="p2">
                        <span class="d-none d-md-block">
                            <a href="javascript:history.go(-1)" class="btn btn-info btn-sm">Voltar</a>
                            
                        </span>
                        <div class="dropdown d-block d-md-none">
                            <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Ações
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">
                                <a class="dropdown-item" href="usuario_listar.php">Listar</a>
                                <a class="dropdown-item" href="usuario_visualizar.php">Visualizar</a>
                                <a class="dropdown-item" href="usuario_pagar.php" data-toggle="modal"
                                    data-target="#apagarRegistro">Apagar</a>
                            </div>
                        </div>

                    </div>
                    </a>
                </div>
                <!------------------- Formulario de edição  --------------------------->
                <hr>
                <form>
                <?php
                    include_once 'usuario_update.php';?> 
                </form>
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


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="js/dashboard.js"></script>
</body>

</html>