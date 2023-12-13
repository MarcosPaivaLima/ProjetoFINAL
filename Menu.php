<?php
include_once('processa.php');
$cpf =  $_SESSION['CPF'];
    $informa = new mysqli("localhost","root","","bancojm");
        if($informa->connect_error){
            echo "erro de conexao";
            }
                $query  = "SELECT * FROM cliente WHERE cpf = $cpf";
                $result = $informa->query($query);
                
                while ($obj = $result->fetch_object()) {
                    $cpf  = $obj->CPF;
                    $nome = $obj->nome;        
                    $sobrenome = $obj->sobrenome;        
                    $saldo  = $obj->saldo;
                    $caixinha = $obj->guardado; 
                    $rendimento = $obj->rendimento;   
                    $fatura_valor =  $obj->fatura_valor;
                    $fatura_vencimento =  $obj->fatura_vencimento;
                    $limite = $obj->limite;     
                }
                $informa->close();
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://fonts.googleapis.com/css2?family=Alegreya&family=Lobster&family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="ArqCSS/header.css">
        <link rel="stylesheet" href="ArqCSS/Menu.css">
        <link rel="stylesheet" href="ArqCSS/normalize.css">
        <link rel="stylesheet" type="text/css" href="lib/fontawesome-free-6.5.1-web/css/all.min.css">

</head>
<body>

        <!-- Encerrar sessão -->
        <div class="encerrar">
                <a href="Paginic.php">
                <h2>Encerrar sessão</h2>
                </a>
        </div>
        <!-- Parte superior(Header/Olá Usuário & Saldo) -->
        <div class="header">
                <div>
                    <h2>Olá,   
                        <tbody>
                                <?php 
                                print $nome;
                                ?>
                        </tbody>        
                        <tbody>
                                <?php 
                                print $sobrenome
                                ?>
                        </tbody>        
                </h2>
                </div >
        </div>

        <center>
        <!-- TELA INFO SALDOS / DINHEIRO GUARDARDO / RENDIMENTO  -->
        <div class="saldo" action="index.php" method="POST">
                <div class="ver">
                        Saldo<br><br>
                        <i class="fa fa-eye" onclick="Saldo()" ></i>
                        <p class="ver2" id="saldo">
                                R$ <?php print number_format($saldo,2,",","."); ?></p>
                </div> 

                <div class="ver">
                        Caixinha<br><br>
                        <i class="fa fa-eye" onclick="dinheiro()" ></i>
                        <p class="ver2" id="dinheiro">R$ <?php print number_format($caixinha,2,",",".");?></p>
                </div>

                <div class="ver">
                        Rendimento<br><br>
                        <i class="fa fa-eye" onclick="rendimento()" ></i>
                        <p class="ver2" id="rendimento">R$ <?php print number_format($rendimento,2,",",".");?></p>
                </div>
        </div>  
        
        </center>
        <!-- Atalhos Modo escuro & Modo claro -->
        <div class="nav-geral">
                <button class="bModoEscuro" onclick="FicarBlack()">Modo Escuro</button>
                <button class="bModoClaro" onclick="FicarPadrao()">Modo Claro </button>
                <!-- Seletor menu opções site(caixinha/Recarga/Loja/Trans/Seguro) -->
                <div class="group">
                        <!-- Caixinha -->
                        <div class="pix">
                                <img src="imagens/do-utilizador.png" class="imgp placeholder="#">
                                <h1> <a href=""></a>Caixinha</h1>
                        </div>                        
                        <!-- Recarga -->
                        <div class="pix">
                                <img src="imagens/chamada-telefonica.png" class="imgp placeholder="#">
                                <h1>Recarga</h1>
                                </div>
                        <!-- J&M Loja -->
                        <div class="pix">
                                <img src="imagens/carrinho-de-compras.png" class="imgp placeholder="#>
                                <h1>loja J&M</h1>
                        </div>
                        <!-- Transf Internacional -->
                        <div class="pix">
                                <img src="imagens/no-mundo-todo.png" class="imgp placeholder="#">
                                <h1>Transf.</h1>
                        </div>
                        <!-- Seguro -->
                        <div class="pix">
                                <img src="imagens/coracao.png" class="imgp placeholder="#">
                                <h1>Seguro</h1>
                        </div>
                        <!-- Seletor opção parte letreiro -->              
                        </div> 
<br> <hr><br>
                 <!-- Seletor opções CARTÃO DE CRÉDITO -->
                <h1 class="h1nav">Cartão de crédito</h1>
                <div class="nav-principal">
                        <h2 id="fatura"></h2>
                        <p>Valor: <b class="red"> <?php print number_format($fatura_valor,2,",","."); ?> </b></p>
                        <p>vencimento: <b>Sua fatura vence <?php print $fatura_vencimento ?> </b></p>
                        <p>Limite disponível: <b class="blue"> <?php print number_format($limite,2,",",".");?> </b></p><br>
                        <button class="nav-b">Fatura</button>
                        </div><hr> <br>
                <!-- area pix -->
                <h1 class="h1nav">Área Pix</h1>

                 <div class="paipix" id="paip">
                        <!-- Seletor TRANSFERIR -->
                        <div  onclick="LiberarTR()" class="tpix">
                        <img  class="imgpaipix" src="imagens/transferencia-de-dados.png"><br><br>
                        <p>Transferir</p>
                        </div>  
                        <!-- Seletor COPIA E COLA -->
                        <div class="tpix">
                                <img class="imgpaipix" src="imagens/verifica.png"><br><br>
                                <p>Pix copia e cola</p> 
                        </div>
                        <!-- Seletor QRCODE -->
                        <div class="tpix">
                                <img class="imgpaipix" src="imagens/codigo-qr.png"><br><br>
                                <p>Ler QR code</p>
                        </div>
                        <!-- Seletor Cobrar -->
                        <div class="tpix">
                                <img class="imgpaipix" src="imagens/suporte-tecnico.png"><br><br>
                                <p>Recarga Operadora</p>
                        </div>
                        <!-- Seletor Depositar -->
                        <div class="tpix">
        
                                <img class="imgpaipix" src="imagens/globo.png"> <br><br>
                                <p>Conversão</p>
                        </div>  
                        <!-- Tela transferência(Função somente ao apertar seletor transferir) -->
                        

                        <div id="pt"  class="formact">
                        <a onclick="Fecharpixtrans()" class="buttontr1">x</a>
                                <div class="title">Qual valor de tranferência</div>
                                <div class="subtitle">Saldo disponível em conta <?php print number_format($saldo,2,",","."); ?></div>

                                <div class="input-container ic2">
                                        <input id="lastname"  type="text" id="valor" placeholder="R$ <?php print number_format($saldo,2,",","."); ?>" />
                                        <div class="cut"></div>        
                                </div>
                                <div class="input-container ic2">
                                        <input id="lastname"  type="text" id="valor" placeholder="Digite a chave pix, <?php print $nome; ?>" />
                                        <div class="cut"></div>        
                                </div>

                                <button type="text" class="submit">Trânsferir   </button>
                                </div>
                        </div>
                <!-- fim pix -->
                <hr><br>
                <!-- Telas novidades -->
                <h1 class="h1nav">Descubra mais</h1>

                <div class="nav-sec">
                        <div class="img-nav-p">
                                <img src="imagens/Inserir m subtítulo.png" class="imgnav">
                        </div>

                        <div class="img-nav-p">
                                <img src="imagens/Você & J&M.jpg" class="imgnav">
                        </div>

                        <div class="img-nav-p">
                                <img src="imagens/Simule seu Limite J&M.png" class="imgnav">
                        </div>

                        <div class="img-nav-p">
                                <img src="imagens/caixinha.png" class="imgnav">
                        </div>
                </div>
        </div>
        <script src="Script/indexMenu.JS"></script>
</body>
