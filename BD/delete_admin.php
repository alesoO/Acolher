<?php
include './conexao.php';

$Id_User = $_POST['Id_user'];
$Senha = md5($_POST['Senha']);

$query = "DELETE FROM `admin` WHERE Id_user = '$Id_User' and Senha = '$Senha'";
mysqli_query($conexao, $query);

header('location:/AcolherProject/index.php?pagina=admin');