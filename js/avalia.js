//  recebe as informações do formulário de avaliação e exibe na tela
const newfeedback= document.getElementById("new-feedback");// Formulário de avaliação
const btnnewfeedback= document.getElementById("btn-new-feedback"); // Botão de avaliação

// Evento de clique no botão de avaliação
function displayElement(elementId) { // Função para exibir um elemento
    var id = document.getElementById(elementId); // Pega o elemento pelo ID
    id.style.display = "flex"; // Exibe o elemento
}

// Evento de clique no botão de avaliação
function hideElement(elementId) { // Função para esconder um elemento
    document.getElementById(elementId).style.display = "none"; // Esconde o elemento
}
// Evento de clique no botão de avaliação
function enviaAval(){ // Função para enviar a avaliação
    const nome = document.getElementById("inputNome").value; // Pega o valor do campo nome
    const resenha = document.getElementById("inputResenha").value; // Pega o valor do campo resenha

    if(nome == "" && resenha ==""){ // Se os campos estiverem vazios
        document.getElementById("erroFeedback").innerHTML = "Preencha os campos antes de enviar!" // Exibe a mensagem de erro
    }
        else{ // Se os campos estiverem preenchidos
            document.getElementById("nome-feedback").innerHTML = nome; // Exibe o nome
            document.getElementById("resenha-feedback").innerHTML = resenha; // Exibe a resenha
            hideElement("new-feedback"); // Esconde o formulário de avaliação
            displayElement("your-feedback"); // Exibe a avaliação
        }
}