<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <form method="POST">
    <div class="main-login">
        <div class="left-login">
            <h1><br> Faça o seu Cadastro!!</h1>
            <img src="binary-code-animate.svg" class ="left-login-image" alt="Homem no Computador">
        </div>
        <div class ="right-login/">
            <div class = "card-login">
                <h1>Cadastro</h1>
                <div class="textfield">
                    <label for = nome>Nome</label>
                    <input type="text" name = "nome" placeholder="Nome">
                </div>
                <div class="textfield">
                    <label for = email>Email</label>
                    <input type="email" name = "email" placeholder="Email">
                </div>
                <div class="textfield">
                    <label for = senha>Senha</label>
                    <input type="password" name = "senha" placeholder="Senha">
                </div>
                <input class="btn-login" type="submit" name="submit" id="submit">
            </div>
        </div>
    </div>
    </form>
</body>
</html>
<?php
    if(isset($_POST['submit']))
    {
        include_once('config.php');
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
       
        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,senha)VALUES ('$nome','$email','$senha')");
    }

?>