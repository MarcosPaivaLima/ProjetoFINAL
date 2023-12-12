<?php
error_reporting (E_ALL & ~E_NOTICE & ~E_WARNING & ~E_DEPRECATED);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="ArqCSS/video.css">
    <link rel="stylesheet" href="ArqCSS/infos.css">
    <link rel="stylesheet" href="ArqCSS/normalize.css">
    <link rel="stylesheet" href="ArqCSS/Geral.css">
    <link rel="stylesheet" href="ArqCSS/cssHeade.css">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya&family=Lobster&family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="nav-bar">
            <div class="logo">
            
            </div>

            <div class="nav-list">
            <ul>
            <li><a href="#" class="nav-link">Área PIX</a> </li>
            <li><a href="#" class="nav-link">Transferência</a> </li>
            <li><a href="#" class="nav-link">Empréstimo</a> </li>
            <li><a href="#" class="nav-link">Investe</a> </li>
            <li><a href="#" class="nav-link">Sobre nós</a> </li>
            </ul>
            </div>
              
            <div class="button">
            <button><a class=a-button href="CADASTRO.php"><h4>Abra sua conta!<h4></a></button>
            </div>     
        </nav>

    </header>

    <div class="video-background">
        <video autoplay loop muted>
        <source src="imagens/production_id_4962805 (2160p).mp4" type="video/mp4">
        Seu navegador não suporta o elemento de vídeo.
        </video>
    </div>
    <div class="inicio">

    <center>
<!-- 
    <div id="myModal" class="modal">

        <p>login efetuado com sucesso</p>

    
    </div> -->
    
    </center>

    
        <div class="titulo">
            <img src="imagens/logo.png"class="logop">
        </div>
    
        <div class="cadastro">
            <div class="login">
                <div class="form">
                    <form action="processa.php" method="post">
                        <center>
                        <h2>Seja J&M, Você sempre na frente!</h2>
                        </center><br>
                        <br><center>        
                        <input type="text" name="CPF" placeholder="Digite seu CPF"><br><br>
                        <input type="password" name="senha" placeholder="Digite sua Senha"><br><br></center>
                        <center>
                        <?php 
                        if($_GET['err']=="s"){
                            echo "<strong>CPF ou Senha inválidos.</strong>";
                        }
                        ?><br>
                        <button type="submit" name="entrar">Entrar</button>
                        </center><br>
                        <center>
                        <input type="checkbox"> Manter conectado
                        </center>                   
                    </form>
                </div>
            </div>
        </div>

    </div>
    <div class="pag2">

        <div class="conteiner2">
        <img src="imagens/transferir (7).jpg" class="imgcont2">
        </div>


        <div class="texto">
        <h1 class="th2">Cartão de crédito</h1>
        <p class="cortexto">Entre os meios mais utilizados para pagamentos,
        o cartão de crédito permite a compra de bens e
        serviços com cobrança posterior, sem utilizar
        o dinheiro em conta. Mas, apesar de popular,
        muitas pessoas ainda não sabem exatamente o
        que é um cartão de crédito e como funcionam
        os seus pagamentos.
        A seguir, confira como funcionam as compras no
        crédito e descubra se elas valem a pena.
        E se você busca uma forma de fazer compras
        no exterior, conheça também a conta
        multimoeda da Wise, uma alternativa econômica
        e segura para usar o seu dinheiro fora do
        Brasil. </p>
        </div>
    </div>

    
    <div class="pag3">

        <div class="conteiner3">
        <H1 class="ti3">J&M investe</H1> 
        <p class="t3">Conheça a possibilidade de investir o seu dinheiro rendendo até 110% CDB em sua conta J&M. Além
        de ter seu dinheiro rendendo na sua conta, concorre a prêmios mensalmente de até 10 mil reais! Venha para a J&M!
        </p>
        </div>

        <div class="imgcont3">
        <img src="imagens/7.jpeg" class="img3">
         </div>  

    </div>
    
    <div class="geral">

        <div class="g1">
        <img src="imagens/pix.jpg" class="imgg1">
        <h3 class="th3">Área pix</h3>
        <h3>Tenha praticidade no seu dia-dia!<br>Saiba mais -></h3>
        <p></p>
        </div>

        <div class="g1">
        <img src="imagens/transf.jpg" class="imgg1">
        <h3 class="th3">Transferência</h3>
        <h3>Transferência nacional & internacional!<br>Saiba mais -></h3>
        </div>

        <div class="g1">
        <img src="imagens/empre.jpg" class="imgg1">
        <h3 class="th3">Empréstimo</h3>
        <h3>Apertou & precisa de uma grana para sair do sufoco? <br>Saiba mais -></h3>
        </div>

        <div class="g1">
        <img src="imagens/credito.jpg" class="imgg1">            
        <h3 class="th3">Cartão de crédito</h3>
        <h3>Limite para você viajar & fazer compras. <br>Saiba mais -></h3>
        </div>
    </div>

    <div class="pag4">

        <div class="imgcont4" >
        <img src="imagens/Photo by Rasheed Kemy on Unsplash.jpg" class="img4">
        </div>

        <div class="conteiner4">               
        <h1 class="ti4">Área PIX</h1>

        <p class="ti4">Tenha controle das suas finanças na palma das suas mãos. Na área pix, você consegue realizar transferências 
        instantâneas, de onde você estiver. Pagamentos de boleto nunca ficou tão fácil com o QRCODE. Venha para a J&M!
        </p>
        </div>
    </div>

        <!-- noticias/informações no site -->
    <div class="pai">
        <div class="investe">
        <h2 class="segurotitulocor">Invista com a J&M!</h2>
        <p  class="segurocor">Investir é o melhor caminho para os
        empreendedores aumentarem as suas chances de
        serem bem-sucedidos em suas atividades econômicas.
        Por meio dos investimentos, você pode aumentar as
        oportunidades do seu negócio prosperar, ampliando
        a infraestrutura ou comprando novas máquinas,
        equipamentos e tecnologias.</p>    
        </div>  
  
        <div class="segurovida">
        <h2 class="segurotitulocor">Seja seguro com a J&M!</h2>
        <p class="segurocor">Proteção. A grande importância do Seguro de
        Vida está na proteção. Ele proporciona,
        justamente, mais tranquilidade ao segurado,
        que estará amparado caso venha a enfrentar
        situações difíceis ou algum tipo de doença que
        o impeça de sustentar a si ou a sua família.</p>
        </div>
  
        <div class="novidades">
        
        <h2 class="segurotitulocor">Novidades do APP!</h2>
        <p class="segurocor">Porque o banco pede atualização de cadastro?
        A atualização cadastral é essencial, pois garante
        que a instituição financeira conseguirá entrar em
        contato com você em caso de necessidade.
        Encerramento por desinteresse comercial pode
        acontecer também por parte da instituição
        financeira, entenda.</p>
        </div>
  
    </div>    
  
    <div class="pai2">
        <div class="aumento">
        <h2 class="segurotitulocor">"Como funciona o seu aumento de limite!"</h2>
        <p class="coraumento">Pague as contas em dia. 
        Pague o valor total da fatura e não parcele. 
        Faça mais compras no cartão de crédito. 
        Realize movimentações financeiras. 
        Atualize sua renda. 
        Evite ter mais de um cartão.</p>
        </div>
  
        <div class="cartaov">
        <h2 class="segurotitulocor">Você com cartão virtual</h2>
        <p class="coraumento">Cartão virtual é aquele que
        existe somente no meio digital, estando ou não
        vinculado a um cartão físico. Ele pode ser de crédito,
        débito ou pré-pago e funciona da mesma maneira que
        um cartão físico, só que sem o instrumento concreto
        que costumamos guardar na carteira.</p>
        </div>
  
        <div class="segurocel">
        <h2 class="segurotitulocor">Sobre o seguro celular</h2>
        <p class="coraumento">Normalmente é feita uma
        indenização em dinheiro, ou em caso de danos
        materiais, a seguradora arca com os custos do
        reparo do aparelho. </p>
        </div>
    </div>
        <div class="rodape">
            <div class="redes">
            <img src="imagens/icons8-whatsapp-50.png" class="imgrodape" alt=""><a href="" ></a>
            <img src="imagens/icons8-instagram-50.png" class="imgrodape" alt=""><a href=""></a>
            <img src="imagens/icons8-facebook-50.png" class="imgrodape" alt=""><a href="" ></a>
            <img src="imagens/icons8-twitterx-50.png" class="imgrodape" alt=""><a href="" ></a> 
            <img src="imagens/icons8-linkedin-50.png" class="imgrodape" alt=""><a href="" ></a> 
            </div>

            <div class="info">
            <h1><strong>Agência de Cotia: </strong>Rua Pinheiro, 14 - Cotia, SP - 06532-000
            <strong>CNPJ: </strong>00.394.460/0058-87</strong><br>
            <strong>J&M Bank - Instituição de Pagamento.</strong>
            <hr>
            <strong>Nossos produtos |</strong>
            <strong>Trabalhe conosco |</strong>
            <strong>Ajuda J&M |</strong>
            <strong>Segurança |</strong>
            <strong>Fale conosco </strong>

            </div>
        </div>    
        
</body>
</html>
