
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Covert Crypt</title>
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--<link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="assets/plugins/grid-gallery/css/grid-gallery.min.css">-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>

<body>
        <header class="continer-fluid ">
            <div id="menu-jk" class="header-bottom">
                <div class="container">
                    <div class="row nav-row">
                        <div class="col-md-9 nav-col">
                            <nav class="navbar navbar-expand-lg navbar-light">
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link" style="color:white"><p id="userid"></p></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" style="color:white" onclick="logout()" href="index.php">Log Out</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        
    <div class="slider-detail">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <!--<ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            </ol>-->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block slide-img w-100" src="assets/images/slider/med.jpg" height="660px" alt="First slide" filter="blur(8px)">
                    <div class="carousel-caption vdg-cur d-none d-md-block">
                        <h5 class="bounceInDown">Covert Crypt</h5>
                        <p class="bounceInLeft" id="b1"></p>

                        <div class="vbh">
                           <div class="input-container">
                                <input type="text" id="namebox" placeholder="Input.."><br>
                           </div>
                           <button class="btn btn-success bounceInUp" id="select">Select
                            </button>
                            <button class="btn btn-success bounceInUp" id="upload">Upload
                            </button>
                            <button id="retrieve" class="btn btn-success bounceInUp">Retrieve</button><br>
                            <a id="myfile" download></a><br><label id="UpProgress"></label><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    
    <!--*************** About Us Starts Here ***************-->
   <section id="about" class="contianer-fluid about-us">
       <div class="container">
           <div class="row session-title">
               <h2>About Us</h2>
               
           </div>
            <div class="row">
                <div class="col-md-6 text">
                    <h2>About</h2>
                    <p style="font-size: 20px;font-family:'Lucida Console','Courier New', monospace; ">Welcome to Covert Crypt secure file storage////. 
                    </p>
                </div>
                <!--<div class="col-md-6 image">
                    <img src="assets/images/about.png" alt="">
                </div>-->
            </div>
       </div>
   </section>
</body>
  <script src="https://www.gstatic.com/firebasejs/8.6.1/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/8.6.1/firebase-auth.js"></script>
  <script src="https://www.gstatic.com/firebasejs/8.6.1/firebase-database.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.6.1/firebase-storage.js"></script>

  <script src="https://www.gstatic.com/firebasejs/8.6.1/firebase-analytics.js"></script>
  <script type="text/javascript" src="assets/js/secret.js"></script>
  <script src="assets/js/storage.js"></script>
    <script src="assets/js/firebase.js"></script>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script type="text/javascript">
        function displayOnTop(email){
            document.getElementById("userid").innerHTML="Welcome,"+email.split('@')[0]+"!";
        }
        window.onload=function(){
            /*var user=firebase.auth().currentUser;
            console.log("User info "+user);*/
            firebase.auth().onAuthStateChanged(function(user){
                if(user){
                    console.log("User signed in");
                    console.log(user.uid);
                    console.log(user.email);
                    displayOnTop(user.email);
                }
                else{
                    alert("Accesss denied");
                    window.location="index.php";
                }
            });
        }
    </script>
</html>
