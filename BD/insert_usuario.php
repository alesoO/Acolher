<?php

include "./conexao.php";

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

$fp = fopen($imagem, "rb");
$conteudo = fread($fp, $tamanho);
$conteudo = addslashes($conteudo);
fclose($fp);

$query = "INSERT INTO `usuario`(`Usuario`, `Nome`, `Email`, `Senha`, `Endereço`, `Nome_Imagem`, `Tamanho_Imagem`, `Tipo_Imagem`, `Imagem`) VALUES ('$Usuário', '$Nome', '$Email', '$Senha', '$Endereço','$nome_img', '$tamanho', '$tipo', '$conteudo')";

if ($Senha == $Senha_confirm) {
    try {
        $insert_usuario = mysqli_query($conexao, $query);
        header('location:/AcolherProject/index.php?pagina=login');
    } catch (Exception) {
        header('location:/AcolherProject/index.php?pagina=inserir_usuario&invalido');
    }
} else {
    header('location:/AcolherProject/index.php?pagina=inserir_usuario&erro');
}
