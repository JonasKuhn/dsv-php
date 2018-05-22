<?php
//CONECTAR AO BANCO

include '../../conexao/conexao.php';

//PASSAR OS DADOS AS VARIAVEIS
$nome_evento = $_POST['nome_evento'];
$data = $_POST['data'];
$descricao_evento = $_POST['descricao_evento'];
$valor = $_POST['valor_inscricao'];

$id = $_GET['id'];

/*
$dataN = explode('/', $data);
$dataBD = $dataN[2].'-'.$dataN[1].'-'.$dataN[0];
 * */
//ENVIAR DADOS AOS BANCOS DE DADOS
$sql = "update tb_informacao set "
        . "nome_evento = '$nome_evento',"
        . "data = '$data',"
        . "descricao_evento = '$descricao_evento',"
        . "valor_inscricao = '$valor' "
        . "where cod_informacao = $id;";
        
if($mysqli->query($sql)){
    header('location: ../intranet.php?url=descricao');
    exit();
}else{
    echo("Erro: %s\n". $mysqli->error);
}