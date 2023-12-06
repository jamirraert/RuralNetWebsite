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
        <img src="{{ asset('images/CashKO_Hand-combine.png') }}"  class="right">
    </div>
</div>

<div class="contact_content">
    <div class="container">
        <p>Get in touch with us using the form below or by emailing <a href="mailto:support@ruralnet.ph">support@ruralnet.ph</a> to learn more about our online insurance platform.</p>

        <form action="submit_form.php" method="post">
            <input type="text" id="firstName" name="firstName" placeholder="First Name" required>
            <br>
        
            <input type="text" id="middleName" name="middleName" placeholder="Middle Name">
            <br>
        
            <input type="text" id="lastName" name="lastName" required placeholder="Last Name">
            <br>
        
            <input type="tel" id="mobileNumber" name="mobileNumber" pattern="[0-9]{11}" placeholder="e.g., 12345678901" required>
            <br>
        
            <input type="text" id="organization" name="organization" placeholder="Organization">
            <br>
        
            <textarea id="reasonForContacting" name="reasonForContacting" rows="4" placeholder="Reason for contacting RuralNet" required></textarea>
            <br>
        
            <button type="submit" class="btn">Submit</button>
        </form>

    </div>
</div>    

<div class="login_banner2">
    <div class="container">
        <div class="contact_msg">
            <p>Our customer service hotline is available from Monday to Saturday, 9AM to 5PM.</p>
            <img src="{{ asset('images/CashKO_Hand-blue.png') }}">
        </div>
        <div class="contact_info">
            {{-- Old school style works! --}}
            <center>
                <table>
                    <tr>
                        <td class='info_h'>Email</td>
                        <td>:support@ruralnet.ph</td>
                    </tr>
                    <tr>
                        <td class='info_h'>Globe</td>
                        <td>:028 876 1428</td>
                    </tr>
                    <tr>
                        <td class='info_h'>PLDT</td>
                        <td>:032 342 7826</td>
                    </tr>
                    <tr>
                        <td class='info_h'>Toll-Free</td>
                        <td>:1800 1320 0211</td>
                    </tr>
                </table> 
            </center>
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
</script>
@endsection