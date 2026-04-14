<?php
include "bd/conexao.php";

$query = "SELECT * FROM `usuario`";
$consulta_usuarios = mysqli_query ($conexao, $query);

$query = "SELECT * FROM `admin`";
$consulta_admins = mysqli_query ($conexao, $query);

$query  = "SELECT * FROM `gatos`";
$resultado_gato = mysqli_query ($conexao, $query);
$consulta_gato = mysqli_num_rows($resultado_gato);

$query  = "SELECT * FROM `cachorros`";
$resultado_cao = mysqli_query ($conexao, $query);
$consulta_cachorro = mysqli_num_rows($resultado_cao);

$total_anim = $consulta_cachorro + $consulta_gato;

