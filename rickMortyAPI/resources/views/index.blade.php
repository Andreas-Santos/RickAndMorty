<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rick and Morty</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        .nav-custom-color {
            background-color: #38589D;
        }

        .nav-item {
            border-radius: 5px;
            margin: 15px 10px;
            width: 110px;
        }

        .nav-item:hover {
            transform: scale(1.05);
            background-color: white;
        }

        .nav-item-custom-bg {
            background-color: rgba(178, 190, 215, 1);
        }

        .nav-link {
            color: black;
            font-size: 16px;
            font-family: 'Arial', sans-serif;
            padding: 10px 15px;
            height: auto;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .navbar-expand-lg .navbar-nav .nav-link {
            padding-right: 0.5rem;
            padding-left: 0.5rem;
        }

        body {
            background-color: #E6E6E6;
        }

        .btn-primary {
            background-color: #38589D;
            border-color: #38589D;
        }
    </style>
</head>

<body>
    <nav class="navbar-expand-lg">
        <ul class="nav justify-content-end nav-custom-border nav-custom-color">
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

    </div>

    <script>
        let listaPersonagens = [];

        async function carregarCards() {
            const url = 'https://rickandmortyapi.com/api/character'

            const resposta = await fetch(url);
            const resultado = await resposta.json();

            console.log(resultado.results);

            listaPersonagens = resultado.results;

            let colunaAtual;

            listaPersonagens.forEach((personagem, indice) => {
                // Cria uma nova linha a cada três cards
                if (indice % 3 === 0) {
                    colunaAtual = document.createElement('div');
                    colunaAtual.classList.add('row', 'mt-2');
                    containerId.appendChild(colunaAtual);
                }

                // Pega os dados do personagem
                const nome = personagem.name;
                const imagemUrl = personagem.image;
                const descricao = "Status: " + personagem.status + " | "
                                     + "Espécie: " + personagem.species;

                // Usa a função criarCard
                const card = criarCard(nome, descricao, imagemUrl, '/characters/' + personagem.id);

                // Adiciona o card à coluna atual
                colunaAtual.appendChild(card);
            });

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

</body>

</html>