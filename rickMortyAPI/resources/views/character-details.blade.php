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

<?php
$url = $character['episode'][0];

$json = file_get_contents($url);

$episode = json_decode($json, true);
?>

<body>
    <nav class="navbar-expand-lg nav-custom-border nav-custom-color mb-2">
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
    @if(session()->has('error'))
        <div class="alert alert-danger alert-dismissible fade show mt-3 me-5 ms-5" role="alert">
            <p>{{ session('error')}}</p>
            <button class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
        </div>
    @endif

    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show mt-3 me-5 ms-5" role="alert">
            <p>{{ session('success')}}</p>
            <button class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
        </div>
    @endif
    <div class="container-fluid bg-white text-dark w-auto me-5 ms-5 mt-3">
        <div class="row">
            <div class="col-md-4">
                <img src="<?= $character['image'] ?>" alt="" class="mt-4 ms-lg-4 rounded-circle img-fluid">
            </div>
            <div class="col-md-8 mt-4">
                <form method="POST">
                    @csrf
                    <div class="row mb-2">
                        <div class="col-md-6 mb-2">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" class="form-control input-bg-color" name="nome" value="<?= $character['name'] ?>" id="nome" aria-label="Disabled input example" disabled>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="status" class="form-label">Status</label>
                            <input type="text" class="form-control input-bg-color" name="status" value="<?= $character['status'] ?>" id="status" aria-label="Disabled input example" disabled>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-6 mb-2">
                            <label for="especie" class="form-label">Espécie</label>
                            <input type="text" class="form-control input-bg-color" name="especie" value="<?= $character['species'] ?>" id="especie" aria-label="Disabled input example" disabled>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="genero" class="form-label">Gênero</label>
                            <input type="text" class="form-control input-bg-color" name="genero" value="<?= $character['gender'] ?>" id="genero" aria-label="Disabled input example" disabled>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-12 mb-2">
                            <label for="localizacao" class="form-label">Localização</label>
                            <input type="text" class="form-control input-bg-color" name="localizacao" value="<?= $character['location']['name'] ?>" id="localizacao" aria-label="Disabled input example" disabled>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-12 mb-2">
                            <label for="episodio" class="form-label">Primeira Aparição</label>
                            <input type="text" class="form-control input-bg-color" name="episodio" value="<?= $episode['episode'] . " - " . $episode['name'] ?>" id="episodio" aria-label="Disabled input example" disabled>
                        </div>
                    </div>
                    <div class="row mt-4 mb-4">
                        <div class="col-md-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary" style="width: 150px;">Cadastrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    </div>
</body>

</html>