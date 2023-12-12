<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="processa.php" method="post">
    <label>Nome</label>
    <input type="text" name="nome" value="" placeholder="Nome">
    <label>Sobrenome</label>
    <input type="text" name="sobrenome" value="" placeholder="Sobrenome">
    <label>Usuario</label>
    <input type="text" name="usuario" value="" placeholder="Usuario">
    <label>Senha</label>
    <input type="text" name="senha" value="" placeholder="Senha">
    <button type="submit" name="cadastrar">Cadastrar</button>
</form>
</body>
</html>