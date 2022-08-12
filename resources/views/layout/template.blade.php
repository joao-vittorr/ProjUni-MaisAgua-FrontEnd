<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="{{asset('css/app.css')}}" rel="stylesheet" />
    <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>

<script async defer

    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCeD0TKqU9r-PvYOZRBrw22mjVglqDupK4&callback=initMap">
     
</script>
    <title>+Água</title>
</head>
<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand logo" href="#"><img class="logo" src="{{asset('img/logo.png')}}" alt="Logo mais água"></a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Informar problema</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="query">Consultar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="report">Boletim</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="O que você procura..." aria-label="Search">
                <button class="btn bg-light btn-outline-success" type="submit" >Pesquisar</button>
            </form>




            <div class="row">
                <div class="col-md-12">
                <a class="btn btn-mx bg-light btn-google  btn-outline" href="login">
                        <img src="https://img.icons8.com/color/16/000000/google-logo.png">Entrar</a>
                </div>
            </div>
        </div>
    </div>
    </nav>












    <!---conteúdo da página --->

    @yield('content')



        <!--Footer ou roda pé-->
        <footer class="bg-primary text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a href="#">+ Água</a>
        </div>
        <!-- Copyright -->
    </footer>




    <!--Script do bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>