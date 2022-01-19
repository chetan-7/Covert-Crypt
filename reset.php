<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Password Reset</title>
      <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
      <link rel="stylesheet" href="assets/css/reset.css">
  </head>
  <body>
      <main>
        <section class="container reset-container">
          <fieldset>
            <div>
              <img src="https://raw.githubusercontent.com/WaelYasmina/fire-auth/6ba8e3d7666b007c6c0f975d0865c1a6a5c8a6c7/public/img/reset.svg">
              <!--https://www.visualpharm.com/free-icon-->
            </div>
            <div>
              <label for="mail">Email</label> <br>
              <input type="email" id="mail" name="mail"/>
            </div>
            <button id="resetPassword">Confirm</button>
          </fieldset>
      </section>
      <div class="feedbackContainer success">
        <div class="feedbackIcon"></div>
        <p class="feedbackMessage">Signed up Successfully</p>
      </div>
      <div class="feedbackContainer failure">
        <div class="feedbackIcon"></div>
        <p class="feedbackMessage">Signing up failed</p>
      </div>
    </main> 
    <!-- The core Firebase JS SDK is always required and must be listed first -->
  <script src="https://www.gstatic.com/firebasejs/8.6.1/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/8.6.1/firebase-auth.js"></script>
  <script src="https://www.gstatic.com/firebasejs/8.6.1/firebase-database.js"></script>

<script src="https://www.gstatic.com/firebasejs/8.6.1/firebase-analytics.js"></script>

  <script src="assets/js/secret.js"></script>
   <script src="/__/firebase/init.js"></script>
    <script src="assets/js/reset.js"></script>   
  </body>
</html>