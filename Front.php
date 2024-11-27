<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja Exemplo</title>
    <link rel="stylesheet" href="style_front.css">

</head>
<!-- Isso incrivelmente nao funcionou <script>
const cadastro = document.querySelector ("button")
const mostra = document.quertySelector-("formulario.php")

cadastro onclick function(){

    mostra.show()

}

</script>
-->


<body>

<header>
    <h1>Loja Exemplo</h1>
    <nav>
        <a href="Front.php">Home</a>
        <a href="carrinho.php">Carrinho</a>
        <a href="Login.php">Login</a>
       
    </nav>
</header>

<div class="container">
    <h2>Nossos Produtos</h2>
    <div class="product">
        <img src="https://via.placeholder.com/150" alt="Produto 1">
        <h3>Produto 1</h3>
        <p>Descrição do produto 1.</p>
        <p>Preço: R$ 100,00</p>
        <button onclick="addToCart('Produto 1', 100)">Comprar</button>
    </div>
    <div class="product">
        <img src="https://via.placeholder.com/150" alt="Produto 2">
        <h3>Produto 2</h3>
        <p>Descrição do produto 2.</p>
        <p>Preço: R$ 150,00</p>
        <button onclick="addToCart('Produto 2', 150)">Comprar</button>
    </div>
    <div class="product">
        <img src="https://via.placeholder.com/150" alt="Produto 3">
        <h3>Produto 3</h3>
        <p>Descrição do produto 3.</p>
        <p>Preço: R$ 200,00</p>
        <button onclick="addToCart('Produto 3', 200)">Comprar</button>
    </div>
</div>

<footer>
    <p>&copy; 2024 Loja Exemplo. Todos os direitos reservados.</p>
</footer>

</body>
</html>
