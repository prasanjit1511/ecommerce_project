<!DOCTYPE html>
<html lang="en">
    

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
                        <a href="{{ url('/') }}"><img src="images/logo.png" alt="Logo" width="125px"></a>
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

	<!-- --------- ACCOUNT PAGE SECTION ---------->   	

		<div class="account-page">
			<div class="container">
				<div class="row">
					<div class="col-2">
						<img src=" {{ asset('images/image1.png') }}" alt="image1">
					</div>

					<div class="col-2">
						<div class="form-container">
							<div class="form-btn">
								<span id="login" onclick="register()">Login</span>
								<span id="register" onclick="login()">Register</span>
								<hr id="indicator"> 
							</div>
							
							<form id="loginForm" method="GET" action="/users">
								@csrf
								<input type="text" name="uname" placeholder="Username">
								<input type="password" name="pass" placeholder="Password">
								<button type="submit" class="btn">Login</button>
								<button class="textprimary"><a href="#">Forgot Password</a></button>

								
							</form>

							<form id="regForm" method="POST" action="/users">
                                @csrf
                                <input type="text" name="uname" placeholder="Username">
                                <input type="text" name="email" placeholder="Email">
                                <input type="text" name="mobile" placeholder="Mobile No.">
                                <input type="password" name="pass" placeholder="Password">
                                <button type="submit" class="btn">Register</button>             
                            </form>
							
						</div>
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

    
 <script  src="{{ asset('/loginregi.js') }}"></script> 

	<script >
	
	
	</script>
    </body>

</html>
