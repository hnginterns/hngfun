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
    let url = 'assets/php/formProcess.php?name='+name+'&email='+email+'&message='+message;
    let xhr = new XMLHttpRequest();
      
    xhr.open('GET', url, true);
    xhr.onload = function () {
      submit.innerHTML = `<i class="fa fa-check fa-fw"></i> Sent`
        setTimeout(() => {
            submit.removeAttribute('disabled');
            submit.innerHTML = `Send`;
            document.getElementById("name").value = '';
            document.getElementById("email").value = '';
            document.getElementById("message").value = '';
        }, 10000)
    };
    xhr.onerror = function() {
        submit.innerHTML = `<i class="fa fa-times fa-fw"></i> Sent`
        setTimeout(() => {
            submit.removeAttribute('disabled');
            submit.innerHTML = `Send`;
        }, 3000)
    };
    xhr.send();
})
