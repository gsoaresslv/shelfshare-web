<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nós</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/sobre.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/index.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer" async defer></script>
    <script src="https://unpkg.com/scrollreveal" async defer></script>
</head>

<body>
<?php require_once('navbar.php'); ?>
    <!--dados que estão no body-->
    <div class="container-sobre">    
        <div class="hero-sobre">
            <img src="img/logo.png" id="img-sobre"></img>
            <h1 id="title-sobre">Sobre o Projeto</h1>
            <h2 id="subtitle-sobre">Missão, Visão e Valores</h2>
        </div>
        <main>
            <section class="section-sobre">
                <h3 class="topic-sobre">Missão</h3>
                <p class="text-sobre">Nossa missão é incentivar a leitura e a educação ao facilitar a troca de livros entre leitores de todas as idades, promovendo o acesso a uma variedade maior de obras literárias.</p>
            </section>
            <section class="section-sobre">
                <h3 class="topic-sobre">Visão</h3>
                <p class="text-sobre">Visamos melhorar a cada dia, para sermos uma  plataforma confiável de troca de livros online, conectando leitores apaixonados e facilitando o compartilhamento de conhecimentos e histórias, queremos revolucionar a maneira como os livros usados circulam na comunidade, tornando a troca de livros uma prática comum e valorizada, contribuindo para um mundo mais sustentável.</p>
            </section>
            <section class="section-sobre">
                <h3 class="topic-sobre">Valores</h3>
                <p class="text-sobre">Acessibilidade, diversidade, inclusão e educação.</p>
            </section>
        </main>
    </div>
    <!--footer com icones para redes sociais-->
    <?php require_once('footer.php'); ?>
</body>
</html>