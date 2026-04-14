<?php

include "./conexao.php";
$Id_User = $_POST['Id_User'];
$Nome = $_POST['Nome'];
$Usuário = addslashes($_POST['Usuário']);
$Email = $_POST['Email'];
$Senha = md5($_POST['Senha']);
$Senha_confirm = md5($_POST['Senha_confirm']);
$Endereço = $_POST['Endereço'];

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

$query = "SELECT * FROM `usuario` WHERE Id_User = '$Id_User' and  Senha = '$Senha'";
$consulta = mysqli_query($conexao, $query);

if ($imagem == "") {
    if ($Senha == $Senha_confirm) {
        if ((mysqli_num_rows($consulta) == 1)) {
            $query = "UPDATE `usuario` SET `Usuario`='$Usuário',`Nome`='$Nome',`Email`='$Email',`Endereço`='$Endereço' WHERE `Senha`='$Senha' and `Id_user`='$Id_User'";
            mysqli_query($conexao, $query);
            header('location:/AcolherProject/index.php?pagina=usuarios');
        } else {
            header('location:/AcolherProject/index.php?pagina=inserir_usuario&erro&editar='.$Id_User);
        }
    } else {
        header('location:/AcolherProject/index.php?pagina=inserir_usuario&erro&editar='.$Id_User);
    }
} else {
    if ($Senha == $Senha_confirm) {
        if ((mysqli_num_rows($consulta) == 1)) {
            $query = "UPDATE `usuario` SET `Usuario`='$Usuário',`Nome`='$Nome',`Email`='$Email',`Endereço`='$Endereço',`Nome_Imagem`='$nome_img',`Tamanho_Imagem`='$tamanho',`Tipo_Imagem`='$tipo',`Imagem`='$conteudo' WHERE `Senha`='$Senha' and `Id_user`='$Id_User'";
            mysqli_query($conexao, $query);
            header('location:/AcolherProject/index.php?pagina=usuarios');
        } else {
            header('location:/AcolherProject/index.php?pagina=inserir_usuario&erro&editar='.$Id_User);
        }
    } else {
        header('location:/AcolherProject/index.php?pagina=inserir_usuario&editar&erro&editar='.$Id_User);
    }
}
