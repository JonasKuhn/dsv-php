<?php

include_once ('../conexao/conexao.php');

$cod = $_GET['id'];

$sql = "delete from tb_localizacao where cod_localizacao = $cod;";

if ($mysqli->query($sql)) {
    header("location: intranet.php?url=localizacao");
}else{
    echo "<script type='text/javascript'>window.alert('Falha ao excluir o registro!')</script>";
}