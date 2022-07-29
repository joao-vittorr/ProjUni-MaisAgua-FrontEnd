<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <link href="{{asset("css/app.css")}}" rel="stylesheet" />
    <title>Teste - +Água</title>
</head>
<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand logo" href="#"><img class="logo" src="{{asset("img/logo.png")}}" alt="Logo mais água"></a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Consulta</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Consulta</a>

            <a href="{{ route('google.login') }}" class="btn btn-google btn-user btn-block">
                <i class="fab fa-google-f fa-fw"></i> Login com o google
       

</a>

            </li>
        </ul>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn bg-light btn-outline-success" type="submit">Search</button>
        </form>
        </div>
    </div>
    </nav>


    <!--Conteúdo da página-->


    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.2716145501336!2d-35.42694978528191!3d-6.48724839530716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ad8fcf393cde8d%3A0x70898cede98f3a52!2sR.%20Jos%C3%A9%20Alexandre%20da%20Silva%2C%20Nova%20Cruz%20-%20RN%2C%2059215-000!5e0!3m2!1spt-BR!2sbr!4v1659049905675!5m2!1spt-BR!2sbr" 
        width="1530" 
        height="600"
        style="border:0;"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>


    
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

