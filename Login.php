<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link rel="stylesheet" href="./Trabalho/css/página/Login.css">

</head>
<body>
<style>
    .parte-cima{
    display: flex;
    justify-content: space-between;
    align-items: center;
}
input{
    font-size:15px;
    
}
footer{
    color:white;
}
nav {
    margin: 10px 0;
    
}
.link{ color: #fff; 
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
.logotipo{
    width: 100px;
    height: 100px;
}
body {
            display: flex;
            flex-direction: column;
            min-height: 120vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-image:url('fundo.png');
            background-repeat: no-repeat;
            background-size: cover;
            background-position:  center;
        
        }
        header{
            height:100px;
        }
header, footer {
            background-color: rgb(78, 78, 78);
            padding: 1rem;
            text-align: center;
        }
 main {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 1rem;
        }
.login-container {
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
.login-container h2 {
            margin-bottom: 1rem;
        }
.login-container label {
            display: block;
            margin-bottom: 1rem;
        }
.login-container input {
            width: 250px;
            padding: 0.5rem;
            margin-bottom: 1rem;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
.login-container button {
            width: 270px;
            padding: 1rem;
            background-color: #007bff;
            border: none;
            color: #fff;
            border-radius: 10px;
            cursor: pointer;
        }
.login-container button:hover {
            background-color: #0056b3;
        }

        .parte-cima h2{
    color:white;
    display: inline;
    font-size:40px;

}
.h1{
    color:black
}
.barra-logo{
    text-decoration:none;
}
</style>


<header>
    <nav>

    <div class="parte-cima">
            <div>
                <a class="barra-logo" href="Front.php">
                    <h2 class="h1">Fashion</h2><h2>Online</h2>
                </a>
            </div>
       <div>

    <a class="link" href="Front.php">Home</a>
    <a class="link" href="carrinho.php">Carrinho</a>
    <a class="link" href="Login.php">Login</a>
</nav>
    </header>
    <main>

        <div class="login-container">
            <h2>Login</h2>
            <form>
                <label for="username">Usuário:</label>
                <input type="text" id="username" placeholder="Digite seu Email" name="username" required>
                <label for="password">Senha:</label>
                <input type="password" id="password" placeholder="Digite sua Senha" name="password" required>
                <br>
                <button type="submit">Entrar</button>
            </form>
            <br>
            <a class="cadastro" href="#" class="link">Não tem uma conta? Cadastre-se aqui</a>
        </div>
    </main>
    <footer>
        <p>&copy; 2024 Loja Exemplo. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
