<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Site de reclamação com sistema de água e esgoto" />
    <meta name="author" content="João Vitor, John Wendel, Monize e Antônio" />
    <title>+Água</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="{{asset('css/app.css')}}" rel="stylesheet" />
    <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('js/jquery.mask.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCeD0TKqU9r-PvYOZRBrw22mjVglqDupK4&callback=initMap">   
    </script>

    <!--google autenticação-->
    <meta name="google-signin-scope" content="profile email https://www.googleapis.com/auth/business.manage">
    <meta name="google-signin-client_id" content="571112413928-gntirje3tn3bve9r6lmtj5nra61fhndc.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>


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
                    <li class="nav-item"><a class="nav-link active px-lg-3 py-1 py-lg-1 maiorfont" href="login"><span class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <!--autenticação do google-->

    <script>
      <spam id="not_signed_inifsgo6k25jwm">Entar</spam>
      var gmb_api_version = 'https://mybusinessaccountmanagement.googleapis.com/v1';
      function onSignIn(googleUser) {
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