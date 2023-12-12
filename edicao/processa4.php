<?php
session_start();
include_once('conexao4.php');

if(isset($_POST['update'])){

    $id=$_POST['id'];
    $nome=$_POST['nome'];   
    $sobrenome=$_POST['sobrenome'];    
    $senha=$_POST['senha'];
    $CPF=$_POST['CPF'];
    $CEP=$_POST['CEP'];
    $rendimento=$_POST['rendimento'];
    $saldo=$_POST['saldo'];
    $guardado=$_POST['guardado'];
    $fatura_valor=$_POST['fatura_valor'];
    $limite=$_POST['limite'];
    $fatura_vencimento=$_POST['fatura_vencimento'];

    
    $sqlUpdate = "UPDATE cliente SET nome='$nome', sobrenome='$sobrenome', CPF='$CPF', senha='$senha', CEP='$CEP', rendimento='$rendimento', saldo='$saldo', guardado='$guardado', fatura_valor='$fatura_valor', limite='$limite', fatura_vencimento='$fatura_vencimento' 
    WHERE id='$id'";

    $result = $conexao->query($sqlUpdate);
}
header('Location: http://localhost/ProjetoFINAL/Sistema/')
?>