
<?php

include_once '../conexao/conexao.php';

$cod = $_GET['id'];

$sql = "delete from tb_informacao where cod_informacao = $cod;";

if($mysqli->query($sql)){
    header("location: intranet.php?url=descricao");
} else {
    echo "<script type='text/javascript'>window.alert('Falha ao excluir o Registro!');</script>";
}