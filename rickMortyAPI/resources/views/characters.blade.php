<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rick and Morty</title>

    <!-- Linka o bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Define favicon -->
    <link rel="shortcut icon" type="image/jpg" href="/images/favicon.ico" />

    <link rel="stylesheet" href="/css/global.css">
</head>

<body>
    <nav class="navbar-expand-lg nav-custom-border nav-custom-color">
        <ul class="nav justify-content-end">
            <img class="mt-2" src="/images/logo.png" alt="" style="max-height: 50px; margin-right: 500px">
            <li class="nav-item nav-item-custom-bg">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item nav-item-custom-bg">
                <a class="nav-link" href="/characters">Personagens</a>
            </li>
            <li class="nav-item nav-item-custom-bg">
                <a class="nav-link" href="/about">Sobre</a>
            </li>
            <li class="nav-item nav-item-custom-bg me-5">
                <a class="nav-link" href="/login">Login</a>
            </li>
        </ul>
    </nav>
    <div class="container" id="containerId">
        <!-- onde os cards serão renderizados -->
    </div>
</body>

<script>
    async function carregarCards() {
        try {
            const resposta = await fetch('/get_characters.php');
            

            resultado.forEach(personagem => {
                const nome = personagem.name;
                const imagemUrl = personagem.image;
                const descricao = "Status: " + personagem.status + " | " +
                    "Espécie: " + personagem.species;
                const linkUrl = '/characters/' + personagem.id;

                const card = criarCard(nome, descricao, imagemUrl, linkUrl);
                document.getElementById('containerId').appendChild(card);
            });
        } catch (erro) {
            console.error('Erro ao carregar os personagens:', erro);
        }
    }

    carregarCards();

    function criarCard(nome, descricao, imageUrl, linkUrl) {
        // Cria o container-div para receber o card
        const cardContainer = document.createElement('div');
        cardContainer.classList.add('col-12', 'col-lg-4', 'col-md-6', 'p-3');

        // Cria o card
        const card = document.createElement('div');
        card.classList.add('card', 'border', 'border-5', 'border-white', 'p-2');
        card.style.width = '100%';

        const imagem = document.createElement('img');
        imagem.classList.add('card-img-top');
        imagem.src = imageUrl;
        imagem.alt = nome;

        const cardBody = document.createElement('div');
        cardBody.classList.add('card-body');

        const cardTitle = document.createElement('h5');
        cardTitle.classList.add('card-title');
        cardTitle.textContent = nome;


        const cardText = document.createElement('p');
        cardText.classList.add('card-text');
        cardText.textContent = descricao;

        const botao = document.createElement('a');
        botao.classList.add('btn', 'btn-primary', 'd-flex', 'justify-content-center');
        botao.href = linkUrl;
        botao.textContent = 'Saiba mais';

        // Insere as informações no cardbody
        cardBody.appendChild(cardTitle);
        cardBody.appendChild(cardText);
        cardBody.appendChild(botao);

        // Insere a imagem e o cardbody no card
        card.appendChild(imagem);
        card.appendChild(cardBody);

        // Insere o card no container
        cardContainer.appendChild(card);

        return cardContainer;
    }
</script>

</html>