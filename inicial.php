<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/inicial.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
    <script src="js/inicial.js" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Inicials</title>
</head>
<body>
    <?php require_once('navbar.php'); ?>

    <!-- Segunda parte: Título (h1) -->
    <section>
        <h1>Shelfshare: a troca de livros ficou mais fácil</h1>
    </section>

    <!-- Terceira parte: Parágrafo -->
    <section>
        <p>Troque conhecimento, compartilhe histórias</p>
    </section>

    <!-- Quarta parte: Ícone de localização, caixa de pesquisa, botão -->
    <section class="pesquisa-container">
        <div class="item-icone">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                <path d="M12 6a4 4 0 1 0-8 0 4 4 0 0 0 8 0zM8 0a6 6 0 0 1 6 6c0 5-6 10-6 10S2 11 2 6a6 6 0 0 1 6-6z"/>
                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"/>
            </svg>
        </div>
        <!-- Modal de Localização -->
        <div id="modal-localizacao" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <div class="imagem_modal">
                    <img src="img/localização.png" alt="localização">
                </div>
                <p>Onde você quer trocar seus livros?</p>

                <input type="text" id="cep" placeholder="Digite sua cidade, estado ou CEP" class="input-localizacao">
                <button class="btn-localizacao" onclick="buscarCEP()">Buscar</button>
                
                <div id="container-resultado-cep" class="container-resultado">
                    <div id="resultado-cep" class="endereco" onclick="adicionarEndereco()">
                        <i class="fa fa-map-marker-alt"></i> 
                        <span id="endereco-completo"></span>
                    </div>
                </div>
                <div id="lista-cep" class="container-lista">
                    <ul id="lista-enderecos"></ul>
                </div>
            </div>
        </div>

        <div class="item-input">
            <input type="text" placeholder="Busque um livro">
        </div>
        <div class="item-botao">
            <button>Pesquisar</button>
        </div>
    </section>

    <!-- Quinta parte: Duas imagens grandes lado a lado -->
    <section class="imagens-grandes">
        <div class="imagem-grande">
            <a href="#">
                <img src="img/capa1.png" alt="Imagem 1">
            </a>
        </div>
        <div class="imagem-grande">
            <a href="#">
                <img src="img/capa2.png" alt="Imagem 2">
            </a>
        </div>
    </section>

    <!-- Sexta parte: Carrossel de 6 imagens -->
    <section class="carrossel-wrapper">
        <button id="btn-prev" class="carrossel-btn prev-btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M11.354 1.354a.5.5 0 0 0-.708 0L4.5 7.5a.5.5 0 0 0 0 .707l6.146 6.146a.5.5 0 0 0 .708-.707L5.707 8l5.647-5.646a.5.5 0 0 0 0-.707z"/>
            </svg>
        </button>
        <section class="carrossel">
    
            <div class="carrossel-item">
                <a href="#"><img src="img/academico.png" alt="Carrossel 1"></a>
                <p>Acadêmico</p>
            </div>
            <div class="carrossel-item">
                <a href="#"><img src="img/drama.png" alt="Carrossel 2"></a>
                <p>Drama</p>
            </div>
            <div class="carrossel-item">
                <a href="#"><img src="img/ficcao.png" alt="Carrossel 3"></a>
                <p>Ficção</p>
            </div>
            <div class="carrossel-item">
                <a href="#"><img src="img/romance.png" alt="Carrossel 4"></a>
                <p>Romance</p>
            </div>
            <div class="carrossel-item">
                <a href="#"><img src="img/terror.png" alt="Carrossel 5"></a>
                <p>Terror</p>
            </div>
            <div class="carrossel-item">
                <a href="#"><img src="img/tecnologia.png" alt="Carrossel 6"></a>
                <p>Tecnologia</p>
            </div>
            <div class="carrossel-item">
                <a href="#"><img src="img/lgbtq.jpeg" alt="Carrossel 1"></a>
                <p>LGBTQIA+</p>
            </div>
            <div class="carrossel-item">
                <a href="#"><img src="img/gastronomia.jpeg" alt="Carrossel 2"></a>
                <p>Gastronomia</p>
            </div>
            <div class="carrossel-item">
                <a href="#"><img src="img/infantil.jpeg" alt="Carrossel 3"></a>
                <p>Infantil</p>
            </div>
            <div class="carrossel-item">
                <a href="#"><img src="img/sus.jpg" alt="Carrossel 4"></a>
                <p>Suspense</p>
            </div>
            <div class="carrossel-item">
                <a href="#"><img src="img/autoajuda.jpeg" alt="Carrossel 5"></a>
                <p>Autoajuda</p>
            </div>
            <div class="carrossel-item">
                <a href="#"><img src="img/poemas.jpeg" alt="Carrossel 6"></a>
                <p>Poemas</p>
            </div>
            <div class="carrossel-item">
                <a href="#"><img src="img/acao.jpeg" alt="Carrossel 6"></a>
                <p>Ação e Aventura</p>
            </div>
            
            
        </section>
        <button id="btn-next" class="carrossel-btn next-btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0L11.5 7.5a.5.5 0 0 1 0 .707l-6.146 6.146a.5.5 0 0 1-.708-.707L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
            </svg>
        </button>
    </section>    
   
   
    

    <!-- Sétima parte: Footer (já pronto) -->
    <?php require_once('footer.php'); ?>
</body>
</html>