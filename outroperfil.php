<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/outroperfil.css">
    <link rel="stylesheet" href="css/navbar.css"> 
    <link rel="stylesheet" href="css/footer.css">
    <script src="js/perfil.js"></script>  
    <title>Meu Perfil</title>
</head>
<body>
<?php require_once('navbar.php'); ?>

<div class="main-container">
    <div class="main-box">
        <div class="esquerda">
            <div class="product-image">
                <img id="main-image" src="img/perfil.jpg" alt="livro principal"> 
            </div>
        </div>
        
        <div class="direita">
            <div class="nome">
                <h2>Nome de usuário</h2>
            </div>
            
            <div class="status">
                <span><div id="numberseg">400</div> Seguidores</span>
                <span><div id="numberseg">400</div> Seguindo</span>
                <span><div id="iconsalvos"></div><i class="bi bi-bookmarks"><svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1z"/>
                    <path d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1"/>
                  </svg><br></i> <div id="salvo">Salvos</div></span>
            </div>
            
        </div>
    </div>
</div>




<?php require_once('footer.php'); ?>
</body>
</html>