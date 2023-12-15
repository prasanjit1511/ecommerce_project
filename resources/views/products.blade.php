@section('title')
	Product
@endsection

<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from redstoreprojectwebsite.jaysonromero.com/products.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Nov 2023 18:33:33 GMT -->
<head>
        <meta charset="UTF-8" />
       
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>All Products - @yield('title','Website')</title>
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
        <header>
            <div class="container">
                <div class="navbar">
                    <div class="logo">
						<a href="index.html"><img src="images/logo.png" alt="Logo" width="125px"></a>
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
            </div>      
        </header> 

   

     <!-- --------- ALL PRODUCTS --------- -->    
        <main>
            <div class="small-container">
                <div class="row row-2">
					<h2 class="fw-bold">All Products</h2>
					<select>
						<option>Default Shorting</option>
						<option>Short by price</option>
						<option>Short by popularity</option>
						<option>Short by rating</option>
						<option>Short by sale</option>
					</select>
				</div>
                <div class="row">
					@foreach ($products as $product)
					<div class="col-xs-4" style="padding:5px">
					    <img src="{{ asset(explode('|', $product->image)[0]) }}" alt="" height="150" width="150">
					   <h4>{{$product->name}}</h4>

                        <div class="rating">
                            <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="far fa-star text-white"></i>
                        </div>

                       <p>{{ $product->price}} </p>
					   <h4 > {{$product->amount}} pisas</h4>

                    </div>
                    @endforeach
					</div>
                </div>

				<div class="page-btn">
					<span>1</span>
					<span>2</span>
					<span>3</span>
					<span>4</span>
					<span>&#8594;</span>
				</div>
			</div>	
        </main>

     <!-- -------- FOOTER SECTION  ----------->       
    <footer>
      <div class="footer">
          <div class="container">
              <div class="row">
                    <div class="footer-col-1">
						<h3>Download Our App</h3>
						<p>Download App for Android and ios mobile phone</p>
						<div class="app-logo">
							<img src="images/play-store.png" alt="play store logo">
							<img src="images/app-store.png" alt="play store logo">
						</div>
                    </div>
                    <div class="footer-col-2">
						<img src="images/logo-white.png" alt="logo-white">
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


</html>
