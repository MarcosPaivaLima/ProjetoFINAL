<script>
    function cadastroSucesso() {
        alert("Cadastrado Com Sucesso");
    }
</script>
<script>
    function cadastroErrado() {
        alert("Não foi possível cadastrar. Reveja as informações.");
    }
</script>
<?php
error_reporting (E_ALL & ~E_NOTICE & ~E_WARNING & ~E_DEPRECATED);

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $cpf = "";
    $nome = "";
    $sobrenome = "";
    $cep = "";
    $senha = "";

    $informa = new mysqli("localhost","root","","bancojm");

    if($informa->connect_error){
        echo "erro de conexao";
        } 
    if(isset($_POST['CPF'])){
        $cpf = $_POST['CPF'];    
    }   
    
    if(isset($_POST['nome'])){    
        $nome = $_POST['nome']; 
    }   

    if(isset($_POST['sobrenome'])){ 
        $sobrenome = $_POST['sobrenome']; 
    }

    if(isset($_POST['CEP'])){    
        $cep = $_POST['CEP']; 
    }

    if(isset($_POST['senha'])){         
        $senha = $_POST['senha']; 
    }

    $sql = "INSERT INTO cliente(CPF , nome, sobrenome, CEP, senha)
            values ('$cpf', '$nome', '$sobrenome', '$cep', '$senha')";

    $result = $informa->query($sql);

    echo "<script>cadastroSucesso()</script>";

    $informa->close();

}else{

}


?>
   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya&family=Lobster&family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="ArqCSS/normalize.css">
    <link rel="stylesheet" href="ArqCSS/cadastro.css">
</head>
<style>
    .img-tcadastro{
        width: 50%;
        height: 100%;
        background-image: url('imagens/propaganda3.jpeg');
        background-size: cover;
        background-position: 0%;
    }
</style>
<body>
    <div class="cadastro">
        <div class="login">
            <form action="" method="POST"> 
                <a href="Paginic.php"><h1 class="voltar">Já sou cliente</h1></a>
                <center>
                <h2>Seja J&M. Beneficios unicos feitos para você!</h2>
                </center>
                <center><br>        
                <input type="text" name="CPF" class="taminput" type="text" placeholder="Digite seu CPF"><br><br>        
                <input type="text" name="nome" class="taminput" type="text" placeholder="Digite seu nome"><br><br>        
                <input type="text" name="sobrenome" class="taminput" type="text" placeholder="Digite seu sobrenome"><br><br>        
                <input type="text" name="CEP" class="taminput" type="text" placeholder="Digite seu CEP"><br><br>
                <input  type="password" name="senha" class="taminput" type="password" placeholder="Digite sua Senha"><br>
                <?php 
                        if($_GET['err']=="s"){
                            echo "<strong>CPF ou Senha inválidos.</strong>";
                        }
                        ?>
                <br>
                </center>
                <center>
                <button type="submit" name="cadastrar">Cadastrar</button>
                </center><br>
                <center>
                <input type="checkbox"> Lembrar senha
                </center>      
            </form>             
        </div>
        <div class="img-tcadastro">
        </div>
        </div>
    </div>
</body>
</html>