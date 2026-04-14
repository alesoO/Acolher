<?php

include "bd/conexao.php";

if (isset($_SESSION['login'])) {
    $Nome_Usuario = $_SESSION['usuario'];
    $query = "SELECT Id_user, Usuario, Nome, Imagem, Email FROM usuario WHERE Usuario = '$Nome_Usuario'";
    $resultado_usuario = mysqli_query($conexao, $query);

    $query = "SELECT Id_user, Usuario, Nome , Imagem FROM admin WHERE Usuario = '$Nome_Usuario'";
    $resultado_admin = mysqli_query($conexao, $query);

    if (mysqli_num_rows($resultado_usuario) == 1) {
        $imagem = mysqli_fetch_array($resultado_usuario);
    } elseif (mysqli_num_rows($resultado_admin) == 1) {
        $imagem = mysqli_fetch_array($resultado_admin);
    }
}
