<?php
include_once 'conexao.php';
$id = $_GET['id'];
?>
<div >
    <form action="atualizar_produto.php" method="POST">
        <?php
            $sql = "SELECT * FROM usuario WHERE id_usuario = $id";
            $retorno = mysqli_query($conn, $sql);

            while ($array = mysqli_fetch_array($retorno, MYSQLI_ASSOC)) {
                $nome  = $array['nome'];
                $email = $array['email'];
                $senha = MD5($array['senha']);
                $endereco = $array['rua'];
                $numero = $array['numero'];
                $complemento = $array['complemento'];
                $estado = $array['estado'];
                $cidade = $array['cidade'];
                $cep = $array['cep'];
                $login = $array['user'];

                ?>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label><span class="text-danger">*</span> Nome</label>
                        <input name="nome" type="text" class="form-control" id="nome" placeholder="Nome Completo" autocomplete="off" value="<?= $nome ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label>E-mail</label>
                        <input name="email" type="email" class="form-control" id="email" placeholder="Seu e-mail" autocomplete="off" value="<?= $email ?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Senha</label>
                        <input name="senha" type="password" class="form-control" id="senha" placeholder="A senha com mínimo de 6 caracteres" autocomplete="off" value="<?= $senha ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Confirmação de Senha</label>
                        <input name="conf_senha" type="password" class="form-control" id="conf_senha" placeholder="Confirmar a senha" autocomplete="off" value="<?= $senha ?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Endereço</label>
                        <input name="endereco" type="text" class="form-control" id="endereco" placeholder="Rua João..." autocomplete="off" value="<?= $endereco ?>">
                    </div>
                    <div class="form-group col-md-2">
                        <label>Número</label>
                        <input name="numero" type="text" class="form-control" id="numero" placeholder="123" autocomplete="off" value="<?= $numero ?>">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Complemento</label>
                        <input name="complemento" type="text" class="form-control" id="complemento" placeholder="Sala, Apartamento" autocomplete="off" value="<?= $complemento ?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-5">
                        <label>Estado</label>
                        <select name="estado" id="estado" class="form-control">
                            <option autocomplete="off" value="<?= $estado ?>">Selecione</option>
                        </select>
                    </div>
                    <div class="form-group col-md-5">
                        <label>Cidade</label>
                        <select name="cidade" id="cidade" class="form-control">
                            <option selected>Selecione</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label>CEP</label>
                        <input name="cep" type="text" class="form-control" id="cep" placeholder="xx.xxxx-xxx" autocomplete="off" value="<?= $cep ?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label>Login</label>
                        <input name="login" type="text" class="form-control" id="login" placeholder="Insira um login" autocomplete="off" value="<?= $login ?>">
                    </div>
                    <div class="form-group col-md-2">
                        <label>Nivel de Acesso</label>
                        <select name="nivel_acesso" id="nivel_acesso" class="form-control">
                            <option selected>"Selecione"</option>
                            <option value="1">Administrador</option>
                            <option value="2">Usuario</option>
                        </select>
                    </div>
                    <div class="form-check col-md-1 p-5">
                        <input class="form-check-input" name="status" type="checkbox" value="ativo" id="status">
                        <label class="form-check-label" for="defaultCheck1">
                            Ativo
                        </label>
                    </div>
                </div>
                <p>
                    <span class="text-danger">*</span> Campo Obrigatório
                </p>
                <button type="submit" class="btn btn-warning">Salvar</button>

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
    </form>
</div>