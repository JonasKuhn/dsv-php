<h2>Descrição</h2>
<hr>

<table border="1" width="95%">
    <thead>
        <tr>
            <th class="col5">
                <span>
                    <a href="?url=desc_inc"><img src="../img/icon-novo-arquivo.png" alt="novo" title="NOVO"></a>
                </span>
            </th>
            <th>Código</th>
            <th>Nome do evento</th>
            <th>Data</th>
            <th>Descrição do Evento</th>
            <th>Valor da Inscrição</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include '../conexao/conexao.php';
        $sql = "select * from tb_informacao ";
        //mandando para o banco de dados o comando de $sql//
        $query = $mysqli->query($sql);

        //retorna o numero de registros da tabela
        //$contador = $query->num_rows;

        while ($dados = $query->fetch_array()) {
            $cod = $dados['cod_informacao'];
            $nomeEvento = $dados['nome_evento'];
            $dataEvento = $dados['data'];
            $descricao = substr($dados['descricao_evento'], 0, 32);
            $valor = $dados['valor_inscricao'];
            //$valor = number_format($dados['valor_inscricao'], 2, ',', '.');
            $contador ++;
            
            ?>
            <tr>
                <td class="col1">
                    <span>
                        <a href="?url=desc_alt&id=<?= $cod ?>"><img src="../img/icon-editar.png" alt="editar" title="EDITAR"></a>
                        <a href="?url=desc_exc&id=<?= $cod ?>" onclick="return excluir('<?=$nomeEvento?>');"><img src="../img/icon-lixo.png" alt="apagar" title="APAGAR"></a>
                    </span>
                </td>
                <td class="col2"><?= $cod ?></td>
                <td class="col3"><?= $nomeEvento ?></td>
                <td class="col4"><?= $dataEvento ?></td>
                <td class="col1"><?= $descricao ?></td>
                <td class="col2">R$<?= $valor ?></td>
            </tr>

        <?php } ?>
        <tr>
            <td colspan="6" class="total">Total de registros: <?= $contador ?></td>

        </tr>
    </tbody>
</table>
