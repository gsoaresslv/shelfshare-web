function verificaForm() { // Função para verificar se os campos estão preenchidos corretamente
    const usuario = document.getElementById("inputUsuario").value; // Pega o valor do campo usuário
    const password = document.getElementById("inputPassword").value; // Pega o valor do campo senha
  
    if (usuario === "") { // Se o campo usuário estiver vazio
      document.getElementById("erroUser").innerHTML = "Você precisa preecher com um Usuário!"; // Exibe a mensagem de erro
    } // Exibe a mensagem de erro
    if (password === "") { // Se o campo senha estiver vazio
      document.getElementById("erroPassword").innerHTML = "Você precisa preecher com uma Senha!"; // Exibe a mensagem de erro
    } // Exibe a mensagem de erro
    if (usuario !== "" && password !== "") { // Se todos os campos estiverem preenchidos corretamente
      window.location.href = "home.html"; // Redireciona para a página home.html
    }
}