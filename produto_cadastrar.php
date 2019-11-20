<?php
$page = 'novo_produto';
require('header.php');
?>

        <!--Formulário-->
        <div class="content p-1">
            <div class="list-group-item">
                <div class="d-flex">
                    <div class="mr-auto p-2">
                        <h2 "display-4 titulo">Cadastrar Produto</h2>
                    </div>
                    <a href="listar.html">
                    </a>
                </div>
                <hr>
                <form action="produto_include.php" method="GET">
                    <div class="form-row">
                       
                         <div class="form-group col-md-4">
                            <label>
                                <span class="text-danger">*</span> Código</label>
                            <input name="codigo" type="text" class="form-control" id="nome" placeholder="nome" required>
                        </div>
                    </div>

                          <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>
                                    <span class="text-danger">*</span> Nome</label>
                                <input name="nome" type="text" class="form-control" id="nome" placeholder="nome" required>
                            </div>

                            <div class="form-group col-md-4">
                                <label>Quantidade</label>
                                <input name="quantidade" type="text" class="form-control" id="quantidade" placeholder="quantidade">
                               
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>Categoria</label>
                                <select name="categoria" id="categoria" class="form-control">
                                    <option selected>Selecione</option>
                                    <option value="1">Categoria 1</option>
                                    <option value="2">Categoria 2</option>
                                    <option value="2">Categoria 3</option>
                                </select>
                            </div>

                            <div class="form-group col-md-4">
                                <label>Fornecedor</label>
                                <select name="fornecedor" id="fornecedor" class="form-control">
                                    <option selected>Selecione</option>
                                    <option value="1">Fornecedor 1</option>
                                    <option value="2">Fornecedor 2</option>
                                    <option value="2">Fornecedor 3</option>
                                </select>
                            </div>

                            <p>
                        </div>

                        </p>
                        <button type="submit" class="btn btn-success">Cadastrar</button>
                </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal para confirmar a exclusão de um registo-->
    <div class="modal fade" id="apagarRegistro" tabindex="-1" role="dialog" aria-labelledby="apagarRegistro" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title" id="exampleModalLabel">Excluir item</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Tem certeza que deseja excluir o item selecionado?
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

