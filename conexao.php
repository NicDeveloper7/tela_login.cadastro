<?php 
//Informações para conexão

$servidor = "localhost";
$login = "root";
$password = "root";
$banco = "bd_sistema";

$conexao = mysqli_connect($servidor, $login, $password, $banco);

//inserindo dados manualmente

$usuario = $_POST['usuario'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$setor = $_POST['setor'];
?>