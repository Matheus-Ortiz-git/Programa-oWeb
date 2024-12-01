<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja Exemplo</title>
    <link rel="stylesheet" href="style_front.css">

</head>

<style>

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
   /* background-color: #f4f4f4;*/
}
header {
    background-color:black;
   /* background: #333;

    color: #fff;
    padding: 10px 20px;
    text-align: center;*/
}
header  .barra{
    padding: 15px;
}

nav {
    margin: 10px 0;
    
}

nav .barra {
    border: 1px solid black;
    color: black;
    margin: 0 15px;
    text-decoration: none;
    padding:15px;
    background-color:white;
    border-radius: 100px;
}
.container {
    width: 80%;
    margin: auto;
    overflow: hidden;
}
.product {
    border-radius: 10px;
    text-align: center;
    align-items: center;
    background: #fff;
    border: 1px solid #ddd;
    margin: 20px;
    padding: 10px;
    float: left;
    width: calc(33.333% - 40px);
    box-sizing: border-box;
}
.product button{
    padding: 20px;
    width: 200px;
    border-radius: 100px;
    background-color: green;
    cursor: pointer;
}
.product img {
    
    max-width: 300px;
    height: 300px;

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
.botton-pesquisa{
    font-size: 15px;
    padding: 5px;
}
.parte-cima{
    display: flex;
    justify-content: space-between;

}
.slide{
    height:500px;
    top: 60%;
    left: 50%;
    text-align: center ;
    background-color: silver;    
}

.logotipo{
    width: 100px;
    height: 100px;
}
.header-bottom-side{
    display: flex;
    align-items: center;
    justify-self:center;
    padding: 1rem;
}
.header-bottom-side-left{
    height:100%;
    flex-basis:50%
}
.header-bottom-side-left h1{
    color: black;
    font-size: 3.2rem;
    margin-bottom:1.5rem;
}
.header-bottom-side-left p{
    color: black;
    line-height: 1.5rem;
    margin-bottom:1.5rem;
}
.header-bottom-side-left button{
    background-color:blue;
    border: none;
    cursor: pointer;
    padding: 0.8rem 3.8rem;
    border-radius: 100px;
    color: white;
    font-weight:500;
    font-size: 1rem;
    transition: all 0.2s;
}
.header-bottom-side-left button:hover{
    background-color: black;
}
.header-bottom-side-right{ 
    flex-basis:50%;
    display:flex;
    align-items:center;
    justify-content:center;
}
.header-bottom-side-right img{
    width: 60%;
    border-radius: 10px
}


/*
.container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.product {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin: 20px;
  border: 1px solid #ddd;
  padding: 10px;
  text-align: center;
}

.product img {
  max-width: 100%;
  height: auto;
}

.product button {
  margin-top: 10px;
}

*/

.barra-pesquisa {
    text-align:center;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 20px;
}

.pesquisa {
    height:30px;
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






.ver-mais {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px 0;
            font-size: 16px;
            color: #fff;
            background-color: #007BFF;
            border: none;
            border-radius: 5px;
            text-align: center;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .ver-mais:hover {
            background-color: #0056b3;
        }


</style>

<script>

document.addEventListener("DOMContentLoaded", function(){
     var conteudo = document.getElementById("conteudo"); 
     var botao = document.getElementById("verMais"); 
     if (localStorage.getItem("conteudoMostrado") === "true"){ 
        conteudo.style.display = "block"; botao.style.display = "none";
         }
     });

function toggleConteudo() { 
    var conteudo = document.getElementById("conteudo"); 
    var botao = document.querySelector(".ver-mais"); 
    conteudo.style.display = "block"; 
    botao.style.display = "none"; }
   
   </script>

<!-- Isso incrivelmente nao funcionou <script>
const cadastro = document.querySelector ("button")
const mostra = document.quertySelector-("formulario.php")

cadastro onclick function(){

    mostra.show()

}

</script>


<script>

const img = document.getElementById("container");
const img =  document.querySelectorAll("#container conteiner");

let i = 0;

function carrocel()(

    i++;

    if(i > container.length - 1){
        i = 0;
    };

    containers.style.transform = 'translateX($(- i = 500)px)';

);
    setInterval(carrocel, 1800);

</script>
-->

<body>

<header>
    <nav>

        <a class="barra" href="Front.php">Home</a>
        <a class="barra" href="carrinho.php">Carrinho</a>
        <a class="barra"  href="Login.php">Login</a>
        </div>
    </div>
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

   


    </nav>
</header>
<br>
    <header class="slide">  
    <div class="header-inner-content">
        <div class="header-bottom-side">
            <div class="header-bottom-side-left">
                
            <h1>Seja bem-vindo a nossa loja</h1>
                <p>Todos os tipos de roupas e coisa alheias voce ira achar nessa loja muito louca que eu estou criando,mas que uma loja,
                    um quarda-roupa particular.
                </p>
                <button>clica aqui pra ver</button>
            </div>
            
            <div class="header-bottom-side-right">
                <img src="https://www.calitta.com/22696-thickbox_default/vestido-das-mulheres-branco-modelo-social-para-trabalho-curto-manga-midi.jpg" alt="modelo">
            </div>
        </div>
    </div>
    </header>

<div class="container" id="container">
    <h2>Nossos Produtos</h2>
    <div class="product">
        <img src="https://tse3.mm.bing.net/th?id=OIP.sG95bbAGDVftuiktgV8NFAHaMi&pid=Api&P=0&h=180" alt="Produto 1">
        <h3>Produto 1</h3>
        <p>Descrição do produto 1.</p>
        <p>Preço: R$ 100,00</p>
        <button onclick="addToCart('Produto 1', 100)">Comprar</button>
    </div>
    <div class="product">
        <img src="https://i.pinimg.com/originals/56/47/fd/5647fd69e68474332a3ba3a75cbb1d3c.jpg" alt="Produto 2">
        <h3>Produto 2</h3>
        <p>Descrição do produto 2.</p>
        <p>Preço: R$ 150,00</p>
        <button onclick="addToCart('Produto 2', 150)">Comprar</button>
    </div>
    <div class="product">
        <img src="https://png.pngtree.com/png-clipart/20190614/original/pngtree-lady-hand-drawn-clothes-hand-drawn-clothes-clothes-pattern-ladies-clothes-png-image_3822870.jpg" alt="Produto 3">
        <h3>Produto 3</h3>
        <p>Descrição do produto 3.</p>
        <p>Preço: R$ 200,00</p>
        <button onclick="addToCart('Produto 3', 200)">Comprar</button>
    </div>

    <div class="product">
        <img src="https://tse3.mm.bing.net/th?id=OIP.sG95bbAGDVftuiktgV8NFAHaMi&pid=Api&P=0&h=180" alt="Produto 1">
        <h3>Produto 1</h3>
        <p>Descrição do produto 1.</p>
        <p>Preço: R$ 100,00</p>
        <button onclick="addToCart('Produto 1', 100)">Comprar</button>
    </div>
    <div class="product">
        <img src="https://i.pinimg.com/originals/56/47/fd/5647fd69e68474332a3ba3a75cbb1d3c.jpg" alt="Produto 2">
        <h3>Produto 2</h3>
        <p>Descrição do produto 2.</p>
        <p>Preço: R$ 150,00</p>
        <button onclick="addToCart('Produto 2', 150)">Comprar</button>
    </div>
    <div class="product">
        <img src="https://png.pngtree.com/png-clipart/20190614/original/pngtree-lady-hand-drawn-clothes-hand-drawn-clothes-clothes-pattern-ladies-clothes-png-image_3822870.jpg" alt="Produto 3">
        <h3>Produto 3</h3>
        <p>Descrição do produto 3.</p>
        <p>Preço: R$ 200,00</p>
        <button onclick="addToCart('Produto 3', 200)">Comprar</button>
    </div>
    
    <button class="ver-mais" onclick="toggleConteudo()">Ver Mais</button>
    <div class="conteudo" id="conteudo">
    <div class="product">
        <img src="https://tse3.mm.bing.net/th?id=OIP.sG95bbAGDVftuiktgV8NFAHaMi&pid=Api&P=0&h=180" alt="Produto 1">
        <h3>Produto 1</h3>
        <p>Descrição do produto 1.</p>
        <p>Preço: R$ 100,00</p>
        <button onclick="addToCart('Produto 1', 100)">Comprar</button>
    </div>
    <div class="product">
        <img src="https://i.pinimg.com/originals/56/47/fd/5647fd69e68474332a3ba3a75cbb1d3c.jpg" alt="Produto 2">
        <h3>Produto 2</h3>
        <p>Descrição do produto 2.</p>
        <p>Preço: R$ 150,00</p>
        <button onclick="addToCart('Produto 2', 150)">Comprar</button>
    </div>
    <div class="product">
        <img src="https://png.pngtree.com/png-clipart/20190614/original/pngtree-lady-hand-drawn-clothes-hand-drawn-clothes-clothes-pattern-ladies-clothes-png-image_3822870.jpg" alt="Produto 3">
        <h3>Produto 3</h3>
        <p>Descrição do produto 3.</p>
        <p>Preço: R$ 200,00</p>
        <button onclick="addToCart('Produto 3', 200)">Comprar</button>
    </div>
    </div>
</div>






<footer>
    <p>&copy; 2024 Loja Exemplo. Todos os direitos reservados.</p>
</footer>

</body>
</html>
