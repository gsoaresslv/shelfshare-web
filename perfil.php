<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/perfil.css">
    <link rel="stylesheet" href="css/navbar.css"> 
    <link rel="stylesheet" href="css/footer.css">
    <script src="js/perfil.js"></script>  
    <title>Meu Perfil</title>
</head>
<body>
<?php require_once('navbar.php'); ?>
<main>
    <section class="profile-section">
        <div class="profile-dow">
        <div class="profile-pic"></div>
        <div class="profile-info">
            <h2>Nome de usuário</h2>
            <div class="status">
                <span><div id="numberseg">400</div> <br> Seguidores</span>
                <span><div id="numberseg">400</div> <br> Seguindo</span>
                <span><div id="iconsalvos"></div><i class="bi bi-bookmarks"><svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1z"/>
                    <path d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1"/>
                  </svg><br></i> <div id="salvo">Salvos</span></div>
            </div>
            <div class="profile-buttons">
                <button id="addBookBtn">Adicionar Livro</button>
                <button id="editProfileBtn">Editar perfil</button>
            </div>
        </div>
        </div>
        <div class="book-section">
            <h3>Meus Livros</h3>
            <div class="book-grid">
                <!-- Placeholder para livros -->
                <img src="img/a5passosdevc.jpg" alt="Livro 1" class="book-img">
                <img src="img/acaba.jpg" alt="Livro 2" class="book-img">
                <img src="img/quebrandogelo.jpg" alt="Livro 3" class="book-img">
                <img src="img/asmusicasquevocenuncaouviu.jpg" alt="Livro 4" class="book-img">
                <img src="img/verao.jpg" alt="Livro 5" class="book-img">
                <img src="img/imperfeitos.jpg" alt="Livro 6" class="book-img">
                <img src="img/sete_maridos.jpg" alt="Livro 7" class="book-img">
                <img src="img/todas_as_suas_imperfeicoes.jpg" alt="Livro 8" class="book-img">
            </div>
        </div>
    </section>
</main>
<?php require_once('footer.php'); ?>
</body>
</html>