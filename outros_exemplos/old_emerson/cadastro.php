<?php 

session_start();
$usuario = null;
if (empty($_SESSION['usuario'])){
header('location: index.php');
die();

}else{
$usuario = $_SESSION['usuario'];
$nome = $_SESSION['seg'];
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Fomulario de cadastro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
</head>
<body>

<div class="container">
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Cadastro de Funcionario</h1>      
    </div>
  </div>
  <form id="formulario" action="form.php" method="POST" >
    <div class="form-row ">
      <div class="form-group col-md-6">
        <label for="">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
      </div>
  
      <div class="form-group col-md-6">
        <label>E-mail</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
      </div>      
    </div>

    <div class="form-group">
      <label>Endereço</label>
      <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Rua dos Bobos, nº 0">
    </div>

    <div class="form-group">
      <label>Complemento</label>
      <input type="text" class="form-control" id="complemento" name="complemento" placeholder="Apartamento, hotel, casa, etc.">
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label>Cidade</label>
        <input type="text" class="form-control" id="cidade" name="cidade">
      </div>
      <div class="form-group col-md-4">
        <label>Estado</label>
        <select id="estado" name="estado" class="form-control">
          <option selected>Escolher...</option>
          <option>Rio de Janeiro</option>
        </select>
      </div>
      <div class="form-group col-md-2">
        <label>CEP</label>
        <input type="text" class="form-control" id="cep" name="cep">
      </div>
    </div>
    <hr>
    <div class="form-row">
      <div class="form-group col-md-3">
        <label >Login</label>
        <input type="text" class="form-control" id="login" name="login" placeholder="Insira um login" required>
      </div>
      <div class="form-group col-md-2">
        <label>Senha</label>
        <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required>
      </div>
      <!--<div class="form-group col-md-3">
        <label>Confirmação de Senha</label>
        <input type="password" class="form-control" id="conf_senha" name="conf_senha" placeholder="Redigite a Senha">
      </div>-->
    </div>
    <div class="form-group">      
      <button type="submit" class="btn btn-primary">Cadastrar</button>
      <button type="reset" class="btn btn-danger">Limpar</button>
    </div>  
  </form>
</div>
    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    
</body>
</html>