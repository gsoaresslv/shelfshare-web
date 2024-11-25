<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil do Usuário</title>
    <link rel="stylesheet" href="perfil.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
    <script src="js/perfil.js" defer></script>
</head>
<body>
<?php require_once('navbar.php'); ?>

    <!-- Container 1: Banner e Foto do Usuário -->
    <div class="banner-container">
        <div class="banner"></div>
        <div class="profile-pic">
            <img src="img/boy.jpg" alt="Foto do Usuário">
        </div>
    </div>

    <!-- Container 2: Informações do Perfil -->
    <div class="profile-info-container">
        <div class="profile-info">
            <h1>Nome de Usuário</h1>
            <p class="bio">Leitor apaixonado por ficção e mistério. Sempre em busca de uma nova leitura inspiradora.</p>
            <div class="followers-following">
                <p><strong>200</strong> Seguidores</p>
                <p><strong>180</strong> Seguindo</p>
            </div>
            <!-- Ícones SVG clicáveis -->
            <div class="profile-actions">
                <a href="salvos.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-bookmark" viewBox="0 0 16 16">
                    <path d="M2 2v13.5l6-3.5 6 3.5V2z"/>
                </svg></a>
                <a href="trocas.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                     <path d="M19 2H8c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h11c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 18H8V4h11v16zM6 20H4V4c0-1.1.9-2 2-2h1v2H6v16zm8-9H9v-2h5v2zm-5 4h5v-2H9v2z"/>
                </svg></a>
            </div>
            <!-- Botão de editar perfil -->
            <a href="editarperfil.php"><button class="edit-btn">Editar Perfil</button></a>
            
        </div>
    </div>

    <!-- Container 3: Feed de Livros -->
    <div class="feed-container">
        <div class="feed">
            <h3>Livros Postados</h3>
            <div class="book-grid">
                <img src="img/verao.jpg" alt="Livro 1">
                <img src="img/verao.jpg" alt="Livro 2">
                <img src="img/verao.jpg" alt="Livro 3">
                <img src="img/verao.jpg" alt="Livro 4">
                <img src="img/verao.jpg" alt="Livro 5">
                <img src="img/verao.jpg" alt="Livro 6">
                
            </div>
        </div>
    </div>
    <?php require_once('navbar.php'); ?>

</body>
</html>
