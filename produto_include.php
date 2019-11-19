<?php
include_once("conexao.php");

    $numero           = $_GET["numero"]; 
    $nome         = $_GET["nome"];
    $quantidade   =$_GET["quantidade"];
    $categoria   =$_GET["categoria"];
    $fornecedor   =$_GET["fornecedor"];
    
     

   
    $linha = mysqli_num_rows($consulta);
    
	if($linha != 0) {        
        echo $linha;
        //echo "<script type=\"text/javascript\">alert('Produto ja cadastrado!!');</script>";
    }
    
    else{
    $result_produto = "INSERT INTO `usuarioproduto` (`id_produto`,`numero_produto`,`nome`,`quantidade`,`categoria`,`fornecedor`)
        VALUES (NULL,CURRENT_TIMESTAMP,'$numero','$nome','$quantidade','$categoria','$fornecedor')";
    $resultado_produto = mysqli_query($conn, $result_produto);
    }
    echo "<script type=\"text/javascript\">alert('Produto cadastrado com Sucesso!!');</script>";
    echo "<script type=\"text/javascript\">window.location='produto_cadastrar.html';</script>"


?>