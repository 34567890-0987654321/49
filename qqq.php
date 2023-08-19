<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Google Sign-In demo</title>
    <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
  </head>
  <body>
    <div class="g-signin2" data-onsuccess="onSignIn"></div>
    
    <script>
      function onSignIn(googleUser) {
        // Get the user's ID token.
        var id_token = googleUser.getAuthResponse().id_token;
        console.log('ID Token: ' + id_token);
        
        // Send the ID token to your server for verification and
        // to grant the user access to your site's protected resources.
        // Here you would typically use Ajax or fetch() to send the
        // token to your server.
      }
    </script>
  </body>
</html>
https://bipbap.ru/wp-content/uploads/2021/07/ffac8ec5eab93431d3e399727be447f7-730x456.jpg