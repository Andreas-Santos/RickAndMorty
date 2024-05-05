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

        .input-bg-color {
            background-color: #CED1D7;
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
    <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8 bg-white text-dark mt-5 p-5">
                <form>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="nome" class="form-label">Nome</label>
                                <input type="text" class="form-control input-bg-color" id="nome">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="sobrenome" class="form-label">Sobrenome</label>
                                <input type="text" class="form-control input-bg-color" id="sobrenome">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control input-bg-color" id="email">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="senha" class="form-label">Senha</label>
                                <input type="password" class="form-control input-bg-color" id="senha">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="confSenha" class="form-label">Confirmar senha</label>
                                <input type="password" class="form-control input-bg-color" id="confSenha">
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-success">Cadastrar</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
</body>

</html>