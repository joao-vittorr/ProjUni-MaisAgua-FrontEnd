<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Site de Anúncios de Veículos" />
    <meta name="author" content="João Vitor e John Wendel" />
    <title>+Água</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="{{asset('css/app.css')}}" rel="stylesheet" />
    <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('js/jquery.mask.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCeD0TKqU9r-PvYOZRBrw22mjVglqDupK4&callback=initMap">   
    </script>


</head>
<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container px-4 px-lg-0">
            <a class="navbar-brand" href="/"><img class="logo" src="{{asset('img/logo.png')}}" alt="Logo mais água"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link active px-lg-3 py-1 py-lg-1 maiorfont" href="cadastrarProblema">Informar problema</a></li>
                    <li class="nav-item"><a class="nav-link active px-lg-3 py-1 py-lg-1 maiorfont" href="query">Consultar</a></li>
                    <li class="nav-item"><a class="nav-link active px-lg-3 py-1 py-lg-1 maiorfont" href="report">Boletim</a></li>
                    <li class="nav-item"><a class="nav-link active px-lg-3 py-1 py-lg-1 maiorfont" href="login"><img src="https://img.icons8.com/color/16/000000/google-logo.png">{{__("Login")}}</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    

    <!---conteúdo da página --->

    @yield('content')



    <!--Footer ou roda pé-->
        <footer class="py-3 navbar-dark bg-primary">
            <p class="text-center">&copy; 2022 Mais Água, Inc</p>
        </footer>



    <!--Script do bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>