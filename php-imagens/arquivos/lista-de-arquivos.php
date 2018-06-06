<div class="container">
    <table class="table table-striped table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Titulo</th>
                <th>Tipo</th>
                <th>Abrir</th>
                <th>Thumbnail</th>
            </tr>
        </thead>
        <?php
        include '../conexao.php';
        $diretorio = "../upload/";
        $consultaSQL = "SELECT arq_id, arq_nome, arq_titulo, arq_tipo from img_arq";
        $query = $mysqli->query($consultaSQL);
        while ($dados = $query->fetch_array()) {
            $arquivo = $diretorio . $dados['arq_nome'];
            ?>
            <tr>
                <td><?= $dados['arq_id']; ?></td>
                <td><?= $dados['arq_nome']; ?></td>
                <td><?= $dados['arq_titulo']; ?></td>
                <td><?= $dados['arq_tipo']; ?></td>
                <td>
                    <a href='<?= $arquivo; ?>' target="_blank">Abrir</a>
                    <a href="exclui.php?id=<?= $dados['arq_id']; ?> "> / Excluir</a>
                </td>
                <td><img src="<?= $arquivo; ?>" width='80px'> </td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>
