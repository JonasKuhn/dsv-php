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
        $consultaSQL = "SELECT arquivo_id, arquivo_nome, arquivo_titulo, arquivo_tipo from arquivo";
        $query = $mysqli->query($consultaSQL);
        while ($dados = $query->fetch_array()) {
            ?>
            <tr>
                <td><?= $dados['arquivo_id'] ?></td>
                <td><?= $dados['arquivo_nome'] ?></td>
                <td><?= $dados['arquivo_titulo'] ?></td>
                <td><?= $dados['arquivo_tipo'] ?></td>
                <td><a href='abrir-arquivo.php?id=<?= $dados['arquivo_id']; ?>'>Abrir</a></td>
                <td><img src="abrir-arquivo.php?id=<?= $dados['arquivo_id']; ?>" width='80px'> </td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>
