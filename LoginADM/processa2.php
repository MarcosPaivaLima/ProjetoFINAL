<?php

session_start();

if(isset($_POST['cadastrar']) && !empty($_POST['usuario']) && !empty($_POST['senha'])){

    include_once('conexao2.php');
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha']; 

    $sql="SELECT * FROM ADM WHERE usuario = '$usuario' and senha = '$senha'";
    $result=$conexao->query($sql);


if(mysqli_num_rows($result) < 1){
    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);
    header('location: http://127.0.0.1/projetoFINAL/LoginADM/login.php');
}       
else{
    $_SESSION['usuario'] = $usuario;
    $_SESSION['senha'] = $senha;
    header('location:http://localhost/projetoFINAL/Sistema/index.php');
}

    mysqli_close($conexao);
}


?>