<?php
#mysqli

$servidor = "127.0.0.1"; #endereço do server
$usuario = "root"; #usuario do banco de dados
$senha = ""; #senha do usuario do banco
$database = "acolher"; #banco de dados utilizado
#inicia a conexão com o banco de dados a partir da biblioteca msqli
$conexao = mysqli_connect($servidor, $usuario, $senha, $database);
