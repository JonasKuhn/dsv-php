<?php
include '../conexao.php';
$id = $_GET['id'];
$diretorio = "upload/";
$SQL_pegadados = "SELECT arq_nome FROM img_arq WHERE arq_id = $id";
$query = $mysqli->query($SQL_pegadados);
$dados = $query->fetch_array();
$arquivo = $diretorio.$dados['arq_nome'];
if(file_exists($arquivo)){
    $deleta = unlink($arquivo);
}
$mysqli->query("DELETE FROM img_arq WHERE arq_id = $id");
header("Location: indexArq.php?msg=OK_EXC");