<div class="conteudo">
    <hr>
    <div class="patrocinadores">
        <div class="topico">
            <p class="evento-item">&emsp;PATROCINADORES</p> 
            <?php
            include ('../conexao/conexao.php');

            $sql = "select * from tb_patrocinadores";
//mandando para o banco de dadoso comando de $sql//
            $query = $mysqli->query($sql);

            while($dados = $query->fetch_array()){
            $siglaPatrocinador = $dados['sigla_patrocinadores'];
            $nomePatrocinador = $dados['nome_patrocinadores'];
            ?>
            <p>&emsp;<?php echo "$siglaPatrocinador"?></p>
            <p><?php echo "$nomePatrocinador"?></p>
            <?php } ?>
        </div>
    </div>
</div>
