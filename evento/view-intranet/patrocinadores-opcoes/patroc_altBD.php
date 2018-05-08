<?php
//CONECTAR AO BANCO
include '../../conexao/conexao.php';

//PASSAR OS DADOS AS VARIAVEIS
$nome_patrocinadores = $_POST['nome_patrocinadores'];
$sigla_patrocinadores = $_POST['sigla_patrocinadores'];

$id = $_GET['id'];

//ENVIAR DADOS AOS BANCOS DE DADOS
$sql = "update tb_patrocinadores set "
        . "nome_patrocinadores = '$nome_patrocinadores',"
        . "sigla_patrocinadores = '$sigla_patrocinadores'"
        . " where cod_patrocinadores = $id;";

if($mysqli->query($sql)){
    header('location: ../intranet.php?url=patrocinadores');
    exit();
}else{
    echo("Erro: %s\n". $mysqli-error);
}