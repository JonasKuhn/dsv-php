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

//enviar dados para o banco
$sql = "insert into tb_localizacao(rua, bairro, cidade, cep, numero, nome_local)"
    . " values('$rua', '$bairro', '$cidade', '$cep', '$numero', '$nome_local');";

if($mysqli->query($sql)){
    header('location: ../intranet.php?url=localizacao');
    exit();
} else {
    echo ("Erro: %s\n".$mysqli->error);
}
        
             
    