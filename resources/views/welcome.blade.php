<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Acccueil</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Accueil</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                @guest
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('login') }}">Connexion<span class="sr-only">(current)</span></a>
                </li>
                <li>
                    <a class="nav-link" href="{{ route('register') }}">Inscription<span class="sr-only">(current)</span></a>
                </li>
                @endguest
                @auth
                <li>
                    <a class="nav-link" href="https://dofus-map.com/hunt"></a>
                </li>
                @endauth

            </ul>
        </div>
    </nav>

    <div id="app" class="container">
        <example-component></example-component>
    </div>


    <script src="{{ asset('js/app.js')}}"></script>
</body>

</html>
