<h2>Novo Patrocinador</h2>
<hr>

<form name="cadastro" action="patrocinadores-opcoes/patroc_incBD.php" method="POST" enctype="multipart/form-data">
    <table border="0" width="50%" align="center">
        <tbody>
            <tr>
                <td>CAMPOS</td>
                <td>VALORES</td>
            </tr>
            <tr>
                <td align="rigth">Nome Patrocinador:</td>
                <td><input type="text" name="nome_patrocinadores" value="" required/></td>
            </tr>
            <tr>
                <td>Sigla Patrocinador</td>
                <td><input type="text" name="sigla_patrocinadores" value="" required/></td>
            </tr>
            <tr>
                <td align='right' colspan='2'><input type="submit" value="Enviar" name="enviar" /></td>
            </tr>
        </tbody>
    </table>
</form>
