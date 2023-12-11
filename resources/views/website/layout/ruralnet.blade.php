<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>RuralNet</title>
    {{-- <link rel="stylesheet" href="{{ asset('/build/assets/app-d24af13c.css.css') }}">  --}}
    <!-- Include the generated CSS file -->
    
    <!-- Boxicons CDN-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
    <!-- Bootstrap CSS -->
    
    @vite(['resources/scss/app.scss', 'resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
    <nav>
        <div class="container">
            <a href="/" class="nav_logo">
                <img src="{{ asset('images/RuralNetLogo.png') }}">
            </a>
            <ul id="nav_items">
                <li><a href="/insurance_solutions">INSURANCE SOLUTIONS</a></li>
                <li><a href="/contact">CONTACT</a></li>
                <li><a href="/privacy_policy">PRIVACY POLICY</a></li>
            </ul>
            <button id="open_nav_btn"><i class='bx bx-menu'></i></button>
            <button id="close_nav_btn"><i class='bx bx-x'></i></button>
        </div>
    </nav>
    @yield('content')
    <footer>
        <div class="container">
            <div id="f_left">
                <span>CONTACT US</span>
                <div>
                    <span>(028) 8761-428</span>
                    <span><a href="mailto:support@ruralnet.ph">support@ruralnet.ph</a></span>
            
                </div>
             </div>
             <div id="f_right">
                <div>
                    <i class='bx bxl-instagram'></i>
                    <i class='bx bxl-twitter' ></i>
                    <i class='bx bxl-facebook' ></i>
                </div>
                <span>© RuralNet</span>
            </div>
        </div>
    </footer>   
    {{-- <script src="{{ asset('/build/assets/app-23295724.js') }}"></script>  --}}
</body>
</html>
