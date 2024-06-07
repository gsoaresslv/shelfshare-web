function verificaForm(){
    const nome = document.getElementById("inputNome").value;
    const email = document.getElementById("inputEmail").value;
    const senha = document.getElementById("inputSenha").value;
    const confirmaSenha = document.getElementById("inputConfirmarSenha").value;
    const termos = document.getElementById("checkTermos").checked;

    if (nome === ""){
        document.getElementById("erroNome").innerHTML = "Você precisa preencher com um Nome!";
    }
    if (email === ""){
    document.getElementById("erroEmail").innerHTML = "Você precisa preencher com um Email!";
    }
    if (senha === ""){
        document.getElementById("erroSenha").innerHTML = "Você precisa preencher com uma Senha!";
    }
    if (confirmaSenha === ""){
        document.getElementById("erroConfirmaSenha").innerHTML = "Você precisa confirmar sua Senha!";
    }
    else if (confirmaSenha !== senha){
        document.getElementById("erroConfirmaSenha").innerHTML = "As senhas não coincidem!";
    }
    if (!termos){
        document.getElementById("erroTermos").innerHTML = "Você precisa aceitar os termos de uso!";
    }
    if(nome !== "" && email !== "" && senha !== "" && confirmaSenha !== "" && confirmaSenha === senha && termos){
        alert("Cadastro realizado com sucesso!");
        window.location.href = "home.html";
    }
}