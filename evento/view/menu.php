<button class="btn-menu"><img src="../img/icon-menu.png" alt="icon-menu" name="icon-menu"></button>

<nav class="menu">
    <a class="btn-fechar">x</a>
    <ul class="nav">
        <li><a href="#inicio">Inicial</a></li>
        <li><a href="#descricao">Descrição</a></li>
        <li><a href="#cronograma">Cronograma</a></li>
        <li><a href="#patrocinadores">Patrocinadores</a></li> 
        <li><a href="#valores">Valores</a></li>   
        <li><a href="#contato">Contato</a></li>
    </ul>
    <script>
        $(".btn-menu").click(function () {
            $(".menu").show();
        });
        $(".btn-fechar").click(function () {
            $(".menu").hide();
        });
    </script>
    <script>
        $('.nav a[href^="#"]').on('click', function (e) {
            e.preventDefault();
            var id = $(this).attr('href'),
                    targetOffset = $(id).offset().top;

            $('html, body').animate({
                scrollTop: targetOffset - 100
            }, 500);
        });
    </script>
</nav>
<header class="logo">
    <a href="index.php"><img src="../img/logo-cageti.png" alt="img-cageti" name="img-cageti"></a>
</header>
