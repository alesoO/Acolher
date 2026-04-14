<?php

include "./conexao.php";

$Nome = $_POST['Nome'];
$Especie = $_POST['Especie'];
$Raça = $_POST['Raça'];
$Tamanho = $_POST['Tamanho'];
$Sexo = $_POST['Sexo'];
$Idade = $_POST['Idade'] . $_POST['Tipo_idade'];
$Descricao = $_POST['Descricao'];

$imagem = $_FILES['imagem']['tmp_name'];
$tamanho = $_FILES['imagem']['size'];
$tipo = $_FILES['imagem']['type'];
$nome_img = $_FILES['imagem']['name'];

$fp = fopen($imagem, "rb");
$conteudo = fread($fp, $tamanho);
$conteudo = addslashes($conteudo);
fclose($fp);

if ($Especie == 'Cachorro') {
    $query = "INSERT INTO `cachorros`(`Nome_Cachorro`, `Raca`, `Tamanho`, `Sexo`, `Idade`, `Nome_Imagem`, `Tamanho_Imagem`, `Tipo_Imagem`, `Imagem`, `Descricao`) VALUES ('$Nome', '$Raça', '$Tamanho', '$Sexo', '$Idade', '$nome_img', '$tamanho', '$tipo', '$conteudo', '$Descricao')";
    $insert_pet = mysqli_query($conexao, $query);
} else if ($Especie == 'Gato'){
    $query = "INSERT INTO `gatos`(`Nome_Gatos`, `Raca`, `Tamanho`, `Sexo`, `Idade`, `Nome_Imagem`, `Tamanho_Imagem`, `Tipo_Imagem`, `Imagem`, `Descricao`) VALUES ('$Nome', '$Raça', '$Tamanho', '$Sexo', '$Idade', '$nome_img', '$tamanho', '$tipo', '$conteudo', '$Descricao')";
    $insert_pet = mysqli_query($conexao, $query);
}
header('location:/AcolherProject/index.php?pagina=home');
