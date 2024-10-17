document.addEventListener("DOMContentLoaded", function() {
    const buttons = document.querySelectorAll("button[data-email]");

    buttons.forEach(button => {
        button.addEventListener("click", function() {
            const email = this.getAttribute("data-email");
            const subject = "Contato sobre seu livro";
            const body = "Olá, estou entrando em contato sobre o livro que você salvou.";
            
            // Montar o link mailto com email, assunto e corpo
            const mailtoLink = `mailto:${email}?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;
            
            // Abrir o cliente de e-mail
            window.location.href = mailtoLink;
        });
    });
});