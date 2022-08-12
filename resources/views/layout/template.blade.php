<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="{{asset('css/app.css')}}" rel="stylesheet" />
    <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>

    <meta name="google-signin-scope" content="profile email https://www.googleapis.com/auth/business.manage">
    <meta name="google-signin-client_id" content="243464921032-0l8e6buqrspj1ct4p371ii081uo4okoc.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
  

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCeD0TKqU9r-PvYOZRBrw22mjVglqDupK4&callback=initMap"></script>
    
   <script>
function initMap() {
    var macc = {lat: -6.479984036211917, lng: -35.43179852420206};
    var map = new google.maps.Map(
        document.getElementById('map'), {zoom: 15, center: macc});

    $.ajax("{{route('mock')}}").done(resp => {
        $(resp).each(function(i, probl){
            var marker = new google.maps.Marker({position: probl, map: map, label:probl.tipo});
        })
    })
}
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


    <div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></div>
    <script>
      var gmb_api_version = 'https://mybusinessaccountmanagement.googleapis.com/v1';
      function onSignIn(googleUser) {
        console.log('texto')
        //Dados úteis para seus scripts do lado do cliente:
        var profile = googleUser.getBasicProfile();
        console.log('Full Name: ' + profile.getName());
        console.log("Email: " + profile.getEmail());
        var access_token = googleUser.getAuthResponse().access_token;

        //Usando os dados de login para fazer uma chamada de APIs de perfil comercial
        var req = gmb_api_version + '/accounts';
        var xhr = new XMLHttpRequest();
        xhr.open('GET', req);
        xhr.setRequestHeader('Authorization', 'Bearer ' + access_token);

       //Exibindo a resposta da API
        xhr.onload = function () {
          document.body.appendChild(document.createTextNode(xhr.responseText));
        }
        xhr.send();
     }
    </script>
    
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