<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Login</title>
</head>
<body>
        <form action="processa2.php" method="post">
            <label for="">Usuário</label>
            <input type="text" name="usuario" value placeholder="Usuario"><br>
            <label for="">Senha</label>
            <input type="text" name="senha" value placeholder="Senha"><br>
            <button type="subit"  name="cadastrar">Entrar</button>

        </form>

        <a href="http://localhost/atv31/Cadastro/">Voltar</a>
</body>
</html>