@extends('website.layout.ruralnet')

@section('content')
<div class="login_banner">
    <div class="container">
        <div class="contact_banner">
            <p>Reach out to your community with RuralNet</p>
            <p>
                Digitizing your insurance operations with RuralNet makes it easier to 
                apply for insurance and process claims, giving you more time to engage 
                with your community and find out what they need.
            </p>
        </div>
        <img src="{{ asset('images/contact-img.png') }}" class="right">
    </div>
</div>

<div class="container">
    <div class="contact_content">
            <div class="desc">
                <p>Get in touch with us using the form below or by emailing <a href="mailto:support@ruralnet.ph">support@ruralnet.ph</a> to learn more about our online insurance platform.</p>
            </div>
            <form id="contact_enquiry">
                @csrf
                <div class="spinner-parent">
                    <div class="spinner-overlay">
                         {{-- SPINNER --}}
                        <div class="loading-spinner"></div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="firstName" name="firstName" onkeyup="removeInteger(this)" placeholder="First Name (required)" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="middleName" name="middleName" onkeyup="removeInteger(this)" placeholder="Middle Name (optional)" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="lastName" name="lastName" onkeyup="removeInteger(this)" placeholder="Last Name (required)" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email Address (required)" required>
                </div>
                <div class="form-group">
                    <input type="tel" class="form-control" id="mobileNumber" name="mobileNumber" onkeyup="handleKeyUp(this)" pattern="[0-9]{11}" maxlength="11" placeholder="ex. 09xxxxxxxxx (required)" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="organization" name="organization" placeholder="Organization (required)" required>
                </div>
                <div class="form-group">
                    <textarea id="reasonForContacting" class="form-control txt-area" name="reasonForContacting" rows="4" placeholder="Reason for contacting RuralNet (required)" required></textarea>
                </div>
            
                <div class="form-group">
                    <button type="button" class="btn" id="submitForm">Submit</button>
                </div>
                <div class="contact-sweet-msg" id="sweet-msg">
                    <img src="{{ asset('images/sweet-msg.png') }}" alt="">
                    <span class="close-sweet-msg" id="close-sweet-msg">x</span>
                </div>
            </form>
    </div>
</div>
    

<div class="container">
    <div class="login_banner2">
        <div class="contact_msg">
            <div class="desc">
                <p>
                    Our customer service hotline is available from 
                    Monday to Saturday, 9AM to 5PM. 
                    <img src="{{ asset('images/cashko-hand-blue-transparent.png') }}">
                </p>
            </div>
        </div>
        <div class="contact_info">
            {{-- Old school style works! --}}
            {{-- <ul>
                <li>Email<a href="mailto:support@ruralnet.ph" style="color: #fff">:&nbsp;support@ruralnet.ph</a></li>
                <li>Globe:&nbsp;028 876 1428</li>
                <li>PLDT:&nbsp;032 342 7826</li>
                <li>Toll-Free:&nbsp;1800 1320 0211</li>
            </ul> --}}
                <table>
                    <tr>
                        <td class='info_h'>Email</td>
                        <td><span style="color: rgb(255,255,255)">:&nbsp;support@ruralnet.ph</span></td>
                    </tr>
                    <tr>
                        <td class='info_h'>Globe</td>
                        <td><span style="color: rgb(255,255,255)">:&nbsp;0&zwnj;28 87&zwnj;6 14&zwnj;28</span></td>
                    </tr>
                    <tr>
                        <td class='info_h'>PLDT</td>
                        <td><span style="color: rgb(255,255,255)">:&nbsp;0&zwnj;32 34&zwnj;2 78&zwnj;26</span></td>
                    </tr>
                    <tr>
                        <td class='info_h'>Toll-Free</td>
                        <td><span style="color: rgb(255,255,255)">:&nbsp;18&zwnj;00 13&zwnj;20 02&zwnj;11</span></td>
                    </tr>
                </table> 
        </div>
    </div>
</div>
<style>
    /* Styles for the modal */
    .modal {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 20px;
        background-color: #fff;
        border: 1px solid #ccc;
        z-index: 1000;
    }

    /* Styles for the overlay/background behind the modal */
    .overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 999;
    }
</style>
<script>
    function validateForm() {
        var firstName = document.getElementById('firstName').value;
        var lastName = document.getElementById('lastName').value;
        var mobileNumber = document.getElementById('mobileNumber').value;
        var reasonForContacting = document.getElementById('reasonForContacting').value;

        if (firstName === '' || lastName === '' || mobileNumber === '' || reasonForContacting === '') {
            displayModal('Please fill in all required fields.');
            return false;
        }

        return true;
    }

    function displayModal(message) {
        document.getElementById('modalMessage').innerHTML = message;
        document.getElementById('myModal').style.display = 'block';
        document.getElementById('overlay').style.display = 'block';
    }

    function closeModal() {
        document.getElementById('myModal').style.display = 'none';
        document.getElementById('overlay').style.display = 'none';
    }


    // remove special char and char on mobile fields
    function handleKeyUp(inputElement) {
        var reg = /[^0-9]/
        var input = inputElement.value.replace(reg, '')
        inputElement.value = input
    }

    // remove special char and char on mobile fields
    function removeInteger(inputElement) {
        var reg = /[^a-zA-Z]/
        var input = inputElement.value.replace(reg, '')
        inputElement.value = input
    }


</script>
@endsection