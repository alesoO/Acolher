<?php

include "./conexao.php";

$Nome = $_POST['Nome'];
$Usuário = addslashes($_POST['Usuário']);
$Senha = md5($_POST['Senha']);
$Senha_confirm = md5($_POST['Senha_confirm']);

$imagem = $_FILES['imagem']['tmp_name'];
$tamanho = $_FILES['imagem']['size'];
$tipo = $_FILES['imagem']['type'];
$nome_img = $_FILES['imagem']['name'];

$fp = fopen($imagem, "rb");
$conteudo = fread($fp, $tamanho);
$conteudo = addslashes($conteudo);
fclose($fp);

$query = "INSERT INTO `admin`(`Nome`, `Usuario`, `Senha`, `Nome_Imagem`, `Tamanho_Imagem`, `Tipo_Imagem`, `Imagem`) VALUES ('$Nome', '$Usuário', '$Senha', '$nome_img', '$tamanho', '$tipo', '$conteudo')";
if ($Senha == $Senha_confirm) {
    try {
        $insert_admin = mysqli_query($conexao, $query);
        header('location:/AcolherProject/index.php?pagina=home');
    } catch (Exception) {
        header('location:/AcolherProject/index.php?pagina=inserir_admin&invalido');
    }
} else {
    header('location:/AcolherProject/index.php?pagina=inserir_admin&erro');
}
