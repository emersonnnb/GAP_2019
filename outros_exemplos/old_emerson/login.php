<?php
session_start();
include ('conexao.php');

if(empty($_POST['login']) || empty($_POST['senha'])) {
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
/*u


$usuario = mysqli_real_escape_string($conn, $_POST['usuario']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);

$query = "select id,usuario from usuarios where usuario = '($usuario)' and senha  == '{$senha}'";

$result = mysqli_query($conn,$query);

$row = mysqli_num_rows($result);

echo $row;
//if(row == 1)
*/


?>