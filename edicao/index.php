<?php
session_start();

if(!empty($_GET['id'])){

    include_once('conexao4.php');
    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM cliente WHERE ID = $id ";

    $result = $conexao->query($sqlSelect);

    if($result->num_rows > 0)
    {
        while($user_data = mysqli_fetch_assoc($result)){
            $id=$user_data['id'];
            $nome=$user_data['nome'];
            $sobrenome=$user_data['sobrenome'];
            $senha=$user_data['senha'];
            $CPF=$user_data['CPF'];
            $CEP=$user_data['CEP']; 
            $rendimento=$user_data['rendimento'];
            $saldo=$user_data['saldo'];
            $guardado=$user_data['guardado'];
            $fatura_valor=$user_data['fatura_valor'];
            $limite=$user_data['limite'];
            $fatura_vencimento=$user_data['fatura_vencimento'];
        }
    }
    else{
        header('Location: http://localhost/ProjetoFINAL/Sistema/index.php');
    }

    mysqli_close($conexao);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Edição</title>
</head>
<body>
    <div class="geral-edit">
        <form action="processa4.php" method="post">
            <label>Nome</label>
            <input type="text" name="nome" id="nome" value="<?php echo $nome?>" placeholder="Nome"><br>

            <label>Sobrenome</label>
            <input type="text" name="sobrenome" id="sobrenome" value="<?php echo $sobrenome?> " placeholder="Sobrenome"><br>
        
            <label>Senha</label>
            <input type="text" name="senha" id="senha" value="<?php echo $senha?> " placeholder="Senha"><br>
            
            <label>CPF</label>
            <input type="text" name="CPF" id="CPF" value="<?php echo $CPF?> " placeholder="CPF"><br>
                    
            <label>CEP</label>
            <input type="text" name="CEP" id="CEP" value="<?php echo $CEP?> " placeholder="CEP"><br>
                    
            <label>rendimento</label>
            <input type="text" name="rendimento" id="rendimento" value="<?php echo $rendimento?> " placeholder="rendimento"><br>
        
            <label>saldo</label>
            <input type="text" name="saldo" id="saldo" value="<?php echo $saldo?> " placeholder="saldo"><br>
        
            <label>guardado</label>
            <input type="text" name="guardado" id="guardado" value="<?php echo $guardado?> " placeholder="guardado"><br>
            <input type="hidden" name="id" value="<?php echo $id?>">

            <label>fatura_valor</label>
            <input type="text" name="fatura_valor" id="fatura_valor" value="<?php echo $fatura_valor?> " placeholder="fatura_valor"><br>

            <label>limite</label>
            <input type="text" name="limite" id="limite" value="<?php echo $limite?> " placeholder="fatura_valor"><br>

            <label>fatura_vencimento</label>
            <input type="text" name="fatura_vencimento" id="fatura_vencimento" value="<?php echo $fatura_vencimento?> " placeholder="fatura_valor"><br>

            <input type="submit" name="update" id="update">
            
        </form>
        <a href="http://localhost/ProjetoFINAL/Sistema/">Voltar</a>
    </div>
    
</body>
</html>