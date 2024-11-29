<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="aseet/css/style.css">

    <style>
body{
    font-family: Arial, Helvetica, sans-serif;
    margin: 0;
    padding: 0;
    height: 100%;
    height: 100vh;
    width: 100vw;
}

.cabeça{
    background-image: url('https://i.pinimg.com/originals/d7/c6/f7/d7c6f739c55a93b2b1deccf927bddeb6.jpg');
    background-size: cover;
    background-position: center;
    height: 99vh;
    width: 97.4vw;
    position: relative; /* Para o posicionamento absoluto do header */
}
footer {
    background: #333;
    color: #fff;
    text-align: center;
    padding: 10px 0;
    position: relative;
    bottom: 0;
    background-size: cover;
    background-position: center;
    width: 100vw;
    position: relative; /* Para o posicionamento absoluto do header */
}
.cima{
    margin-right: 200px;
    background-color:aliceblue;
    padding: 15px;
    text-decoration: none;
    border-radius: 10px;
}
header {
    position: absolute; /* Permite posicionar o header sobre a imagem */
    width: 97.42vw;
    padding: 20px;
    background-color: rgba(0, 0, 0, 0.9); /* Fundo semi-transparente */
    color: white;
    text-align: center; 
} 
.login{
    color: white;
    background-color: black;
    position: absolute;
    top: 60%;
    left: 50%;
    transform: translate(-50%, -50%) ;
    padding: 60px;
    border-radius: 10px;
    outline: none;
}
input{
    outline: none;
    border: none;
    border-radius: 5px;
    padding: 15px;
    font-size: 15px;

}
.inputSubmit{
    width: 100%;
    border-radius: 10px;
    background-color: aqua;
    padding: 10px;
    font-size: 15px;
    cursor: pointer;
}
.inputSubmit:hover{
    background-color: blue;
}
.cadastro{
    text-align: center;
}
.nav_bar{
display: flex;
justify-content: space-between;

}
    </style>

</head>
<body >
        <header class="cabeça">
            <h1>Loja Exemplo</h1>
            <nav class="nav_bar">
                <a class="cima" href="Front.php">Home</a>
                <a class="cima" href="carrinho.php">Carrinho</a>
              
                <div clas="botao_login">
                <button><a href="Login.php">Login</a></button>
            </div>
            
        </nav>
        </header>
        
    <form action="testLogin.php" method="POST">
    <div class="login"> 
        <h1>LOGIN</h1>
        <input id="email" name="email" placeholder="Email">
        <br><br>
        <input type="password" name="senha" placeholder="Senha">
        <br>   <br>
        <input class="inputSubmit" type="submit" name="submit" value="enviar">
        <br>
        <h4 class="cadastro"><a href="formulario.php" >fazer cadastro</a></h4>
    </div>
    </form>

        <footer>
            <p>&copy; 2024 Loja Exemplo. Todos os direitos reservados.</p>
        </footer>
    

        

</body>
</html>