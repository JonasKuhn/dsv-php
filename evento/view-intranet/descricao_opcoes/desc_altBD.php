<?php
//CONECTAR AO BANCO
include '../../conexao/conexao.php';

//PASSAR OS DADOS AS VARIAVEIS
$novo_evento = $_POST['nome_evento'];
$data_evento = $_POST['data_evento'];
$descricao_evento = $_POST['descricao_evento'];
$valor_evento = str_replace(',', '.', $_POST['valor_evento']);

//ENVIAR DADOS AOS BANCOS DE DADOS
$sql = "insert into tb_informacao(nome_evento, data, descricao_evento, valor_inscricao) "
        . "values('$novo_evento', '$data_evento', '$descricao_evento', '$valor_evento');";
        
if($mysqli->query($sql)){
    header('location: ../intranet.php?url=descricao');
    exit();
}else{
    echo("Erro: %s\n". $mysqli-error);
}