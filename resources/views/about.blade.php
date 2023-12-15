<!DOCTYPE html>
<html lang="en">
    

        <meta charset="UTF-8" />
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title> Ecommerce - @yield('title','Website')</title>
        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('/style.css') }}">
        <!-- FONT STYLE -->
        <link rel="preconnect" href="https://fonts.googleapis.com/">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&amp;display=swap" rel="stylesheet">
        <!-- FONT AWESOME -->
        <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <!-- <script defer src="/node_modules/@fortawesome/fontawesome-free/js/all.js"></script> -->
    </head>
    <body>
        
    <!-- ---------- NAVIGATION BAR ---------- -->
        <header class="header">
            <div class="container">
                <div class="navbar">
                    <div class="logo">
                        <a href="{{ url('/') }}"><img src="{{ asset('images/logo.png') }}" alt="Logo" width="125px"></a>
                    </div>
                    <nav>
                        <ul role="list" id="MenuItems">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('/products') }}">Products</a></li>
                            <li><a href="{{ url('/about') }}">About</a></li>
                            <li><a href="{{ url('/contact') }}">Contact</a></li>
                            <li><a href="{{ url('/accouts') }}">Account</a></li>
                        </ul>
                    </nav>
                    <a href="{{ url('/cart') }}"><img src="{{ asset('images/cart.png') }}" alt="cart icon" width="30px" height="30px"></a>
                    <img src="images/menu.png" alt="Menu icon" class="menu-icon">
                </div>

<!-- ---------   TESTIMONIAL SECTION   ----------->     
            <div class="testimonial">
                <div class="small-container">
                    <div class="row">
                        <div class="col-3">
                            <i class="fa fa-quote-left quote"></i>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque quo aliquid non odio libero excepturi atque culpa debitis nemo accusantium fugiat</p>
                            <div class="rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <img src="{{ asset('images/user-1.png ') }}" alt="girl">
                            <h3 class="fw-bold">Sean Parker</h3>
                        </div>
                        <div class="col-3">
                            <i class="fa fa-quote-left quote"></i>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque quo aliquid non odio libero excepturi atque culpa debitis nemo accusantium fugiat</p>
                            <div class="rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <img src="{{ asset('images/user-2.png ') }}" alt="girl">
                            <h3 class="fw-bold">Mike Tyson</h3>
                        </div>
                        <div class="col-3">
                            <i class="fa fa-quote-left quote"></i>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque quo aliquid non odio libero excepturi atque culpa debitis nemo accusantium fugiat</p>
                            <div class="rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <img src="{{ asset('images/user-3.png ') }}" alt="girl">
                            <h3 class="fw-bold">Kares Mendez</h3>
                        </div>
                    </div>
                </div>
            </div>


     <!-- -------- FOOTER SECTION  ----------->       
        <footer>
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="footer-col-1">
                            <h3>Download Our App</h3>
                            <p>Download App for Android and ios mobile phone</p>
                            <div class="app-logo">
                                <img src="{{ asset('images/play-store.png ') }}" alt="play store logo">
                                <img src=" {{ asset('images/app-store.png') }}" alt="play store logo">
                            </div>
                        </div>
                        <div class="footer-col-2">
                            <img src=" {{ asset('images/logo-white.png') }} " alt="logo-white">
                            <p>our Purpose Is To Sustainably Make the Pleasure and Benefits of Sports Accessible to the Many.</p>
                        </div>
                        <div class="footer-col-3">
                            <h3>Useful Links</h3>
                            <ul role="list">
                                <li>Cupons</li>
                                <li>Blog Post</li>
                                <li>Return Policy</li>
                                <li>Join Affiliate</li>
                            </ul>
                        </div>
                        <div class="footer-col-4">
                            <h3>Follow us</h3>
                            <ul role="list">
                                <li>Facebook</li>
                                <li>Twitter</li>
                                <li>Instagaram</li>
                                <li>Youtube</li>
                            </ul>
                        </div>
                    </div>
                    <hr>
                    <p class="copyright">Copyright 2024 - Partho Roy</p>
                </div>
            </div>
        </footer>
          




    
    <script src="{{ asset('/main.js') }}"></script>
    </body>

<!-- Mirrored from redstoreprojectwebsite.jaysonromero.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Nov 2023 18:33:33 GMT -->
</html>
