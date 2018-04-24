<?php
//conexao
include ("../../conexao/conexao.php");

//passar os dados para variaveis
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$cep = $_POST['cep'];
$nomeLocal = $_POST['nome_local'];
$numero = $_POST['numero'];

//enviar dados para o banco
$sql = "insert into tb_localizacao (
    endereco,
    bairro,
    cidade,
    cep,
    nome_local,
    numero
    ) values (
        '$endereco',
        '$bairro',
        '$cidade',
        '$cep',
        '$nomeLocal',
        '$numero'
     );";

//echo $sql;

if($mysqli->query($sql)){
    header('location: intranet.php?url_loc');
    exit;
} else {
    echo ("Erro: %s\n".$mysqli->error);
}
        
             
    