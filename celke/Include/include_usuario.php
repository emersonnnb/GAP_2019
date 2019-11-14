<?php
include_once("conexao\conexao.php");

    $nome           = $_POST["nome"]; 
    $email          = $_POST["email"];
    $senha          = MD5($_POST["senha"]);
    $endereco       = $_POST["endereco"];
    $complemento    = $_POST["complemento"];
    $cidade         = $_POST["cidade"];
    $estado         = $_POST["estado"];
    $cep            = $_POST["cep"];
    $login          = $_POST["login"];
     

    $consulta = mysqli_query($conn,"select login from usuario where login = '$login'");
    $linha = mysqli_num_rows($consulta);
    
	if($linha != 0) {
        echo "<script type=\"text/javascript\">alert('Usuário ja cadastrado!!');</script>";
    }
    
    else{
    $result_usuario = "INSERT INTO usuario (nome,email,endereco,complemento,cidade,estado,cep,login,senha,created)
        VALUES ('$nome','$email','$endereco','$complemento','$cidade','$estado','$cep','$login','$senha',now())";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    }
    echo "<script type=\"text/javascript\">window.location='cadastro.html';</script>";


    



?>
