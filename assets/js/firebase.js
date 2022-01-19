
firebase.auth().onAuthStateChanged(function(user) {
  if (user) {
    // User is signed in.
    //document.getElementById("user_div").style.display = "block";
    document.getElementById("login_div").style.display = "none";
    document.getElementById("signup_div").style.display="none";
    //document.getElementById("form-box1").style.display="none";

    var user = firebase.auth().currentUser;

    if(user != null){
      //var email_id = user.email;
      //var id=firebase.auth().currentUser.uid;
      window.location = "home.php";
      //document.getElementById("user_para").innerHTML = "Welcome : " + email_id;
    }
  } else {
//No user is signed in
    //document.getElementById("user_div").style.display = "none";
    document.getElementById("signup_div").style.display="block";    
    document.getElementById("login_div").style.display = "block";
    //document.getElementById("form-box1").style.display="block";
  }
});

function signIn(){
  var userEmail = document.getElementById("email_field").value;
  var userPass = document.getElementById("password_field").value;

  firebase.auth().signInWithEmailAndPassword(userEmail, userPass).catch(function(error) {
    // Handle Errors here.
    var errorCode = error.code;
    var errorMessage = error.message;

    window.alert("Error : " + errorMessage);

    // ...
  });
}
function signUp(){
    var email = document.getElementById("email_field1").value;
    var password = document.getElementById("password_field1").value;
    let isBool;
    isBool=codeverify();    
    if(isBool == true){
        firebase.auth().createUserWithEmailAndPassword(email, password)
        .then((userCredential) => {
        // Signed in 
         var user = userCredential.user;
         alert(user);
        })
        .catch((error) => {
        var errorCode = error.code;
        var errorMessage = error.message;
        //alert(errorCode);
        // ..
        });
    }
    else{
        window.location="index.php";
    }
}
        /*const promise = firebase.auth().createUserWithEmailAndPassword(emailid,passwordo).then(function(){
        var id=firebase.auth().currentUser.uid;
        alert(emailid);
        alert(name); 
        firebase.database().ref('Registered/'+name).set({
            Email:emailid,
            Name:name,
            MobileNumber:number
        });
          }).catch(function(error){
              var errorcode=error.code;
              var errormsg=error.message;
              alert(errorcode);//need to remove it.
          });
        alert("Signed Up");*/
    
window.onload=function () {
  render();
};

function render() {
    window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container');
    recaptchaVerifier.render();
}
function phoneAuth() {
    //get the number
    var number=document.getElementById('phone_num').value;
    var password = document.getElementById("password_field1").value;
    var password_check = document.getElementById("password_field2").value;
    if(password!=password_check)return false;
    //phone number authentication function of firebase
    //it takes two parameter first one is number,,,second one is recaptcha
    firebase.auth().signInWithPhoneNumber(number,window.recaptchaVerifier).then(function (confirmationResult) {
        //s is in lowercase
        window.confirmationResult=confirmationResult;
        coderesult=confirmationResult;
        console.log(coderesult);
        alert("Message sent");
        /*document.getElementsByClassName("show1").display="none";
        document.getElementsByClassName("show2").display="block";*/
    }).catch(function (error) {
        alert(error.message);
    });
}
function codeverify() {
    //let i=0;
    var code=document.getElementById('verificationCode').value;
    coderesult.confirm(code).then(function (result) {
        alert("Successfully registered");
        var user=result.user;
        console.log(user);
        return true;
    }).catch(function (error) {
        alert(error.message);
        location.reload();
        return false; 
    });
    return true;
    //return false;
    /*if(i==1)
        return true;
    else return false;*/
}

function logout(){
  firebase.auth().signOut();
}
