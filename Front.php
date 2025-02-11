<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja Exemplo</title>
    <link rel="stylesheet" href="trabalho/css/página/front.css">
</head>

<body>
<header>
    <nav>
    <div class="parte-cima">
            <div>
                <a class="barra-logo" href="Front.php">
                    <h2 class="h1">Fashion</h2><h2>Online</h2>
                </a>
            </div>
            <form class="barra-pesquisa"  action="/search" method="get">
        <input class="pesquisa" type="text" name="query" placeholder="Digite sua pesquisa"> <button class="botton-pesquisa" type="submit">Buscar</button>
    </form>
       <div>

       <a class="link" href="Front.php">Home</a>
        <a class="link" href="carrinho.php">Carrinho</a>
        <a class="link"  href="Login.php">Login</a>


    </nav>
</header>
<br>
    <header class="slide">  
    <div class="header-inner-content">
        <div class="header-bottom-side">
            <div class="header-bottom-side-left">
                
            <h1>Seja bem-vindo a nossa loja</h1>
                <p>Aqui, nossa paixão é proporcionar a você uma experiência de compra única e agradável.
                     Oferecemos uma ampla variedade de produtos de alta qualidade, selecionados com carinho para atender às suas
                      necessidades e superar suas expectativas. Nosso compromisso é com a excelência no atendimento ao cliente,
                       preços competitivos e produtos que fazem a diferença no seu dia a dia.
                </p>
                <button>VER</button>
            </div>
            
            <div class="header-bottom-side-right">
                <img src="https://www.calitta.com/22696-thickbox_default/vestido-das-mulheres-branco-modelo-social-para-trabalho-curto-manga-midi.jpg" alt="modelo">
            </div>
        </div>
    </div>
    </header>

<div class="container" id="container">
    <h2>Nossos Produtos</h2>
    <div class="products">
    <div class="product">
        <img src="https://cea.vtexassets.com/arquivos/ids/58750822-300-360?v=638542433613300000&width=300&height=360&aspect=true" alt="Produto 1">
        <h3>Short saia</h3>
        <p>Jeans cintura alta com fenda azul</p>
        <p>Preço: R$ 100,00</p>
        <button onclick="addToCart('Produto 1', 100)">Comprar</button>
    </div>
    <div class="product">
        <img src="https://cea.vtexassets.com/arquivos/ids/59097768-300-360?v=638664236149630000&width=300&height=360&aspect=true" alt="Produto 2">
        <h3>Saia midi godê</h3>
        <p>Jeans cintura super alta azul</p>
        <p>Preço: R$ 150,00</p>
        <button onclick="addToCart('Produto 2', 150)">Comprar</button>
    </div>
    <div class="product">
        <img src="https://cea.vtexassets.com/arquivos/ids/58399350-300-360?v=638387674029730000&width=300&height=360&aspect=true" alt="Produto 3">
        <h3>Short</h3>
        <p>Jeans cintura alta média barra fio azul claro</p>
        <p>Preço: R$ 200,00</p>
        <button onclick="addToCart('Produto 3', 200)">Comprar</button>
    </div>
    
</div>
    
    

</div>






<?php
include "footer.php";
    ?>
</body>
</html>
