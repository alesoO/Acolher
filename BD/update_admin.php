<?php

include "./conexao.php";
$Id_user = $_POST['Id_user'];
$Nome = $_POST['Nome'];
$Usuário = addslashes($_POST['Usuário']);
$Senha = md5($_POST['Senha']);
$Senha_confirm = md5($_POST['Senha_confirm']);

$imagem = $_FILES['imagem']['tmp_name'];
$tamanho = $_FILES['imagem']['size'];
$tipo = $_FILES['imagem']['type'];
$nome_img = $_FILES['imagem']['name'];

if ($imagem != "") {
    $fp = fopen($imagem, "rb");
    $conteudo = fread($fp, $tamanho);
    $conteudo = addslashes($conteudo);
    fclose($fp);
}

$query = "SELECT * FROM `admin` WHERE Id_user = '$Id_user' and  Senha = '$Senha'";
$consulta = mysqli_query($conexao, $query);

if ($imagem == "") {
    if ($Senha == $Senha_confirm) {
        if ((mysqli_num_rows($consulta) == 1)) {
            $query = "UPDATE `admin` SET `Nome_Usuario`='$Nome',`Usuario`='$Usuário' WHERE `Senha`='$Senha' and `Id_user`='$Id_user'";
            mysqli_query($conexao, $query);
            header('location:/AcolherProject/index.php?pagina=admin');
        } else {
            header('location:/AcolherProject/index.php?pagina=inserir_admin&erro&editar=' . $Id_user);
        }
    } else {
        header('location:/AcolherProject/index.php?pagina=inserir_admin&erro&editar=' . $Id_user);
    }
} else {
    if ($Senha == $Senha_confirm) {
        if ((mysqli_num_rows($consulta) == 1)) {
            $query = "UPDATE `admin` SET `Nome_Usuario`='$Nome',`Usuario`='$Usuário',`Nome_Imagem`='$nome_img',`Tamanho_Imagem`='$tamanho',`Tipo_Imagem`='$tipo',`Imagem`='$conteudo' WHERE `Senha`='$Senha' and `Id_user`='$Id_user'";
            mysqli_query($conexao, $query);
            header('location:/AcolherProject/index.php?pagina=admin');
        } else {
            header('location:/AcolherProject/index.php?pagina=inserir_admin&erro&editar=' . $Id_user);
        }
    } else {
        header('location:/AcolherProject/index.php?pagina=inserir_admin&erro&editar=' . $Id_user);
    }
}
