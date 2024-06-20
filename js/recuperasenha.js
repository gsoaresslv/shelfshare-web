function verificaEmail() { // Função para verificar se o campo de email está preenchido
    const email = document.getElementById("email").value; // // Pega o valor do campo email
    if (email === "") { // Se o campo email estiver vazio
      document.getElementById("erroEmail").innerHTML = "Você precisa preecher este campo!"; // Exibe a mensagem de erro
    } 
    else{ // Se o campo email estiver preenchido
      window.location.href = "login.html"; // Redireciona para a página login.html
      alert("Uma senha foi enviada para o seu email. Verifique a caixa de entrada e faça login novamente!"); // Exibe a mensagem de sucesso
    }
}