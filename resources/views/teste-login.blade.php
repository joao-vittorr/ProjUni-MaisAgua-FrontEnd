<!-- The top of file index.html -->
<html lang="en">
  <head>
    <meta name="google-signin-scope" content="profile email https://www.googleapis.com/auth/business.manage">
    <meta name="google-signin-client_id" content="243464921032-0l8e6buqrspj1ct4p371ii081uo4okoc.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
  </head>
  <body>
    <div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></div>
    <script>
      var gmb_api_version = 'https://mybusinessaccountmanagement.googleapis.com/v1';
      function onSignIn(googleUser) {
        // Useful data for your client-side scripts:
        var profile = googleUser.getBasicProfile();
        console.log('Full Name: ' + profile.getName());
        console.log("Email: " + profile.getEmail());
        var access_token = googleUser.getAuthResponse().access_token;

        //Using the sign in data to make a Business Profile APIs call
        var req = gmb_api_version + '/accounts';
        var xhr = new XMLHttpRequest();
        xhr.open('GET', req);
        xhr.setRequestHeader('Authorization', 'Bearer ' + access_token);

        //Displaying the API response
        xhr.onload = function () {
          document.body.appendChild(document.createTextNode(xhr.responseText));
        }
        xhr.send();
      }
    </script>
  </body>
</html>