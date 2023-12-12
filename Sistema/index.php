<?php

session_start();

include('conexao3.php');

if(
    (!isset($_SESSION['nome']) == true ) 
    and (!isset($_SESSION['sobrenome'])== true) 
    and (!isset($_SESSION['senha'])== true) 
    and (!isset($_SESSION['CPF'])== true) 
    and (!isset($_SESSION['CEP'])== true)
    and (!isset($_SESSION['rendimento'])== true)
    and (!isset($_SESSION['saldo'])== true)
    and (!isset($_SESSION['guardado'])== true)
    and (!isset($_SESSION['fatura_valor'])== true)
    and (!isset($_SESSION['limite'])== true)
    and (!isset($_SESSION['fatura_vencimento'])== true)

    ){
    unset($_SESSION['nome']);
    unset($_SESSION['sobrenome']);
    unset($_SESSION['senha']);
    unset($_SESSION['CPF']);
    unset($_SESSION['CEP']);
    unset($_SESSION['rendimento']);
    unset($_SESSION['saldo']);
    unset($_SESSION['guardado']);
    unset($_SESSION['fatura_valor']);
    unset($_SESSION['limite']);
    unset($_SESSION['fatura_vencimento']);
    header('Location: ');
}


$sql = "SELECT * FROM cliente ORDER BY id DESC";

$result = $conexao3->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
</head>
<body>.
        <h1>ADMINISTRADOR</h1>

    <a href="http://localhost/ProjetoFINAL/LoginADM/login.php">Voltar</a>

    <div>
        <table>
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Sobrenome</th>
                    <th scope="col">Senha</th>
                    <th scope="col">CPF</th>
                    <th scope="col">CEP</th>
                    <th scope="col">rendimento</th>
                    <th scope="col">saldo</th>
                    <th scope="col">guardado</th>
                    <th scope="col">fatura_valor</th>
                    <th scope="col">limite</th>
                    <th scope="col">fatura_vencimento</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($user_data=mysqli_fetch_assoc($result)){
                        echo "<td>" .$user_data['id']."</td>";
                        echo "<td>" .$user_data['nome']."</td>";
                        echo "<td>" .$user_data['sobrenome']."</td>";
                        echo "<td>" .$user_data['senha']."</td>";
                        echo "<td>" .$user_data['CPF']."</td>";
                        echo "<td>" .$user_data['CEP']."</td>";
                        echo "<td>" .$user_data['rendimento']."</td>";
                        echo "<td>" .$user_data['saldo']."</td>";
                        echo "<td>" .$user_data['guardado']."</td>";
                        echo "<td>" .$user_data['fatura_valor']."</td>";
                        echo "<td>" .$user_data['limite']."</td>";
                        echo "<td>" .$user_data['fatura_vencimento']."</td>";
                        echo "<td> 
                            <a class='btn btn-primary' href='http://127.0.0.1/ProjetoFINAL/edicao/index.php?id=$user_data[id]'>
                
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pen-fill' viewBox='0 0 16 16'>
                                    <path d='m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z'/>
                                </svg>        
                            </a>
                            </td>";echo "</td>"; 
                    }
                ?>
            </tbody>   
        </table>
    </div>

</body>
</html>