<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link rel="stylesheet" href="trabalho/css/página/Login.css">

</head>
<body>
<?php
include "header.php";

?>
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
    <?php
include "footer.php";

?>
</body>
</html>
