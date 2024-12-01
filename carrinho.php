<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras</title>
    <link rel="stylesheet" href="style_carrinho.css">

</head>
<body>

<header>

    <nav>

    <div class="parte-cima">
            <div>
                <a class="barra-logo" href="Front.php">
                <img class="logotipo" src="logotype.jpeg" alt="logotipo">
                </a>

            </div>
            <form class="barra-pesquisa"  action="/search" method="get">
        <input class="pesquisa" type="text" name="query" placeholder="Digite sua pesquisa"> <button class="botton-pesquisa" type="submit">Buscar</button>
    </form>
       <div>

        <a href="Front.php">Home</a>
        <a href="carrinho.php">Carrinho</a>
        <a href="Login.php">Login</a>
    </nav>
</header>

<div class="container">
    <div class="cart">
        <h3>Itens no Carrinho</h3>
        <ul id="cartItems"></ul>
        <p id="totalPrice">Total: R$ 0,00</p>
    </div>
</div>

<footer>
    <p>&copy; 2024 Loja Exemplo. Todos os direitos reservados.</p>
</footer>

<script>
    function loadCart() {
        const cartItems = JSON.parse(localStorage.getItem('cart')) || [];
        const cartList = document.getElementById('cartItems');
        let total = 0;

        cartList.innerHTML = '';
        cartItems.forEach(item => {
            const li = document.createElement('li');
            li.textContent = `${item.name} - R$ ${item.price.toFixed(2)}`;
            cartList.appendChild(li);
            total += item.price;
        });

        document.getElementById('totalPrice').textContent = `Total: R$ ${total.toFixed(2)}`;
    }

    window.onload = loadCart;
</script>

</body>
</html>
