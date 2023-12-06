<!DOCTYPE html>
<html>
<head>
    <title>RuralNet - Contact</title>
</head>
<body>
    <p>Hello,</p>
    <p>You've received a message from the Ruralnet.ph website. Please review the details below.</p>
    <br />

    <p>Sender Information:</p>
    <p>Name: {{$fullname}}</p>
    <p>Email: {{$email}}</p>
    <p>Mobile: {{$mobileNumber}}</p>
    <p>Organization: {{$organization}}</p>
    <br />

    <p>Reason for Contacting RuralNet:</p>
    <p>{{$reasonForContacting}}</p>
    <br />
    <br />

    <p>Thank you.</p>
</body>
</html>
php artisan make:mail ContactEmail