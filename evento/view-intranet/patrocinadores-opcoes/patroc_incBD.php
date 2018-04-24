<?php
//CONECTAR AO BANCO
include '../../conexao/conexao.php';

//PASSAR OS DADOS AS VARIAVEIS
$nome_patrocinadores = $_POST['nome_patrocinadores'];
$sigla_patrocinadores = $_POST['sigla_patrocinadores'];

//ENVIAR DADOS AOS BANCOS DE DADOS
$sql = "insert into tb_patrocinadores(nome_patrocinadores, sigla_patrocinadores) "
        . "values('$nome_patrocinadores', '$sigla_patrocinadores');";

if($mysqli->query($sql)){
    header('location: ../intranet.php?url=patrocinadores');
    exit();
}else{
    echo("Erro: %s\n". $mysqli-error);
}