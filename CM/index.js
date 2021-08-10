
  const firebaseConfig = {
     apiKey: "AIzaSyBd5ATAul4UIOgAsmXHIQGVAe3XqK6Xcps",
     authDomain: "centralzonewebapp.firebaseapp.com",
     projectId: "centralzonewebapp",
     storageBucket: "centralzonewebapp.appspot.com",
     messagingSenderId: "803107610265",
     appId: "1:803107610265:web:84145ab38511ebcc10e208",
     measurementId: "G-MKB4FZCP60"
   };
 
   // Initialize Firebase
 
   firebase.initializeApp(firebaseConfig);
 
   firebase.analytics();
 

  firebase.auth.Auth.Persistence.LOCAL;

   

  $("#btn-login").click(function() {

       //var userName = $("userName").val();
       var email = $("#email").val();
       var password = $("#password").val();

       if(email != " " && password != " ") {

          var result = firebase.auth().signInWithEmailAndPassword(email, password);

          result.catch(function(error) {

               //var errorCode = error.code;
               var errorMessage = error.message;
               alert("message : " + errorMessage);

          }); 
     }
            else {
            alert("Please enter valid information!");
       }
  });

  function showMessage(nice) {
     document.getElementById('nice').innerHTML = nice;
  }

  showMessage('nice');

 