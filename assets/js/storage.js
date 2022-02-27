var FileName,FileUrl;
var files=[];
var reader;
var user;
function setter_user(email){
    user=email;
    console.log(user);
}

document.getElementById("select").onclick=function(e){
    var input=document.createElement("input");
    input.type='file';
    input.onchange = e =>{
    files=e.target.files;
    reader=new FileReader();
    reader.onload=function(){
            document.getElementById("myfile").src=reader.result;
        }
        reader.readAsDataURL(files[0]);
    }
    input.click();
    }

    //----UPLOAD PROCESSSS-------------
    
    document.getElementById('upload').onclick=function(){
        FileName=document.getElementById("namebox").value;
        var uploadTask=firebase.storage().ref('Files/'+user+'/'+FileName).put(files[0]);
        uploadTask.on('state_changed',function(snapshot){
            var progress=(snapshot.bytesTransferred/snapshot.totalBytes)*100;
            document.getElementById('UpProgress').innerHTML='Upload'+progress+'%';
        },

        function(error) {
            alert("error in saving the file");
        },

        function() {
            uploadTask.snapshot.ref.getDownloadURL().then(function(url){
                FileUrl=url;
                firebase.database().ref('Documents/'+FileName).set({
                    Name:FileName,
                    Link:FileUrl
                });
                alert('File addded successfully');
            });
        });
    }
    

    //------Retrieval Process---------
    document.getElementById("retrieve").onclick=function(e){
        e.preventDefault();
        FileName=document.getElementById('namebox').value;
        firebase.database().ref('Documents/'+FileName).on('value',function(snapshot){
               //window.location.href="File/"+snapshot.val().Link;
                /*if(snapshot.val().Link == ""){
                    document.getElementById('myFile').innerHTML="File doesn't Exist !";
                }*/
                document.getElementById('myfile').innerHTML="View";
                document.getElementById('myfile').href=snapshot.val().Link;
                console.log(snapshot.val().Link);
                
                /*else{
                    document.getElementById('myfile').innerHTML="File doesn't Exist !";
                } */
        })
    }