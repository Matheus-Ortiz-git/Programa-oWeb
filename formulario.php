<?php
    if(isset($_POST['submit']))
        {

       /* 
        print_r('nome: ' . $_POST['nome']);
        print_r('<br>');
        print_r('email: ' . $_POST['email']);
        print_r('<br>');
        print_r('telefone: ' . $_POST['telefone']);
        print_r('<br>');
        print_r('sexo: ' . $_POST['genero']);
        print_r('<br>'); 
        print_r('Data de nascimento: ' .$_POST['dt_nasc']);
        print_r('<br>');
        print_r('cidade: ' . $_POST['cidade']);
        print_r('<br>');
        print_r('estado: ' . $_POST['estado']);
        print_r('<br>');
        print_r('endereco: ' . $_POST['endereco']);
    */
        
 
        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $dt_nasc = $_POST['dt_nasc'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];
        
        $result = mysqli_query($conexao, "INSERT INTO formulario(nome, email, telefone, sexo, dt_nasc, cidade, estado, endereco)
                                VALUES ('$nome', '$email', '$telefone', '$sexo', '$dt_nasc', '$cidade', '$estado', '$endereco')");

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<style>

body{

font-family: Arial, Helvetica, sans-serif;
background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));

}
.coisa_login{
position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
padding: 15px;
border-radius: 10px;
color: black;
}
legend{
border: 1px solid black;
text-align: center;
padding: 10px;
border-radius: 10px;
background-color: blue;

}
.caixa_escrita{
position: relative;
}
.escreva{
background: none;
border: none;
border-bottom: 1px solid black;
outline: none;
color: black;
font-size: 15px;
width: 100%;
letter-spacing: 2px;
}
.caixa{
position: absolute;
top: 0px;
left: 0px;
pointer-events: none;
transition: .5s;
}
.escreva:focus ~ .caixa, .escreva:valid ~ .caixa{
top: -20px;
font-size: 12px;
color: brown;
}
#dt_nasc{
outline: none;
border: none;
padding: 9px;
font-size: 15px;
border-radius: 10px;
}
#submit{
background-color:blueviolet ;
padding: 20px;
width: 100%;
border-radius: 9px;
border: none;
cursor: pointer;
}
#submit:hover {
background-color:violet;
}

</style>
<body>
    <div class="coisa_login">

        <form action="formulario.php" method="POST">
             <fieldset>
                <legend>formulario de login</legend>
                <br><br>
                <div class="caixa_escrita">
                    <input type="text" name="nome" id="nome" class="escreva" required>
                    <label for="nome" class="caixa">nome completo</label>
                </div>
                <br><br>
                <div class="caixa_escrita">
                    <input type="password" name="senha" id="senha" class="escreva" required>
                    <label for="senha" class="caixa">digite sua senha</label>
                </div>
                <br><br>
                <div class="caixa_escrita">
                    <input type="text" name="email" id="email" class="escreva" required>
                    <label for="email" class="caixa">E-mail</label>
                </div>
                <br><br>
                <div class="caixa_escrita">
                    <input type="tel" name="telefone" id="telefone" class="escreva" required>
                    <label for="telefone" class="caixa">Telefone</label>
                </div>
                <br><br>
                <p>Sexo: </p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">feminino</label>
                <br>
                    <input type="radio" id="Masculino" name="genero" value="Masculino" required>
                    <label for="Masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">outro</label>
                <br><br>
                        <label for="dt_nasc">Data de Nascimento</label>
                        <input type="date" name="dt_nasc" id="dt_nasc" required>

                    <br><br>
                <div class="caixa_escrita">
                    <input type="text" name="cidade" id="cidade" class="escreva" required>
                    <label for="cidade" class="caixa">Cidade</label>
                </div>
                <br><br>
                    <div class="caixa_escrita">
                        <input type="text" name="estado" id="estado" class="escreva" required>
                        <label for="estado" class="caixa">Estado</label>
                    </div>
                    <br><br>
                <div class="caixa_escrita">
                        <input type="text" name="endereco" id="endereco" class="escreva" required>
                        <label for="endereço" class="caixa">Endereco</label>
                    </div>
                    <br><br>
                    <input type="submit" name="submit" id="submit"> 

             </fieldset>
        </form>

    </div>
</body>
</html>