<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="243464921032-0l8e6buqrspj1ct4p371ii081uo4okoc.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
     
    <style type="text/css">
      @import url(http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,600,700,400);
 
      body {
        margin: 0;
        padding: 10%;
        text-align: center;
        font-family: 'Open Sans';
        background: #F8F8F8;
      }
 
      .user {
          padding: 50px 20px;
          background: #FFFFFF;
          border-radius: 2px;
          box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
          width: 330px;
          display: block;
          margin: 0 auto;
      }
 
      #user-photo {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        display: block;
        margin: 0 auto 10px auto;
      }
 
      h1 {
        display: block;
        margin: 0 auto;
        text-align: center;
        font-weight: lighter;
      }
 
      #user-name {
        color: #0066AA;
        font-weight: bold;
      }
 
      #user-email {
        display: block;
        margin: 0 auto;
        text-align: center;
        color: #0066AA;
      }
 
      .g-signin2,
      .g-signin2 .abcRioButton {
        display: block;
        margin: 20px auto 0 auto;
        text-align: center;
      }
    </style>
  </head>   
  <body>
    <div class="user">
      <img id="user-photo" src="https://mariovalney.com/wp-content/uploads/2015/06/user-anonimo.jpg">
      <h1>Olá, <span id="user-name">visitante</span>!</h1>
      <p id="user-email"></p>
    </div>
    <div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark" data-width="370" data-height="50" data-longtitle="true" data-lang="pt-BR"></div>
 
    <script>
      function onSignIn(response) {
            // Conseguindo as informações do seu usuário:
            var perfil = response.getBasicProfile();
 
            // Conseguindo o ID do Usuário
            var userID = perfil.getId();
 
            // Conseguindo o Nome do Usuário
            var userName = perfil.getName();
 
            // Conseguindo o E-mail do Usuário
            var userEmail = perfil.getEmail();
 
            // Conseguindo a URL da Foto do Perfil
            var userPicture = perfil.getImageUrl();
 
            document.getElementById('user-photo').src = userPicture;
            document.getElementById('user-name').innerText = userName;
            document.getElementById('user-email').innerText = userEmail;
 
            // Recebendo o TOKEN que você usará nas demais requisições à API:
            var LoR = response.getAuthResponse().id_token;
            console.log("~ le Tolkien: " + LoR);
        };
    </script>
  </body>
</html>