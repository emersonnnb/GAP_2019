<?php
include_once("conexao.php");

    $nome           = $_GET["nome"]; 
    $email          = $_GET["email"];
    $nivel_usuario  = $_GET["nivel_acesso"];
    $status         = $_GET["status"];
    $senha          = MD5($_GET["senha"]);
    $endereco       = $_GET["endereco"];
    $numero         = $_GET["numero"];
    $complemento    = $_GET["complemento"];
    $estado         = $_GET["estado"];
    $cidade         = $_GET["cidade"];
    $cep            = $_GET["cep"];
    $login          = $_GET["login"];
     

    $consulta = mysqli_query($conn,"select user from usuario where user = '$login'");
    $linha = mysqli_num_rows($consulta);
    
	if($linha != 0) {        
        echo $linha;
        echo "<script type=\"text/javascript\">alert('Usuário ja cadastrado!!');</script>";
        echo "<script type=\"text/javascript\">window.location='usuario_cadastrar.html';</script>";
       
    }
    
    else{
    $result_usuario = "INSERT INTO `usuario` (`id_usuario`,`data_cadastro`,`nome`,`email`,`nivelusuario`,`status`,`rua`,`numero`,`complemento`,`estado`,`cidade`,`cep`,`senha`,`user`)
        VALUES (NULL,CURRENT_TIMESTAMP,'$nome','$email','$nivel_usuario','$status','$endereco','$numero','$complemento','$estado','$cidade','$cep','$senha','$login')";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    }
    echo "<script type=\"text/javascript\">alert('Usuário cadastrado com Sucesso!!');</script>";
    echo "<script type=\"text/javascript\">window.location='usuario_cadastrar.html';</script>"


?>
