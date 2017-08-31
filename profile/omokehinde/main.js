// Initialize Firebase
var config = {
    apiKey: "AIzaSyDblh56GWKUtDjxrmjZvbxfZSNgUEzyLYA",
    authDomain: "contactform-64f8b.firebaseapp.com",
    databaseURL: "https://contactform-64f8b.firebaseio.com",
    projectId: "contactform-64f8b",
    storageBucket: "contactform-64f8b.appspot.com",
    messagingSenderId: "39137316123"
};

firebase.initializeApp(config);

//refrence messages collection
var messagesRef = firebase.database().ref('messages');

// listen for form submit
document.getElementById('contactForm').addEventListener('submit', submitForm);

// submit form
function submitForm(e) {
    e.preventDefault();

    // get values
    var name = document.getElementById("name").value;
    var company = document.getElementById("company").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var message = document.getElementById("message").value;

    // save message
    saveMessage(name, company, email, phone, message);

    // show alert
    document.querySelector('.alert').style.display = 'block';

    // hide alert after 3 seconds
    setTimeout(function(params) {
        document.querySelector('.alert').style.display = 'none';
    }, 3000);

    // clear form
    document.getElementById('contactForm').reset();
}


// save message to firebase
function saveMessage(name, company, email, phone, message) {
    var newMessageRef = messagesRef.push();
    newMessageRef.set({
        name: name,
        company: company,
        email: email,
        phone: phone,
        message: message
    });
}