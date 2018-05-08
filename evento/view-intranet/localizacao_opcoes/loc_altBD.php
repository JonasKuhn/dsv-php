<?php
//conexao
include ("../../conexao/conexao.php");

//passar os dados para variaveis
$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$cep = $_POST['cep'];
$nome_local = $_POST['nome_local'];
$numero = $_POST['numero'];

$id = $_GET['id'];

//enviar dados para o banco
$sql = "update tb_localizacao set "
        . "rua = '$rua',"
        . "bairro = '$bairro',"
        . "cidade = '$cidade',"
        . "cep = '$cep',"
        . "nome_local = '$nome_local',"
        . "numero = '$numero'"
        . "where cod_localizacao = $id;";

if($mysqli->query($sql)){
    header('location: ../intranet.php?url=localizacao');
    exit();
} else {
    echo ("Erro: %s\n".$mysqli->error);
}
        
             
    