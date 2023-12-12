var fatura;
fatura = 19;
if(fatura <= 20){
    document.getElementById('fatura').innerHTML = "Fatura aberta";    
}else{
    document.getElementById('fatura').innerHTML = "Fatura Fechada";
}

function MudarPadrão(){
    document.body.style.backgroundColor = "#20B2AA";  
    };
    
function FicarBlack(){
    document.body.style.backgroundColor = "Black";  
  }
function FicarPadrao(){
    document.body.style.backgroundColor = "#20B2AA";
  }
  function LiberarTR(){
    let div =  document.getElementById("pt");
    div.style.display="inline"
  
  }
function Fecharpixtrans(){
    let div =  document.getElementById("pt");
    div.style.display="none";
  }

    

  // modais

// EXIBIÇÃO OLHO SALDO / DINHEIRO / RENDIMENTO

  var saldo = document.getElementById("saldo")
  var tdinheiro = document.getElementById("dinheiro")
  var trendimento = document.getElementById("rendimento")
  
  function Saldo(){
    if (saldo.style.display === "block") {
        saldo.style.display = "none";
    } else {
        saldo.style.display = "block";
    }
}

function dinheiro(){
  if (tdinheiro.style.display === "block") {
    tdinheiro.style.display = "none";
  } else {
    tdinheiro.style.display = "block";
  }
}

function  rendimento(){
  if (trendimento.style.display === "block") {
    trendimento.style.display = "none";
  } else {
    trendimento.style.display = "block";
  }
}
// FECHAMENTO EXIBIÇÃO DE SALDO 

      btnDinheiro.onclick = function(){
        dinheiro.style.display = "block"
        btnFecharDin.style.display = "block"

      }

      btnRendimento.onclick = function(){
        rendimento.style.display = "block"
        btnFecharRend.style.display = "block"


      }

          btnFecharSal.onclick = function(){
            saldo.style.display = "none"
            btnFecharSal.style.display = "none"
          }

          btnFecharDin.onclick = function(){
            dinheiro.style.display = "none"
            btnFecharDin.style.display = "none"
          }
          
          btnFecharRend.onclick = function(){
            rendimento.style.display = "none"
            btnFecharRend.style.display = "none"
          }



         
           // Função para exibir o modal
  function exibirModal() {
    var modal = document.getElementById('myModal');
    modal.style.display = 'block';
  }

  
  function fazerLogin() {
    var cpf = document.getElementById('cpf').value; // Substitua 'username' pelo ID do campo de usuário
    var senha = document.getElementById('senha').value; // Substitua 'password' pelo ID do campo de senha

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
      if (xhr.readyState == 4 && xhr.status == 200) {
        var resposta = JSON.parse(xhr.responseText);

        if (resposta.sucesso) {
          // Login bem-sucedido, exibe o modal
          exibirModal();
        } else {
          // Login falhou, faça algo aqui se necessário
        }
      }
    };

    xhr.open('POST', 'seu_script_php.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.send('cpf=' + encodeURIComponent(cpf) + '&senha=' + encodeURIComponent(senha));
  }
