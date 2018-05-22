<h2>Alterar Patrocinador</h2>
<hr>
<?php
 include '../conexao/conexao.php';
    $id = $_GET['id']; //pega o valor na url
    $sql = "select * from tb_patrocinadores where cod_patrocinadores = $id;";
    $query = $mysqli->query($sql);
    $dados = $query->fetch_array();
    $nome_patrocinadores = $dados['nome_patrocinadores'];
    $sigla_patrocinadores = $dados['sigla_patrocinadores'];
?>
<form name="cadastro" action="patrocinadores-opcoes/patroc_altBD.php?id=<?=$id;?>" method="POST" enctype="multipart/form-data">
    <table border="0" width="50%" align="center">
        <tbody>
            <tr>
                <td>CAMPOS</td>
                <td>VALORES</td>
            </tr>
            <tr>
                <td align="rigth">Nome Patrocinador:</td>
                <td><input type="text" name="nome_patrocinadores" value="<?= $nome_patrocinadores?>" required/></td>
            </tr>
            <tr>
                <td>Sigla Patrocinador</td>
                <td><input type="text" name="sigla_patrocinadores" value="<?= $sigla_patrocinadores?>" required/></td>
            </tr>
            <tr>
                <td align='right' colspan='2'><input type="submit" value="Enviar" name="enviar" /></td>
            </tr>
        </tbody>
    </table>
</form>
