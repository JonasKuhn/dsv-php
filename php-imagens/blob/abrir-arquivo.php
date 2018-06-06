<?php

include '../conexao.php';
$consultaSQL = "SELECT arquivo_tipo, arquivo_conteudo "
        . "FROM arquivo "
        . "WHERE arquivo_id = $_GET[id]";

$query = $mysqli->query($consultaSQL);
$dados = $query->fetch_array();

$tipo = $dados['arquivo_tipo'];
$conteudo = $dados['arquivo_conteudo'];
header('Content-Type: $tipo');
echo $conteudo;
