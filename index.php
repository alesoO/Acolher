<?php
include 'bd/conexao.php';

session_start();

include "views/header.php";
include "BD/consultas.php";

if (isset($_GET['pagina'])) {
    $pagina = $_GET['pagina'];
} else {
    $pagina = 'home';
}
switch ($pagina) {
    case 'login':
        include "views/login.php";
        break;
    case 'galeria_adotar':
        include "views/galeria_adotar.php";
        break;
    case 'inserir_usuario':
        include "views/inserir_usuario.php";
        break;
    case 'inserir_admin':
        include "views/inserir_admin.php";
        break;
    case 'inserir_doacao':
        include "views/inserir_doacao.php";
        break;
    case 'inserir_animal':
        include "views/inserir_animal.php";
        break;
    case 'trocar_senha':
        include "views/trocar_senha.php";
        break;
    case 'animal':
        include "views/animal.php";
        break;
    case 'sobre':
        include "views/sobre.php";
        break;
    case 'usuarios':
        include "views/usuarios.php";
        break;
    case 'admin':
        include "views/admins.php";
        break;
    default:
        include "views/home.php";
        break;
}

include "views/footer.php";
