<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rick and Morty</title>
    <link rel="stylesheet" href="../../vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <script src="../../vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
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
    </style>
</head>

<body>
    <nav class="navbar-expand-lg">
        <ul class="nav justify-content-end nav-custom-border nav-custom-color">
            <li class="nav-item nav-item-custom-bg">
                <a class="nav-link" href="#">HOME</a>
            </li>
            <li class="nav-item nav-item-custom-bg">
                <a class="nav-link" href="#">PERSONAGENS</a>
            </li>
            <li class="nav-item nav-item-custom-bg">
                <a class="nav-link" href="#">SOBRE</a>
            </li>
            <li class="nav-item nav-item-custom-bg me-5">
                <a class="nav-link" href="#">LOGIN/CADASTRO</a>
            </li>
        </ul>
    </nav>
    <div class="container">
        <div class="row justify-content-center mt-2">
            <div class="col-12 col-lg-4 col-md-6 p-5">
                <div class="card border border-5 border-white p-2" style="width: 18rem;">
                    <img src="./imgRickAndMorty.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4 col-md-6 p-5">
                <div class="card border border-5 border-white p-2" style="width: 18rem;">
                    <img src="./imgRickAndMorty.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4 col-md-6 p-5">
                <div class="card border border-5 border-white p-2" style="width: 18rem;">
                    <img src="./imgRickAndMorty.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>