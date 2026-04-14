<?php
include './conexao.php';

$Id_User = $_GET['Id_User'];

$query = "DELETE FROM `usuario` WHERE Id_user = $Id_User";
mysqli_query($conexao, $query);

header('location:/AcolherProject/index.php?pagina=usuarios');