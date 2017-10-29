
var config = {
    apiKey: "AIzaSyB5EJrhxFhyG6L2eiMEw7HiWe8zR6ekPgc",//API Key
    authDomain: "foodcho-6f570.firebaseapp.com",
    databaseURL: "https://foodcho-6f570.firebaseio.com",
    projectId: "foodcho-6f570",
    storageBucket: "",
    messagingSenderId: "260280033543"
  };
  firebase.initializeApp(config);

  var databaseref = firebase.database();
  var but = document.querySelector("#submit_comment");
  var review = document.querySelector("#review");
  var reviewed_person = document.querySelector("#reviewed_person");
  var commentssection = document.querySelector("#list-unstyled");
  const but_val = but.value;
  // alert(but_val);
   var databaseref = firebase.database().ref(but_val);

   databaseref.on('child_added', snap => {
    var namedisp = snap.child("name").val();
    var reviewdisp = snap.child("review").val();
  var idofcomment = snap.key;
   //console.log(idofcomment);
    $("#list-unstyled").append("<li class='media my-4'><img class='mr-3' width='10%' src='logo_pic_dt.jpg'><div class='media-body'><h5 id='nameofreviewer'class='mt-0 mb-1'>"+namedisp+"</h5><p>"+reviewdisp+"</p><p> <button type='button' value='"+idofcomment+"' id='reply_comment' class='btn btn-primary'>Reply</button></p></li>");

  });
  var rep = document.querySelector("#reply_comment");
  but.addEventListener("click", function () {
   
    const review2 = review.value;
    const reviewed_person2 = reviewed_person.value;
    var data = {
      review: review2,
      name: reviewed_person2
    }
    databaseref.push(data);

  });
  rep.addEventListener("click", function () {
    alert("reply");
     //const review2 = review.value;
     //const reviewed_person2 = reviewed_person.value;
   //  var data = {
      // review: review2,
      // name: reviewed_person2
     //}
     //databaseref.push(data);
 
   });

 


  