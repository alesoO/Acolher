<?php
include './conexao.php';

$Id_User = $_POST['Id_User'];
$Usuario = $_POST['Usuario'];
$Email = $_POST['Email'];

if (isset($_POST['Id_Gatos'])) {
    $Id_Gatos = $_POST['Id_Gatos'];
}
if (isset($_POST['Id_Cachorro'])) {
    $Id_Cachorro = $_POST['Id_Cachorro'];
}

if (isset($Id_Cachorro)) {
    $query = "UPDATE `cachorros` SET `Adotado_por_Id`='$Id_User',`Adotado_por_User`='$Usuario',`Adotado_por_Email`='$Email' WHERE `Id_Cachorro`= $Id_Cachorro";
    mysqli_query($conexao, $query);
} elseif (isset($Id_Gatos)) {
    $query = "UPDATE `gatos` SET `Adotado_por_Id`='$Id_User',`Adotado_por_User`='$Usuario',`Adotado_por_Email`='$Email' WHERE `Id_Gatos`='$Id_Gatos'";
    mysqli_query($conexao, $query);
}
header('location:/AcolherProject/index.php?pagina=home&funcionou');
