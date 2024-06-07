function verificaForm() {
    const usuario = document.getElementById("inputUsuario").value;
    const password = document.getElementById("inputPassword").value;
  
    if (usuario === "") {
      document.getElementById("erroUser").innerHTML = "Você precisa preecher com um Usuário!";
    }
    if (password === "") {
      document.getElementById("erroPassword").innerHTML = "Você precisa preecher com uma Senha!";
    }
    if (usuario !== "" && password !== "") {
      window.location.href = "home.html";
    }
}