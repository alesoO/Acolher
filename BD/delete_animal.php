<?php
include './conexao.php';

if (isset($_POST['Id_Gatos'])) {
    $Id_Gatos = $_POST['Id_Gatos'];
}
if (isset($_POST['Id_Cachorro'])) {
    $Id_Cachorro = $_POST['Id_Cachorro'];
}
if (isset($Id_Cachorro)) {
    $query = "DELETE FROM `cachorros` WHERE Id_Cachorro = '$Id_Cachorro'";
    mysqli_query($conexao, $query);
} elseif (isset($Id_Gatos)) {
    $query = "DELETE FROM `gatos` WHERE Id_Gatos = '$Id_Gatos'";
    mysqli_query($conexao, $query);
}

header('location:/AcolherProject/index.php?pagina=galeria_adotar&funcionou');
