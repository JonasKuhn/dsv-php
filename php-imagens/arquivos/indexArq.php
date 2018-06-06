<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP + IMAGEM EM DIRETÓRIOS/ARQUIVOS</title>
        <!--BOOTSTRAP CORE CSS-->
        <link rel="stylesheet" href="../bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <h1>Cadastro de Arquivos/Imagens</h1> <hr> <br>
            <form enctype="multipart/form-data" method="post" action="arq_insBD.php">
                <label>Arquivos</label>
                <input type="file" name="arquivo" class="form-control" required>

                <label>Descrição</label>
                <input type="text" name="titulo" size="30" class="form-control" required>

                <button type="submit" class="btn">Enviar arquivo</button>
            </form>
            <?php
            $msg = $_GET['msg'];
            if (isset($msg) && $msg != false && $msg == 'OK') {
                echo "<br><div class='alert alert-success' role='alert'>"
                . "Arquivo enviado com sucesso para o servidor!!"
                . "</div>";
            } elseif (isset($msg) && $msg != false && $msg == 'OK_EXC') {
                echo "<br><div class='alert alert-success' role='alert'>"
                . "Arquivo excluído com sucesso!!"
                . "</div>";
            }
            ?>
            <div style="height:50px"></div>
            <?php include('lista-de-arquivos.php'); ?>
        </div>
    </body>
</html>