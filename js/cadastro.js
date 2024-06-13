function verificaForm(){ // Função para verificar se os campos estão preenchidos corretamente
    const nome = document.getElementById("inputNome").value; // Pega o valor do campo nome
    const email = document.getElementById("inputEmail").value; // Pega o valor do campo email
    const senha = document.getElementById("inputSenha").value; // Pega o valor do campo senha
    const confirmaSenha = document.getElementById("inputConfirmarSenha").value; // Pega o valor do campo confirmar senha
    const termos = document.getElementById("checkTermos").checked; // Pega o valor do campo termos

    if (nome === ""){ // Se o campo nome estiver vazio
        document.getElementById("erroNome").innerHTML = "Você precisa preencher com um Nome!"; // Exibe a mensagem de erro
    }
    if (email === ""){ // Se o campo email estiver vazio
    document.getElementById("erroEmail").innerHTML = "Você precisa preencher com um Email!"; // Exibe a mensagem de erro
    }
    if (senha === ""){ // Se o campo senha estiver vazio
        document.getElementById("erroSenha").innerHTML = "Você precisa preencher com uma Senha!"; // Exibe a mensagem de erro
    }
    if (confirmaSenha === ""){ // Se o campo confirmar senha estiver vazio
        document.getElementById("erroConfirmaSenha").innerHTML = "Você precisa confirmar sua Senha!"; // Exibe a mensagem de erro
    }
    else if (confirmaSenha !== senha){ // Se o campo confirmar senha for diferente do campo senha
        document.getElementById("erroConfirmaSenha").innerHTML = "As senhas não coincidem!"; // Exibe a mensagem de erro
    }
    if (!termos){ // Se o campo termos não estiver marcado
        document.getElementById("erroTermos").innerHTML = "Você precisa aceitar os termos de uso!"; // Exibe a mensagem de erro
    }
    if(nome !== "" && email !== "" && senha !== "" && confirmaSenha !== "" && confirmaSenha === senha && termos){ // Se todos os campos estiverem preenchidos corretamente
        alert("Cadastro realizado com sucesso!"); // Exibe a mensagem de sucesso
        window.location.href = "home.html"; // Redireciona para a página home.html
    }  
}