function displayElement(elementId) {
    document.getElementById(elementId).style.display = "flex";
}
function hideElement(elementId) {
    document.getElementById(elementId).style.display = "none";
}
function enviaAval(){
    const nome = document.getElementById("inputNome").value;
    const resenha = document.getElementById("inputResenha").value;

    if(nome == "" && resenha ==""){
        document.getElementById("erroFeedback").innerHTML = "Preencha os campos antes de enviar!"
    }
        else{
            document.getElementById("nome-feedback").innerHTML = nome;
            document.getElementById("resenha-feedback").innerHTML = resenha;
            hideElement("new-feedback");
            displayElement("your-feedback");
        }
}