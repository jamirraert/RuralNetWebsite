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
    {{-- <footer>
        <div class="container">
            <div id="f_left">
                <span><a href="/contact" style="color: #FE9202; cursor: pointer;">CONTACT US</a></span>
                <div>
                    <span style="color: #002B79; cursor: pointer; margin-right: 1rem; font-size: 1rem;font-weight: 600;">Globe: (028) 8761-428</span>
                    <span style="color: #002B79; cursor: pointer; margin-right: 1rem; font-size: 1rem;font-weight: 600;">PLDT: (032) 342 7826</span>
                    <span style="color: #002B79; cursor: pointer; margin-right: 1rem; font-size: 1rem;font-weight: 600;">Toll-Free: 1800 1320 0211</span>
                    <span><span style="color: #002B79; font-weight: lighter;">support@ruralnet.ph</span></span>
            
                </div>
             </div>
             <div id="f_right" style="visibility:hidden">
                <div>
                    <i class='bx bxl-instagram'></i>
                    <i class='bx bxl-twitter' ></i>
                    <i class='bx bxl-facebook' ></i>
                </div>
                <span><a href="/">© RuralNet</a></span>
            </div>
        </div>
    </footer>    --}}
    <footer>
        <div class="container">
            <ul>
                <li><a href="/contact">CONTACT US</a></li>
                <li>Globe: (0&zwnj;28) 87&zwnj;61-4&zwnj;28</li>
                <li>PLDT: (03&zwnj;2) 34&zwnj;2 78&zwnj;26</li>
                <li>Toll-Free: 18&zwnj;00 13&zwnj;20 02&zwnj;11</li>
                <li>support@ruralnet.ph</li>
            </ul>
        </div>
    </footer>
    {{-- <script src="{{ asset('/build/assets/app-23295724.js') }}"></script>  --}}
</body>
</html>
