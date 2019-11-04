<?php
session_start();

$_SESSION['teste'] = 'Funcionou';
echo $_SESSION['teste'];
?>