<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from redstoreprojectwebsite.jaysonromero.com/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Nov 2023 18:33:33 GMT -->
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
                    <a href="cart.html"><img src="images/cart.png" alt="cart icon" width="30px" height="30px"></a>
                    <img src="images/menu.png" alt="Menu icon" class="menu-icon">
                </div>   
            </div>      
        </header> 

	<!-- --------- CART ITEMS DETAILS ---------->   	

		<div class="small-container cart-page">
			
			<table>
				<tr>
					<th>Product</th>
					<th>Quantity</th>
					<th>Subtotal</th>
				</tr>
				<tr>
					<td>
						<div class="cart-info">
							<img src="images/buy-1.jpg" alt="buy-1.">
							<div>
								<p>RedsPrinterd Tshirt</p>
								<small>Price: $50.00</small>
								<br>
								<a href="#">Remove</a>
							</div>
						</div>
					</td>
					<td><input type="number" value="1"></td>
					<td>$50.00</td>
				</tr>
				<tr>
					<td>
						<div class="cart-info">
							<img src="images/buy-2.jpg" alt="buy-1.">
							<div>
								<p>RedsPrinterd Tshirt</p>
								<small>Price: $75.00</small>
								<br>
								<a href="#">Remove</a>
							</div>
						</div>
					</td>
					<td><input type="number" value="1"></td>
					<td>$50.00</td>
				</tr>
				<tr>
					<td>
						<div class="cart-info">
							<img src="images/buy-3.jpg" alt="buy-1.">
							<div>
								<p>RedsPrinterd Tshirt</p>
								<small>Price: $80.00</small>
								<br>
								<a href="#">Remove</a>
							</div>
						</div>
					</td>
					<td><input type="number" value="1"></td>
					<td>$50.00</td>
				</tr>
			</table>

			<div class="total-price">
				<table>
					<tr>
						<td>Subtotal</td>
						<td>$200.00</td>
					</tr>
					<tr>
						<td>Tax</td>
						<td>$35.00</td>
					</tr>
					<tr>
						<td>Total</td>
						<td>$165.00</td>
					</tr>
				</table>
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
             	<p class="copyright">Copyright 2024 - Partho roy</p>
           	</div>
      	</div>
  </footer>

    
    <script src="{{ asset('/main.js') }}"></script>
    </body>

</html>
