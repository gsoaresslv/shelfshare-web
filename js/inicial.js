// Seleciona os elementos do carrossel e botões de navegação
const carrossel = document.querySelector('.carrossel');
const prevBtn = document.getElementById('btn-prev');
const nextBtn = document.getElementById('btn-next');

// Defina a quantidade de rolagem por clique (ajuste conforme necessário)
const scrollAmount = 150; // Valor que define quanto o carrossel vai rolar a cada clique

// Função para rolar o carrossel para a direita (próximo)
nextBtn.addEventListener('click', () => {
    carrossel.scrollBy({ left: scrollAmount, behavior: 'smooth' });
});

// Função para rolar o carrossel para a esquerda (anterior)
prevBtn.addEventListener('click', () => {
    carrossel.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
});

// Animação suave de rolagem ao passar o mouse sobre as imagens grandes
const imgContainers = document.querySelectorAll('.img-container img');

imgContainers.forEach(img => {
    img.addEventListener('mouseover', () => {
        img.style.transform = 'scale(1.05)';
        img.style.boxShadow = '0px 6px 15px rgba(0, 0, 0, 0.4)';
    });

    img.addEventListener('mouseout', () => {
        img.style.transform = 'scale(1)';
        img.style.boxShadow = '0px 4px 10px rgba(0, 0, 0, 0.2)';
    });
});

// Função para lidar com clique nas imagens clicáveis grandes
imgContainers.forEach(img => {
    img.addEventListener('click', () => {
        window.location.href = "#"; // Substitua com o link correto
    });
});

// Adiciona evento de clique nas imagens menores do carrossel
const carrosselImages = document.querySelectorAll('.carrossel-item img');

carrosselImages.forEach(img => {
    img.addEventListener('click', () => {
        window.location.href = "#"; // Substitua com o link correto
    });
});

// Seleciona o ícone de localização e o modal
const iconeLocalizacao = document.querySelector('.item-icone svg');
const modalLocalizacao = document.getElementById('modal-localizacao');
const closeModal = document.querySelector('.close');

// Exibe o modal quando o ícone de localização é clicado
iconeLocalizacao.addEventListener('click', () => {
    modalLocalizacao.style.display = 'flex';
});

// Fecha o modal ao clicar no "x"
closeModal.addEventListener('click', () => {
    modalLocalizacao.style.display = 'none';
});

// Fecha o modal ao clicar fora do conteúdo do modal
window.addEventListener('click', (event) => {
    if (event.target === modalLocalizacao) {
        modalLocalizacao.style.display = 'none';
    }
});


