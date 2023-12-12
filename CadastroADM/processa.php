<?php
session_start();

include("conexao.php");

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$sql = "INSERT INTO ADM(nome, sobrenome, usuario, senha) VALUES ('$nome', '$sobrenome',  '$usuario', '$senha')";

if(mysqli_query($conexao, $sql)){

    header('Location: http://127.0.0.1/projetoFINAL/LoginADM/login.php');
}
else{
    echo "Usuario não cadastrado" . mysqli_error($conexao);
}
 
mysqli_close($conexao);


?>