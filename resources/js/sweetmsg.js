// get the element
var submitForm = document.getElementById('submitForm')
var spinner = document.querySelector(".spinner-parent");
var sweetMsg = document.getElementById('sweet-msg');
var closeBtn = document.getElementById('close-sweet-msg');
var form = document.getElementById('contact_enquiry');
var inputs = form.querySelectorAll(".form-control");


// VALIDATE EMAIL
function isValidEmail(email) {
    // Simple email validation regex pattern
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

function alertBorder(input) {
        input.style.border = '1px solid red'
    setTimeout(function() {
        input.style.border = '1px solid #E9D0FC';
    }, 3000)
}

function alertBorderAllFields(inputs) {
    inputs.classList.add('alertBorder')
    setTimeout(function() {
        inputs.classList.remove('alertBorder')
    }, 3000)
}

// LOADING SPINNER
document.addEventListener("DOMContentLoaded", function () {

    submitForm.addEventListener("click", async function (event) {
        let isTrue = false;

        for(var i = 0; i < inputs.length; i++) {
            if(inputs[i].name === 'middleName') {
                continue;
            }

            if (inputs[i].name === 'mobileNumber' && inputs[i].value !== '') {
                // Check if the value is not a valid mobile number
                var mobileRegex = /^\d{11}$/,
                    charSpecialCharReg = /[^A-Za-z0-9]/

                if (!mobileRegex.test(inputs[i].value)) {
                    alert("Invalid mobile number");
                    alertBorder(inputs[i])
                    inputs[i].value = ''
                    isTrue = true;
                    break;
                }
            } else if(inputs[i].name === 'email') {
                if(!isValidEmail(inputs[i].value)) {
                    alert("Invalid email address");
                    inputs[i].value = '';
                    alertBorder(inputs[i])
                    isTrue = true;
                    break;
                }
            } else if (inputs[i].value === '') {
                alert("All fields are required");
                for(let o = 0; o <= inputs.length; o++) {
                    if(inputs[o].name === 'middleName') {
                        continue;
                    } else if(inputs[o].value === '') {
                        alertBorderAllFields(inputs[o])
                    }

                    // if(inputs[o].value === '' && inputs[0].name === 'middleName') {
                    //     alertBorderAllFields(inputs[o])
                    // }
                }
                isTrue = true;
                break;
            }
        }

        if(!isTrue) {
            var formData = new FormData(document.getElementById('contact_enquiry'))
            
            spinner.style.display = "block";

        await fetch('/send_email', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                }
            })
            .then(response => response.json())
            .then(data => {
                if(data?.status >= 200 || data?.status < 300) {

                    // Clear form fields
                    document.getElementById('contact_enquiry').reset();

                    spinner.style.display = 'none';
                    sweetMsg.style.display = 'block'

                    setTimeout(function() {
                        sweetMsg.style.display = 'none'
                    }, 3000)
                }else {
                    console.log("Something went wrong")
                }
            })
        event.preventDefault();
        }else {
            return
        }   
    });
  });

closeBtn.addEventListener('click', function() {
    sweetMsg.style.display = 'none'
})

