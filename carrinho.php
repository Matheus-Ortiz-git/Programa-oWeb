<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras</title>
<link rel="stylesheet" href="./Trabalho/css/index.css">

</head>

<style> 
    .parte-cima h2{
    display: inline;
    font-size:40px;

}
.h1{
    color:black
}
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color:silver;
}
.link{ color: #fff; 
    padding: 15px;
    margin: 0 15px; text-decoration: none;
     font-weight: bold; 
     border-radius: 5px; 
     transition: background-color 0.3s, color 0.3s;
    } 
    .link:hover { 
       background-color: #007bff; 
       color: #fff; 
   } 
header {
    background: #333;
    color: #fff;
    padding: 10px 20px;
    text-align: center;
}
nav {
    margin: 10px 0;
}
nav a {
    color: #fff;
    margin: 0 15px;
    text-decoration: none;
}
.container {
    width: 80%;
    margin: auto;
    overflow: hidden;
}
.cart {
    margin: 20px 0;
    padding: 10px;
    background: #fff;
    border: 1px solid #ddd;
}
footer {
    background: #333;
    color: #fff;
    text-align: center;
    padding: 10px 0;
    position: relative;
    bottom: 0;
    width: 100%;
}
.parte-cima{
    display: flex;
    justify-content: space-between;
    align-items:center;
}
.logotipo{
    width: 100px;
    height: 100px;
}
header{
    background-color: rgb(78,78,78);
}
.pesquisa {
    height:31px;
    width: 600px;
    padding: 10px;
    border: 2px solid #ddd;
    border-radius: 25px 0 0 25px;
    outline: none;
    font-size: 16px;
    transition: border-color 0.3s;
}
 
.pesquisa:focus {
    border-color: #007BFF;
}
.botton-pesquisa {
    height:55px;
    padding: 10px 20px;
    border: 2px solid #007BFF;
    border-radius: 0 25px 25px 0;
    background-color: #007BFF;
    color: #fff;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s, border-color 0.3s;
}

.botton-pesquisa:hover {
    background-color: #0056b3;
    border-color: #0056b3;
}
.barra-pesquisa {
    text-align:center;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 20px;
}
</style>

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
