<html lang="pt-br">
  <head>
    <meta name="google-signin-scope" content="profile email https://www.googleapis.com/auth/business.manage">
    <meta name="google-signin-client_id" content="243464921032-0l8e6buqrspj1ct4p371ii081uo4okoc.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
  </head>
  <body>
    <div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></div>
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
  </body>
</html>
