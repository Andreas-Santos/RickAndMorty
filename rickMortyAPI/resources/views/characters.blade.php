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
            border-color: #38589D     
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
    <div class="container">
        <div class="row justify-content-center mt-2">
            <div class="col-12 col-lg-4 col-md-6 p-5">
                <div class="card border border-5 border-white p-2" style="width: 18rem;">
                    <img src="https://rickandmortyapi.com/api/character/avatar/15.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="/character" class="btn btn-primary d-flex justify-content-center">Saiba mais</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4 col-md-6 p-5">
                <div class="card border border-5 border-white p-2" style="width: 18rem;">
                    <img src="https://rickandmortyapi.com/api/character/avatar/15.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="/character" class="btn btn-primary d-flex justify-content-center">Saiba mais</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4 col-md-6 p-5">
                <div class="card border border-5 border-white p-2" style="width: 18rem;">
                    <img src="https://rickandmortyapi.com/api/character/avatar/15.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="/character" class="btn btn-primary d-flex justify-content-center">Saiba mais</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>