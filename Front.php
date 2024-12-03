<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja Exemplo</title>
    <link rel="stylesheet" href="./Trabalho/css/index.css">

</head>

<style>

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color:silver;
   /* background-color: #f4f4f4;*/
}
header {

    background-color: rgb(78, 78, 78);
   /* background: #333;

    color: #fff;
    padding: 10px 20px;
    text-align: center;*/
}
header nav .barra{
    
    padding: 10px;
    color: white;
    margin: 0 15px;
    text-decoration: none;
    padding:15px;
    border-radius: 100px;

}
.link{ 
    color: #fff; 
     padding: 15px;
     margin: 0 15px; 
     text-decoration: none;
      font-weight: bold; 
      border-radius: 5px; 
      transition: background-color 0.3s, color 0.3s;
     } 
     .link:hover { 
        background-color: #007bff; 
        color: #fff; 
    } 

nav {
    margin: 10px 0;
    
}.products {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between; /* Distribui os produtos uniformemente */
}

.container {
    width: 80%;
    margin: auto;
    overflow: ;
}
.product {
    flex: 1 1 30%;
    box-sizing: border-box;
    margin: 10px; 
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
    background-color: rgb(75, 75, 246);
    cursor: pointer;
}
.product img {
    align-items:center;
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
    align-items:center;

}
.slide{

    height:500px;
    top: 60%;
    left: 50%;
    text-align: center ;
    
    background-color: rgb(81, 88, 77);    
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
    font-size: 4.2rem;
    margin-bottom:1.5rem;
}
.header-bottom-side-left p{
    color: white;
    line-height: 1.5rem;
    margin-bottom:1.5rem;
}
.header-bottom-side-left button{
    background-color:rgb(47, 28, 144);
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
    height: 31px;
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


.parte-cima h2{
    display: inline;
    font-size:40px;

}
.h1{
    color:black
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






<footer>
    <p>&copy; 2024 Loja Exemplo. Todos os direitos reservados.</p>
</footer>

</body>
</html>
