<?php
session_start();
include ('conexao.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
    header('Location: index.php');
	exit();
}

$usuario = mysqli_real_escape_string($conn, $_POST['login']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);

$query = "select login from usuario where login = '{$usuario}' and senha = md5('{$senha}')";
 
$result = mysqli_query($conn, $query); 
$row = mysqli_num_rows($result);

if($row == 1) {
	$_SESSION['login'] = $usuario;
	header('Location: menu.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: index.php');
	exit();
}

/*
include('conexao.php');
include('password.php');

$emailUsuario = trim($_POST['usuario']);
$senhaDigitada = trim($_POST['senha']);

$sql = "SELECT Email, Senha, IdUsuario FROM usuario WHERE Email = '$emailUsuario' AND Status = 'Ativo'";
$retornoEmailUsuario = mysqli_query($conexao,$sql);
$totalRetornado = mysqli_num_rows($retornoEmailUsuario);

if($totalRetornado == 0){
    header("Location: ../index.php?semCadastro=".$emailUsuario); 
}
if($totalRetornado >= 2){
    header("Location: /index.php?emailCadastrado=".$emailUsuario); 
}
if($totalRetornado == 1){
    while($array = mysqli_fetch_array($retornoEmailUsuario,MYSQLI_ASSOC)){
        $senhaCadastrada = $array['Senha'];
        $senhaDecodificada = sha1($senhaDigitada);
        if($senhaDecodificada == $senhaCadastrada){
            $_SESSION['usuario'] = $array["IdUsuario"];
            header("Location: menu.php"); 
        } else{
            header("Location: index.php?dadosInvalidos=1"); 
        }
    }
}
*/
?>