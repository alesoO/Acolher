<?php

include "./conexao.php";

$Usuario = addslashes($_POST['Usuario']);
$Email = $_POST['Email'];
$Senha = md5($_POST['Senha']);
$Senha_confirm = md5($_POST['Senha_confirm']);

$query = "SELECT * FROM `usuario` WHERE Usuario = '$Usuario' and  Email = '$Email'";
$consulta = mysqli_query($conexao, $query);

if ($Senha == $Senha_confirm) {
    if (mysqli_num_rows($consulta) == 1) {
        $query = "UPDATE usuario SET Senha ='$Senha' WHERE Usuario = '$Usuario' and Email = '$Email'";
        mysqli_query($conexao, $query);
        header('location:/AcolherProject/index.php?pagina=login');
    } else {
        header('location:/AcolherProject/index.php?pagina=trocar_senha&erro');
    }
} else {
    header('location:/AcolherProject/index.php?pagina=trocar_senha&erro');
}
