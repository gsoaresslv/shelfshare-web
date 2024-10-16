document.addEventListener('DOMContentLoaded', function () {
    const thumbnails = document.querySelectorAll('.thumbnails img');
    const mainImage = document.getElementById('main-image');
    const carouselItems = document.querySelector('.carousel-items');
    const prevButton = document.querySelector('.prev');
    const nextButton = document.querySelector('.next');
    let currentIndex = 0; // Índice da imagem atual

    function updateCarousel() {
        // Move o carrossel com base no índice atual
        carouselItems.style.transform = `translateX(${-currentIndex * 100}%)`;
    }

    thumbnails.forEach((thumbnail, index) => {
        thumbnail.addEventListener('click', function () {
            currentIndex = index; // Atualiza o índice atual
            updateCarousel(); // Atualiza o carrossel
            mainImage.src = this.src; // Atualiza a imagem principal
            thumbnails.forEach(img => img.classList.remove('active')); // Remove a classe 'active' de todas as miniaturas
            this.classList.add('active'); // Adiciona a classe 'active' à miniatura clicada
        });
    });

    prevButton.addEventListener('click', function () {
        // Move para a imagem anterior
        currentIndex = (currentIndex > 0) ? currentIndex - 1 : thumbnails.length - 1; // Se chegar ao início, volta para o final
        updateCarousel(); // Atualiza o carrossel
    });

    nextButton.addEventListener('click', function () {
        // Move para a próxima imagem
        currentIndex = (currentIndex < thumbnails.length - 1) ? currentIndex + 1 : 0; // Se chegar ao final, volta para o início
        updateCarousel(); // Atualiza o carrossel
    });

    // Inicializa o carrossel
    updateCarousel();
});
