<div class="conteudo">
    <?php
    include ('../conexao/conexao.php');

    $sqlValor = "select valor_inscricao "
            . "from tb_informacao";
    $queryValor = $mysqli->query($sqlValor);
    $dadosValor = $queryValor->fetch_array();
    
    $sqlCronograma = "select * from tb_localizacao";

    $queryCronograma = $mysqli->query($sqlCronograma);

    $dadosCronograma = $queryCronograma->fetch_array();
    $rua = $dadosCronograma['endereco'];
    $numero = $dadosCronograma['numero'];
    $cidade = $dadosCronograma['cidade'];
    $bairro = $dadosCronograma ['bairro'];
    $localizacao = $dadosCronograma['nome_local'];
    ?>
    <hr>
    <div class="topico">
        <p class="evento-item">&emsp;CRONOGRAMA DO EVENTO</p>    
        <p>&emsp;Esse evento será relizado na cidade de <?php echo "$cidade".' na '."$rua".', Nº. '.$numero.', bairro '.$bairro.'.<br> Junto à '.$localizacao.'.'?></p>

        <p class="p-center"><br>Terá início às 08h00min.</p>
        <p class="p-center">Esta será a ordem de jogos:</p>

        <p class="p-center">Time A X Time G</p>
        <p class="p-center">Time B X Time H</p>
        <p class="p-center">Time C X Time I</p>
        <p class="p-center">Time D X Time J</p>
        <p class="p-center">Time E X Time K</p>
        <p class="p-center">Time F X Time L</p>

        <p><br>Após os encontros acima será realizada a próxima tabela de disputas de acordo com cada resultado.</p>
        
        <p class="evento-item">&emsp;VALORES</p>   
        
        <?php
        $valor = number_format($dadosValor['valor_inscricao'],2 ,',', '.');
        ?>
        
        <p>&emsp;O valor para as duplas que irão participar sera de <?php echo "$valor" ?> reais.</p>
        <p>OBS:Esse valor é coletado para realizar a premiação das equipes.</p>
        
        <p class="evento-item">&emsp;PREMIAÇÕES</p>
        <ul>
            <li><p>1º lugar: 30% do valor total das inscrições</p></li>
            <li><p>2º lugar: 10% do valor total das inscrições</p></li>
        </ul>
        
    </div>
</div>