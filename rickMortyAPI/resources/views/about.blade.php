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
            @if($user)
            <li class="nav-item nav-item-custom-bg me-5">
                <a class="nav-link" href="/logout">Sair</a>
            </li>
            @endif
            @if(!$user)
            <li class="nav-item nav-item-custom-bg me-5">
                <a class="nav-link" href="/login">Entrar</a>
            </li>
            @endif
        </ul>
    </nav>
    <div class="container-fluid bg-white text-dark w-auto m-5">
        <div class="row">
            <div class="col-md-4">
                <img src="/images/Foto.jpg" alt="" class="m-5 m-lg-5 rounded-circle img-fluid" style="max-height: 300px;">
            </div>
            <div class="col-md-8 mt-4">
                <h1 class="mb-4">Andreas Matheus Santos</h1>
                <p class="lead">Sou uma pessoa altamente motivada e apaixonada por tecnologia, sempre em busca de novos conhecimentos e desenvolvimento no campo. Tenho facilidade de aprendizado e me entusiasmo ao iniciar estudos em novas áreas e conhecimentos. Atualmente curso o terceiro semestre de Análise e Desenvolvimento de Sistemas na FACENS.</p>
                <p>Tenho conhecimentos em linguagens de programação como <strong>Java</strong>, <strong>JavaScript</strong> e <strong>PHP</strong>, além de outras tecnologias como:</p>
                <ul>
                    <li>Linguagem SQL</li>
                    <li>HTML5</li>
                    <li>CSS3</li>
                    <li>Bootstrap</li>
                </ul>
            </div>
            <div class="col m-4">
                <h2>Projetos que já desenvolvi:</h2><br>
                <h4><i>Devagram</i></h4>
                <p>GitHub: <a href="https://github.com/Andreas-Santos/devagram-node-nextjs">https://github.com/Andreas-Santos/devagram-node-nextjs</a></p>
                <p>Este projeto foi desenvolvido através das aulas da plataforma Devaria. Consiste em uma aplicação com funcionalidades muito similares ao Instagram.</p>
                <p>O projeto foi desenvolvido utilizando TypeScript como linguagem principal e o MongoDB como banco de dados.</p>
                <br>
                
                <h4><i>CRUD em PHP</i></h4>
                <p>GitHub: <a href="https://github.com/Andreas-Santos/CRUD-com-php-e-mysql">https://github.com/Andreas-Santos/CRUD-com-php-e-mysql</a></p>
                <p>Recentemente iniciei meus estudos em PHP, onde após uma série de aulas sobre a linguagem resolvi realizar um CRUD para consolidar os conhecimentos adquiridos.</p>
                <p>Utilizei o Apache para hospedar o servidor e o MySQL para guardar os registros do banco de dados.</p>
                <br>

                <h4><i>Site Rick and Morty</i></h4>
                <p>GitHub: <a href="https://github.com/Andreas-Santos/testeTecnico">https://github.com/Andreas-Santos/testeTecnico</a></p>
                <p>E por último o link para acesso ao github deste projeto que foi desenvolvido utilizando Laravel, SQLite e Bootstrap.</p>
            </div>
        </div>
    </div>

    </div>
</body>

</html>