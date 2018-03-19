<header class="logo">
    <a href="index.php"><img src="../img/logo-cageti.png" alt="img-cageti" name="img-cageti"></a>
</header>
<button class="btn-menu"><img src="../img/menu_icon.png" alt="icon-menu" name="icon-menu"></button>

<nav class="menu">
    <a class="btn-fechar">x</a>
    <ul>
        <li><a href="#">Inicial</a></li>
        <li><a href="#">Programação</a></li>
        <li><a href="#">Preços</a></li>
        <li><a href="#">Localização</a></li>   
        <li><a href="#">Contato</a></li>
    </ul>
    <script>
        $(".btn-menu").click(function (){
            $(".menu").show();
        }); 
        $(".btn-fechar").click(function (){
            $(".menu").hide();
        });
    </script>
</nav>
