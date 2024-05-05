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
            background-color: #38589D
        }

        .nav-item {
            border-radius: 5px;
            margin: 10px;

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
                <a class="nav-link" href="/">HOME</a>
            </li>
            <li class="nav-item nav-item-custom-bg">
                <a class="nav-link" href="/characters">PERSONAGENS</a>
            </li>
            <li class="nav-item nav-item-custom-bg">
                <a class="nav-link" href="/about">SOBRE</a>
            </li>
            <li class="nav-item nav-item-custom-bg me-5">
                <a class="nav-link" href="/login">LOGIN/CADASTRO</a>
            </li>
        </ul>
    </nav>
    <div class="container-fluid bg-white text-dark w-auto m-4">
        <div class="row">
            <div class="col">
                <img src="http://localhost/testeTecnico/rickMortyAPI/resources/views/imgRickAndMorty.jpeg" alt="" class="p-3 rounded-circle">
            </div>
            <div class="col-8 mt-4">
                <form>
                    <div class="row">
                        <div class="col">
                            <div class="mb-2">
                                <label for="" class="form-label">Nome</label>
                                <input type="text" class="form-control input-bg-color" id="" aria-label="Disabled input example" disabled readonly>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-2">
                                <label for="" class="form-label">Status</label>
                                <input type="text" class="form-control input-bg-color" id="" aria-label="Disabled input example" disabled readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-2">
                                <label for="" class="form-label">Espécie</label>
                                <input type="text" class="form-control input-bg-color" id="" aria-label="Disabled input example" disabled readonly>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-2">
                                <label for="" class="form-label">Gênero</label>
                                <input type="text" class="form-control input-bg-color" id="" aria-label="Disabled input example" disabled readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-2">
                                <label for="" class="form-label">Localização</label>
                                <input type="text" class="form-control input-bg-color" id="" aria-label="Disabled input example" disabled readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-2">
                                <label for="" class="form-label">Primeira Aparição</label>
                                <input type="text" class="form-control input-bg-color" id="" aria-label="Disabled input example" disabled readonly>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mt-3 mb-4 me-5">
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>