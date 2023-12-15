<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from redstoreprojectwebsite.jaysonromero.com/product-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Nov 2023 18:33:34 GMT -->
<head>
        <meta charset="UTF-8" />
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>All Products - RedStore</title>
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

	<!-- --------- SINGLE PRODUCT DETAILS ---------->   	

		<div class="small-container single-product">
			<div class="row">
				<div class="col-2">
					<img src="images/gallery-1.jpg" alt="gallery 1" id="product-img">
					
					<div class="small-img-row">
						<div class="small-img-col">
							<img src="images/gallery-1.jpg" alt="gallery 1" class="small-img">
						</div>
						<div class="small-img-col">
							<img src="images/gallery-2.jpg" alt="gallery 1" class="small-img">
						</div>
						<div class="small-img-col">
							<img src="images/gallery-3.jpg" alt="gallery 1" class="small-img">
						</div>
						<div class="small-img-col">
							<img src="images/gallery-4.jpg" alt="gallery 1" class="small-img">
						</div>
					</div>
				</div>

				<div class="col-2">
					<p>Home / T-Shirt</p>
					<h1 class="fw-bold">Red Print T-Shirt by HRX</h1>
					<h4 class="fw-bold">$50.00</h4>
					<select>
						<option>Select Size</option>
						<option>XXL</option>
						<option>XL</option>
						<option>Large</option>
						<option>Medium</option>
						<option>Small</option>
					</select>
					<input type="number" value="1">
					<a href="#" class="btn">Add to Cart</a>
					<h3 class="fw-bold">Product Details  <i class="fa fa-indent"></i></h3>
					<br>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea quaerat possimus aut iure </p>
				</div>
			</div>
		</div>

	<!-- --------- TITLE --------- --> 	
			<div class="small-container">
				<div class="row row-2">
					<h2 class="fw-bold">Related Products</h2>
					<p>View More</p>
				</div>
			</div>

    <!-- --------- PRODUCT --------- -->    
        <main>
            <div class="small-container">
				<div class="row">
					<div class="col-4">
						<img src="images/product-9.jpg" alt="">
						<h4 class="fw-medium">Red Printed Tshirt</h4>
						<div class="rating">
							<i class="fa-solid fa-star"></i>
							<i class="fa-solid fa-star"></i>
							<i class="fa-solid fa-star"></i>
							<i class="fa-solid fa-star"></i>
							<i class="fa-regular fa-star"></i>
						</div>
						<p>$50.00</p>
					</div>
					<div class="col-4">
						<img src="images/product-10.jpg" alt="">
						<h4 class="fw-medium">Red Printed Tshirt</h4>
						<div class="rating">
							<i class="fa-solid fa-star"></i>
							<i class="fa-solid fa-star"></i>
							<i class="fa-solid fa-star"></i>
							<i class="fa-solid fa-star-half-stroke"></i>
							<i class="fa-regular fa-star"></i>
						</div>
						<p>$50.00</p>
					</div>
					<div class="col-4">
						<img src="images/product-11.jpg" alt="">
						<h4 class="fw-medium">Red Printed Tshirt</h4>
						<div class="rating">
							<i class="fa-solid fa-star"></i>
							<i class="fa-solid fa-star"></i>
							<i class="fa-solid fa-star"></i>
							<i class="fa-regular fa-star"></i>
							<i class="fa-regular fa-star"></i>
						</div>
						<p>$50.00</p>
					</div>
					<div class="col-4">
						<img src="images/product-12.jpg" alt="">
						<h4 class="fw-medium">Red Printed Tshirt</h4>
						<div class="rating">
							<i class="fa-solid fa-star"></i>
							<i class="fa-solid fa-star"></i>
							<i class="fa-solid fa-star"></i>
							<i class="fa-solid fa-star"></i>
							<i class="fa-regular fa-star"></i>
						</div>
						<p>$50.00</p>
					</div>
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

<!-- Mirrored from redstoreprojectwebsite.jaysonromero.com/product-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Nov 2023 18:33:36 GMT -->
</html>
