<main id="main">

<!--==========================
  Featured Services Section
============================-->
<section id="featured-services">
    <div class="container">
        <div class="row">

            <?php
            include ('../conexao/conexao.php');
            $sql = "select * from tb_vantagens";
            $query = $mysqli->query($sql);

            while ($dados = $query->fetch_array()) {
                $codigo = $dados['cd_vantagens'];
                $titulo = $dados['tx_titulo'];
                $descricao = $dados['tx_descricao'];

                if ($codigo == 1) {
                    ?>
                    <div class="col-lg-4 box">
                        <i class="ion-ios-bookmarks-outline"></i>
                        <h4 class="title"><a href=""><?= $titulo ?></a></h4>
                        <p class="description"><?= $descricao ?></p>
                    </div>
                    <?php
                } else if ($codigo == 2) {
                    ?>
                    <div class="col-lg-4 box box-bg">
                        <i class="ion-ios-stopwatch-outline"></i>
                        <h4 class="title"><a href=""><?= $titulo ?></a></h4>
                        <p class="description"><?= $descricao ?></p>
                    </div>
                    <?php
                } else {
                    ?>
                    <div class="col-lg-4 box">
                        <i class="ion-ios-heart-outline"></i>
                        <h4 class="title"><a href=""><?= $titulo ?></a></h4>
                        <p class="description"><?= $descricao ?></p>
                    </div>
                    <?php
                }
                ?>
                <?php } ?>
        </div>
    </div>
</section><!-- #featured-services -->