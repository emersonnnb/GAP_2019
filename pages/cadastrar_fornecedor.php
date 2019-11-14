<!DOCTYPE html>
<html lang="en">
<title>Cadastro de Fornecedor</title>
<body>    
    <div style="padding:20px 0;max-width:800px" class="container">
        
        <h4 style="padding:0 0 20px 0;margin-bottom:35px;" class="border-bottom">Cadastro de Fornecedor</h4>
        <form action="inserir_fornecedor.php" method="POST">
            <div class="form-group">
                
                <label for="idProduto">Nome Fornecedor</label>
                
                <input type="text" class="form-control" id="nomeFornecedor" placeholder="Digite o nome do fornecedor"
                    name="nomeFornecedor" required autocomplete="off">
            </div>
            
            <div class="form-group">
                <label for="cnpjFornecedor">CNPJ<label>
                    
                    <input type="text" class="form-control" id="cnpjFornecedor" placeholder="Digite o CNPJ do fornecedor"
                           name="cnpjFornecedor" required atocomplete"on">
            </div>
            <button type="submit" class="btn-enviar btn btn-success btn-sm btn-block">Cadastrar</button>
        </form>
    </div>


    <?php include_once('../footer.php'); ?>
</body>

</html>
