<?php

if ($_POST) {
    include '../conexao.php';
    $arquivo = $_FILES["arquivo"]["tmp_name"];
    $tamanho = $_FILES["arquivo"]["size"];
    $tipo = $_FILES["arquivo"]["type"];
    $nome = $_FILES["arquivo"]["name"];
    $titulo = $_POST["titulo"];

    if ($arquivo != "nome") {
        $fp = fopen($arquivo, "rb");
        $conteudo = fread($fp, $tamanho);
        $conteudo = addslashes($conteudo);
        fclose($fp);

        $comandoSQL = "INSERT INTO arquivo VALUES(null, '$nome', '$titulo', '$conteudo', '$tipo')";

        if ($mysqli->query($comandoSQL)) {
            echo "<script type='text/javascript'>"
            . "window.location.href = 'indexblob.php?msg=OK'"
            . "</script>";
        } else {
            die(mysqli_errno . " - " . $mysqli->error);
        }
    }
}
