<?php

include "./conexao.php";

$usuario = addslashes($_POST['Usuario']);
$senha = md5($_POST['Senha']);

$query = "SELECT * FROM `usuario` WHERE Usuario = '$usuario' and  Senha = '$senha'";
$consulta_usuarios = mysqli_query ($conexao, $query);

$query = "SELECT * FROM `admin` WHERE Usuario = '$usuario' and  Senha = '$senha'";
$consulta_admin = mysqli_query ($conexao, $query);

if (mysqli_num_rows($consulta_usuarios)==1){
    session_start();
    $_SESSION['login'] = true;
    $_SESSION['usuario'] = $usuario;
    $_SESSION['admin'] = false;
    header('location:/AcolherProject/index.php');
}elseif(mysqli_num_rows($consulta_admin)==1){
    session_start();
    $_SESSION['login'] = true;
    $_SESSION['usuario'] = $usuario;
    $_SESSION['admin'] = true;
    header('location:/AcolherProject/index.php');
}else{
    header('location:/AcolherProject/index.php?pagina=login&erro');
}