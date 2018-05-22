<h2>Alterar Descrição</h2>
<hr>

<?php
    include '../conexao/conexao.php';
    $id = $_GET['id'];
    $sql = "select * from tb_informacao where cod_informacao = $id;";
    $query = $mysqli->query($sql);
    $dados = $query->fetch_array();
    $nome_evento = $dados['nome_evento'];
    $data = $dados['data'];
    $descricao = $dados['descricao_evento'];
    $valor = $dados['valor_inscricao'];
      
?>

<form name="cadastro" action="descricao_opcoes/desc_altBD.php?id=<?= $id ?>" method="POST" >
    <table border="0" width="50%" align="center">
        <tbody>
            <tr>
                <td>CAMPOS</td>
                <td>VALORES</td>
            </tr>
            <tr>
                <td align="rigth">Nome Evento:</td>
                <td><input type="text" name="nome_evento" value="<?=$nome_evento?>" required/></td>
            </tr>
            <tr>
                <td>Data Evento:</td>
                <td><input type="date" name="data" value="<?=$data?>" required/></td>
            </tr>
            <tr>
                <td>Descrição Evento:</td>
                <td><input type="text" name="descricao_evento" value="<?=$descricao?>" required/></td>
            </tr>
            <tr>
                <td>Valor Inscrição:</td>
                <td><input type="text" name="valor_inscricao" value="<?=$valor?>" required/></td>
            </tr>
            <tr>
                <td align='right' colspan='2'><input type="submit" value="Enviar" name="enviar" /></td>
            </tr>
        </tbody>
    </table>
</form>