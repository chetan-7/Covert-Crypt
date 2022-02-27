<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covert Crypt</title>
    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
    <div class="hero">
        <div class="form-box" id="form-box1">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
            </div>
            <div class="social-icons">
                <img src="https://cdn1.iconfinder.com/data/icons/social-media-rounded-corners/512/Rounded_Facebook_svg-1024.png">
                <img src="https://cdn1.iconfinder.com/data/icons/social-media-rounded-corners/512/Rounded_Twitter5_svg-1024.png">
                <img src="https://cdn1.iconfinder.com/data/icons/social-media-rounded-corners/512/Rounded_Instagram_svg-1024.png">
            </div>
            <form method="POST" id="login_div" class="input-group">
                <input type="email" class="input-field" id="email_field" name="email" placeholder="User Id" required>
                <input type="password" class="input-field" id="password_field" placeholder="Enter Password" required>

           		<div>
                	<input type="checkbox" class="chech-box"><span>Remember me</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                	<a href="reset.php" class="forget-pass"><span style="color:#092f79;">Forgot password?<span></a>
                </div>	 
                <button onclick="signIn()"  type="submit" formtarget="_blank" style="color:white;"class="submit-btn">Sign In</button>     
            </form>
            <div id="gsign">
            <button onclick="GoogleLogin()" type="submit"  formtarget="_blank" class="submit-btn" style="display:block;color: white;margin-top:240px; width:65%;">Sign In With Google</button>
            </div>
            <form method="POST" id="signup_div" class="input-group">
                
                <input type="text" class="input-field" id="user_name" placeholder="Name" required>
                <input type="email" class="input-field" id="email_field1" placeholder="Email.." required>
                <input type="password" class="input-field" id="password_field1" placeholder="Enter Password" required>
                <input type="password" class="input-field" id="password_field2" placeholder="Re-enter Password" oninput="check(this)" required>
                <input type="text" class="input-field" maxlength="13" id="phone_num" placeholder="+91**********" pattern="[+]{1}[9][1][0-9]{10}" required>
                <div id="recaptcha-container"></div>
                <br>
                <button type="submit" class="submit-btn" style="color:white;" onclick="phoneAuth();">Continue</button>               
                <div class="show2">
                <input type="text" class="input-field" id="verificationCode" placeholder="Enter OTP code"><br><br>
                <button onclick="signUp();" style="color:white;" type="submit" class="submit-btn">Register</button>
                </div>
            </form>
            
        </div>
    </div>
</body>
  <script src="https://www.gstatic.com/firebasejs/8.6.1/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/8.6.1/firebase-auth.js"></script>
  <script src="https://www.gstatic.com/firebasejs/8.6.1/firebase-database.js"></script>

<script src="https://www.gstatic.com/firebasejs/8.6.1/firebase-analytics.js"></script>

  <script src="assets/js/secret.js"> </script>
   <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/plugins/grid-gallery/js/grid-gallery.min.js"></script>
    <script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
    
    <script src="assets/js/firebase.js"></script>
    <script type="text/javascript" src="assets/js/google.js"></script>

    <script src="assets/js/script.js"></script>
</html>


