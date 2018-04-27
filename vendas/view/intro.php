<!--==========================
    Intro Section
 ============================-->
<section id="intro">
    <div class="intro-container">
        <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators"></ol>
            <div class="carousel-inner" role="listbox">
                <?php
                include ('../conexao/conexao.php');
                $sql = "select * from tb_intro";
                $query = $mysqli->query($sql);

                while ($dados = $query->fetch_array()) {
                    $codigo = $dados['cd_intro'];
                    $nome_imagem = $dados['tx_nome_imagem'];
                    $titulo = $dados['tx_titulo'];
                    $descricao = $dados['tx_descricao'];
                    $botao = $dados['tx_botao'];
                    
                    if ($codigo == 1) {
                        ?>
                        <div class="carousel-item active">
                            <div class="carousel-background"><img src="../img/intro-carousel/<?= $nome_imagem ?>" alt="<?= $nome_imagem ?>"></div>
                            <div class="carousel-container">
                                <div class="carousel-content">
                                    <h2><?= $titulo ?></h2>
                                    <p><?= $descricao ?></p>
                                    <a href="#featured-services" class="btn-get-started scrollto"><?= $botao ?></a>
                                </div>
                            </div>
                        </div>
                        <?php
                    } else {
                        ?>
                        <div class="carousel-item">
                            <div class="carousel-background"><img src="../img/intro-carousel/<?= $nome_imagem ?>" alt="<?= $nome_imagem ?>"></div>
                            <div class="carousel-container">
                                <div class="carousel-content">
                                    <h2><?= $titulo ?></h2>
                                    <p><?= $descricao ?></p>
                                    <a href="#featured-services" class="btn-get-started scrollto"><?= $botao ?></a>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                <?php } ?>
            </div>
            <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section><!-- #intro -->
