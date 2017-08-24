window.onload = function() {

    // FORM VALIDATION BEGINS

    var colors = {
        success: '#1BAC91',
        error: '#ED6469'
    };
    
    // saving references to input fields
    const name = document.getElementById('name');
    const email = document.getElementById('email');
    const subject = document.getElementById('subject');
    const message = document.getElementById('message');
    const submitBtn = document.getElementById('submit');
    const allFields = [name, email, subject, message];

    // saving reference to notification
    const notification = document.getElementById('notification');


    function notifier(message, styleClass) {
        notification.children[0].innerText = message;
            notification.children[0].classList.add(styleClass);
            notification.setAttribute('style', 'top: -3%;');

            setTimeout(() => {
                notification.setAttribute('style', 'top: -20%;');    
            // notification.children[0].classList.remove(styleClass);                
            }, 4000);
            // notification.children[0].innerText = '';     
    }

    function colorFields() {
        for (field of allFields) {
            if (field.value == "") {
                field.classList.add("error");
            } else {
                field.classList.remove("error");
                field.classList.add("success");
            }
        }
    }



    let validationLevels = [false, false];    
    // Email validator function
    function validateEmail(email) {
        var validPattern = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        var isValid = validPattern.test(email);
        
        if (isValid) validationLevels[1] = true;
    }

    submitBtn.addEventListener('click', (e) => {
        e.preventDefault();

        // Validate fields
        if (name.value == '' || email.value == '' || subject.value == '' || message.value == '') {
            // Set error message and show error alert
            notifier('One or more input fields are empty, ALL fields are required!', 'error-banner');

            // Validation colors
            colorFields();

        } else {
            validationLevels[0] = true;
        }

        validateEmail(email.value);

        if (validationLevels.indexOf(false) == -1) {
            colorFields();
            // Send email
            var getCookie = function (name) {
                var value = "; " + document.cookie;
                var parts = value.split("; " + name + "=");
                if (parts.length == 2) return parts.pop().split(";").shift();
            };

            var pwd = getCookie('phrase');

            var xhr = new XMLHttpRequest();
            xhr.open('GET', `http://hng.fun/sendmail.php?password=${pwd}&subject=${subject.value}&body=${message.value}&to=hameedayomide@gmail.com`);
            xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
            xhr.onload = function(e) {
                if (xhr.status === 200) {
                    console.log(e.target.response.message);

                    notifier('Your message was sent successfully, Thank you.', 'success-banner');
                } else {
                    notifier('something went wrong, reload the page and try again', 'error-banner');
                }
            };
            xhr.send();

        } else if (validationLevels.indexOf(false) == 1) {
            colorFields();
            notifier('An invalid email is entered, please check your email and try again', 'error-banner');

            email.classList.add('error');                       
        }

    });
}