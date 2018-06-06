<?php

if ($_POST) {
    include '../conexao.php';
    if (isset($_FILES['arquivo'])) {
        $diretorio = "../upload/";
        $extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
        $novo_nome = md5(time()) . $extensao;
        $tamanho = $_FILES['arquivo']['size'];
        $tipo = $_FILES['arquivo']['type'];
        $nome = $_FILES['arquivo']['name'];
        $titulo = $_POST['titulo'];

        move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome);

        $comandoSQL = "INSERT INTO img_arq (arq_id, arq_nome, arq_tipo, arq_titulo, arq_extensao, data) "
                . "VALUES (null, '$novo_nome', '$tipo', '$titulo', '$extensao', NOW());";
    }

    if ($mysqli->query($comandoSQL)) {
        echo "<script type='text/javascript'>"
        . " window.location.href = 'indexArq.php?msg=OK'</script>";
    } else {
        die(mysqli_errno . " - " . $mysqli->error);
    }
}
