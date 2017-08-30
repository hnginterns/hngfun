let contactBtn = document.querySelector('#contactBtn');
let modalWrapper = document.querySelector('.modal-wrapper');
let modal = document.querySelector('.modal');
let submit = document.querySelector('#submit');

contactBtn.addEventListener('click', (e) => {
    modalWrapper.style.display = 'block';
})

window.onclick = (event) => {
    if (event.target == modalWrapper) {
        modalWrapper.style.animationName = "fadeOut";
        modal.style.animationName = "fadeOut";
        setTimeout(() => {
            modal.style.animationName = "view";
            modalWrapper.style.animationName = "fadeIn";
            modalWrapper.style.display = "none";
        }, 1000);
    }
};

var form = document.querySelector('#contactForm');

form.addEventListener("submit", (e) => {
    e.preventDefault();
    submit.setAttribute('disabled', 'true');
    submit.innerHTML = `<i class="fa fa-circle-o-notch fa-spin fa-fw"></i> Sending`
    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let message = document.getElementById("message").value;
 
    let subject = 'Contact Request From ' + name;
    let to = 'judehawkson@yahoo.com';
//     let url = `http://hng.fun/sendmail.php?password=${password}&subject=${subject}&body=${message}&to=${to}`;
//     console.log(url);
    // let body = `
    //             <h2>Contact Request</h2>    
    //             <h4>Name: </h4><p>${name}</p>
    //             <h4>Email: </h4><p>${email}</p>
    //             <h4>Body: </h4><p>'${message}</p>
    //             `;
    let url = 'assets/php/formProcess.php?name='+name+'&email='+email+'&message='+message;
    let xhr = new XMLHttpRequest();
    
//     xhr.onreadystatechange = function() {

//         if (xhr.readyState == 4 && xhr.status == 200) {
            
//             let res = xhr.responseText;
//             if (res == 'success') {
//                 submit.innerHTML = `<i class="fa fa-check fa-fw"></i> Sent`
//                 setTimeout(() => {
//                     submit.removeAttribute('disabled');
//                     submit.innerHTML = `Send`;
//                 }, 3000)
//             } else {
//                 submit.innerHTML = `<i class="fa fa-times fa-fw"></i> Not sent, Try again!`;
//                 setTimeout(() => {
//                     submit.removeAttribute('disabled');
//                     submit.innerHTML = `Send`;
//                 }, 3000)

//             }
//             console.log('Res', res);
//         }
//     };
    
    xhr.open('GET', url, true);
    //Send the proper header information along with the request
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.onload = function () {
      submit.innerHTML = `<i class="fa fa-check fa-fw"></i> Sent`
        setTimeout(() => {
            submit.removeAttribute('disabled');
            submit.innerHTML = `Send`;
        }, 3000)
    };
    xhr.send();

})
