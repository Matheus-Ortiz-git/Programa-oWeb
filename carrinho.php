<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras</title>
<link rel="stylesheet" href="trabalho/css/página/carrinho.css">

</head>
<body>
    <?php
include "header.php";
    ?>

<div class="container">
    <div class="cart">
        <h3>Itens no Carrinho</h3>
        <ul id="cartItems"></ul>
        <p id="totalPrice">Total: R$ 0,00</p>
    </div>
</div>

<?php
include "footer.php";
    ?>
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
