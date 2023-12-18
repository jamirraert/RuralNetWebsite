// get the element
var submitForm = document.getElementById('submitForm')
var spinner = document.querySelector(".spinner-parent");
var sweetMsg = document.getElementById('sweet-msg');
var closeBtn = document.getElementById('close-sweet-msg');
var form = document.getElementById('contact_enquiry');
var inputs = form.getElementsByTagName("input")


// LOADING SPINNER
document.addEventListener("DOMContentLoaded", function () {

    submitForm.addEventListener("click", async function (event) {
        let isTrue = false;

        for(var i = 0; i < inputs.length; i++) {
            if(inputs[i].value == '') {
                alert("All fields are required")
                isTrue = true;
                break;
            }
        }

        if(!isTrue) {
            var formData = new FormData(document.getElementById('contact_enquiry'))
            
            spinner.style.display = "block";

        fetch('/send_email', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                }
            })
            .then(response => response.json())
            .then(data => {
                if(data === 200) {

                    // Clear form fields
                    document.getElementById('contact_enquiry').reset();

                    spinner.style.display = 'none';
                    sweetMsg.style.display = 'block'

                    setTimeout(function() {
                        sweetMsg.style.display = 'none'
                    }, 3000)
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

