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
    <link rel="shortcut icon" type="image/jpg" href="/images/favicon.ico"/>

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
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col-lg-8 col-10 bg-white text-dark mt-5 p-5">
                <form method="POST" action="/register">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="nome" class="form-label">Nome</label>
                                <input type="text" class="form-control input-bg-color" name="nome" id="nome" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="sobrenome" class="form-label">Sobrenome</label>
                                <input type="text" class="form-control input-bg-color" name="sobrenome" id="sobrenome" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control input-bg-color" name="email" id="email" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="senha" class="form-label">Senha</label>
                                <input type="password" class="form-control input-bg-color" name="senha" id="senha" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="confSenha" class="form-label">Confirmar senha</label>
                                <input type="password" class="form-control input-bg-color" name="confSenha" id="confSenha" required>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mt-4">
                            <button type="submit" class="btn btn-success" style="width: 150px;">Cadastrar</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col"></div>
        </div>
    </div>
</body>

</html>