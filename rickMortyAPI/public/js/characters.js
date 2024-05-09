async function carregarCards() {
    try {
        const resposta = await fetch('../database/database.sqlite');
        const buffer = await resposta.arrayBuffer();
        const db = new SQL.Database(new Uint8Array(buffer));

        const query = "SELECT * FROM personagens";
        const resultado = db.exec(query);

        // Ordena a lista em ordem alfabética
        resultado.sort(function (a, b) {
            const nomeA = a.name;
            const nomeB = b.name;

            if (nomeA > nomeB) {
                return 1;
            } else if (nomeB > nomeA) {
                return -1;
            }

            return 0;
        });

        console.log(resultado);

        let colunaAtual;


        resultado.forEach((personagem, indice) => {
            // Cria uma nova linha a cada três cards
            if (indice % 3 === 0) {
                colunaAtual = document.createElement('div');
                colunaAtual.classList.add('row', 'mt-2');
                document.getElementById('containerId').appendChild(colunaAtual);
            }

            // Pega os dados do personagem
            const nome = personagem.name;
            const imagemUrl = personagem.image;
            const descricao = "Status: " + personagem.status + " | " +
                "Espécie: " + personagem.species;

            // Usa a função criarCard
            const card = criarCard(nome, descricao, imagemUrl, '/characters/' + personagem.id);

            // Adiciona o card à coluna atual
            colunaAtual.appendChild(card);
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