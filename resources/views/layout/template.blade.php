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
                    <li class="nav-item"><a class="nav-link active px-lg-3 py-1 py-lg-1 maiorfont" href="problema">Informar problema</a></li>
                    <li class="nav-item"><a class="nav-link active px-lg-3 py-1 py-lg-1 maiorfont" href="query">Consultar</a></li>
                    <li class="nav-item"><a class="nav-link active px-lg-3 py-1 py-lg-1 maiorfont" href="boletim">Boletim</a></li>
                    <li class="nav-item"><a class="nav-link active px-lg-3 py-1 py-lg-1 maiorfont" href="#">
                        <div id="buttonDiv"></div></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--autenticação do google-->

    <script src="https://accounts.google.com/gsi/client" async defer></script>
      <script>


        function setCookie(cname, cvalue, exdays) {
        const d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        let expires = "expires="+d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
        }

        function getCookie(cname) {
        let name = cname + "=";
        let decodedCookie = decodeURIComponent(document.cookie);
        let ca = decodedCookie.split(';');
        for(let i = 0; i <ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) == ' ') {
            c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
            }
        }
        return "";
        }

        console.log(getCookie("token"))


        function handleCredentialResponse(response) {
          console.log("Encoded JWT ID token: " + response.credential);
          console.log(response.credential)
          setCookie("XSRF-TOKEN", response.credential)
          setCookie("token", response.credential)
          //document.cookie = "token="+response.credential;
          //document.cookie = "XSRF-TOKEN="+response.credential;
          $.ajax("{{route('update-cookie')}}")//armazena o cookie no php
          //$("#atualizaCookiePHP").submit();
          //window.location = window.location;
        }
        window.onload = function () {
          google.accounts.id.initialize({
            client_id: "571112413928-gntirje3tn3bve9r6lmtj5nra61fhndc.apps.googleusercontent.com",
            callback: handleCredentialResponse
          });
          google.accounts.id.renderButton(
            document.getElementById("buttonDiv"),
            { theme: "outline", size: "large" }  // customization attributes
          );
          google.accounts.id.prompt(); // also display the One Tap dialog
        }


    </script>
    



    <!---conteúdo da página --->

    @yield('content')

    <!--Footer ou roda pé-->
        <footer class= 'bg-primary'>
        <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <ul class="list-inline text-center">

                        </ul>
                        <div class="small text-center fst-italic" >Copyright &copy;2022 Mais Água, inc </div>
                    </div>
                </div>
            </div>
        </footer>
        
    <!--Script do bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>