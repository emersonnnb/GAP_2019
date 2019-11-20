<?php
include_once("conexao.php");

    $codigo       = $_GET["codigo"]; 
    $nome         = $_GET["nome"];
    $quantidade   =$_GET["quantidade"];
    $categoria    =$_GET["categoria"];
    $fornecedor   =$_GET["fornecedor"];

     

    $consulta = mysqli_query($conn,"select user from produto where id_produto = '$codigo'");
    $linha = mysqli_num_rows($consulta);
    
	if($linha != 0) {        
        echo $linha;
        echo "<script type=\"text/javascript\">alert('Produto ja cadastrado!!');</script>";
        echo "<script type=\"text/javascript\">window.location='produto_cadastrar.php';</script>";
    }
    
    else{
    $result_produto = "INSERT INTO `produto` (`id_produto`, 'numero''nome',`quantidade`,`categoria`,`fornecedor`)
        VALUES (NULL,CURRENT_TIMESTAMP,'$codigo' ,'NULL','$nome','$quantidade','$categoria','$fornecedor')";
    $resultado_produto = mysqli_query($conn, $result_produto);
    }
    echo "<script type=\"text/javascript\">alert('Produto cadastrado com Sucesso!!');</script>";
    echo "<script type=\"text/javascript\">window.location='produto_cadastrar.php';</script>"


?>