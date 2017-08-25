document.getElementById("messageform").addEventListener("submit", submitform);
var close = document.getElementById("expand");
var messagebox = document.getElementById("messagebox");
var msgbutton = document.getElementById("msgbutton");
if (msgbutton) {
    msgbutton.addEventListener("click", function (e) {
        e.preventDefault();
        console.log("hle");
        messagebox.className += "  animated bounceInLeft active";


    });
}

if (close) {
    close.addEventListener("click", function (e) {
messagebox.classList.remove("active");
messagebox.classList.remove("bounceInLeft");
messagebox.classList.remove("animated");
    });
}
function submitform(e, sender) {
    e.preventDefault();

    var subject = getIdValue('subject');
    var message = getIdValue('message');
    var password = getIdValue('password');
    var to = "okanlawonemmanuel41@gmail.com"
    var vars = "body=" + message + "&subject=" + subject + "&password=" + password + "&to =" + to;
    var msg = document.getElementById("alert");





    hr = new XMLHttpRequest()
    url = "../solar/msg-api.php";
    hr.open("POST", url, true);

    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded", true);

    hr.onreadystatechange = function () {
        console.log(hr.status);

        if (hr.readystate == 4 || hr.status == 200) {
            var response = hr.responseText;
            msg.style.display = "block";
            msg.innerHTML = response + "-"+password;
        }

    }

    hr.send(vars);
    setTimeout(function () {
        msg.style.display = "none";

    }, 5000)




}


function getIdValue(id) {

    return document.getElementById(id).value;
}