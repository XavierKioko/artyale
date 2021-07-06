const firebaseConfig = {
  apiKey: "AIzaSyCdnna5TMABhs0kOfKkDw0QENNnKqbKIQE",
  authDomain: "hciyale-ceac5.firebaseapp.com",
  databaseURL: "https://hciyale-ceac5-default-rtdb.europe-west1.firebasedatabase.app",
  projectId: "hciyale-ceac5",
  storageBucket: "hciyale-ceac5.appspot.com",
  messagingSenderId: "249380512206",
  appId: "1:249380512206:web:e7221d9d8bc12c859dcb9f"
};
firebase.initializeApp(firebaseConfig);

var messagesRef=firebase.database().ref('messages');
$(document).ready(function() {
	var a = document.getElementById('contactform');
	a.addEventListener('submit', submitForm);
});
function submitForm(e){
    e.preventDefault();

    var name=getInputVal('fname');
    var email=getInputVal('email');

    saveMessage(name,email);
   
}
function getInputVal(id){
 return document.getElementById(id).value;
}
function saveMessage(name,email){
  var newMessageRef=messagesRef.push();
  newMessageRef.set({
    name:name,
    email:email
  })
}



