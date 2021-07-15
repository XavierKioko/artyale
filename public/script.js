 const user_form=document.querySelector('#user_reg');

 //saving data to firestore
 user_form.addEventListener('submit',(e)=>{
   e.preventDefault();
   db.collection('Yale_users').add({
     name:user_form.fullname.value,
     email:user_form.email.value,
     event_name:user_form.evnt_name.value
   });
   user_form.fullname.value='';
   user_form.email.value=''; 
   user_form.evnt_name.value='';

   alert('Successfully registered for Event')
 })

db.collection('Yale_users').get().then((snapshot)=>{
snapshot.docs.forEach(doc => {
  console.log(doc.data());
});
});
