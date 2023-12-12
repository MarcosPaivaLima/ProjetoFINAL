<?php
session_start();
    $conexao = new mysqli("localhost","root","","bancojm");

    if(isset($_POST['entrar']) && !empty($_POST['CPF']) && !empty($_POST['senha'])){

        $CPF = $_POST['CPF'];
        $senha = $_POST['senha'];

        $sql = "SELECT CPF, senha FROM cliente WHERE CPF = '$CPF' and senha = '$senha'";
        $result = $conexao->query($sql);
        
        if(mysqli_num_rows($result) < 1){
            unset($_SESSION['CPF']);
            unset($_SESSION['senha']);
            header('location:http://127.0.0.1/projetoFINAL/Paginic.php?err=s');
        }       
        else{
            $_SESSION['CPF'] = $CPF;
            $_SESSION['senha'] = $senha;
            header('location:http://127.0.0.1/projetoFINAL/Menu.php');
        }
    }    

?>
