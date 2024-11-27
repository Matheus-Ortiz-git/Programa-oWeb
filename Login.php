<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style_login.css">

</head>
<body>
   
    <div class="cabeça">
        <header>
            <h1>Loja Exemplo</h1>
            <nav>
                <a class="cima" href="Front.php">Home</a>
                <a class="cima" href="carrinho.php">Carrinho</a>
                <a class="cima" href="Login.php">Login</a>
               
            </nav>
        </header>
    </div>
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

    <div class="baixo">
        <footer>
            <p>&copy; 2024 Loja Exemplo. Todos os direitos reservados.</p>
        </footer>
    
    </div>
        

</body>
</html>