<!DOCTYPE html>
<html>
<head>
	<!-- Include fonctions.php -->
	<?php 
		include "fonctions.php"; 
		show_head();
	?>
</head>
<body>
	<?php show_navbar(); ?>

	<div class="container">
		<!-- Titles -->
		<div class="row">
			<div class="col"></div>
			<div class="col"></div>
		    <div class="col text-right font-weight-bold col-lg-auto">
		      <h2>Shopping cart</h2>
		    </div>
		 </div>
		 <div class="row">
		 	<div class="col text-left font-weight-normal col-lg-auto">
		      <h3>Your items</h3>
		    </div>
		 </div>
		<!-- Item 1 -->
		<div class="row my-3 align-middle border p-4 bg-light">
		    <div class="col">
		      <img class="img-thumbnail" src="images\images_cart\cart_albu.png">
		    </div>
		    <div class="col text-left">
		      <h5>"Albu"</h5>
		      <footer class="blockquote-footer"><a href="">Hats</a> \ <a href="">Movies & TV Shows</a> \ <a href="">Breaking Bad</a> \ <a href="">"Albu"</a></footer>
		    </div>
		    <div class="col-lg-auto">
		      <h6>$109.99</h6>
		      <select class="form-control" id="exampleFormControlSelect1">
			    <option>1</option>
			    <option>2</option>
			    <option>3</option>
			    <option>4</option>
			    <option>5</option>
			    <option>6</option>
			</select>
		    </div>
		  </div>
		<div>
		<!-- Item 2 -->
		<div class="row my-3 align-middle border p-4 bg-light">
		    <div class="col">
		      <img class="img-thumbnail" src="images\images_cart\cart_walter.png">
		    </div>
		    <div class="col text-left">
		      <h5>"Walter game"</h5>
		      <footer class="blockquote-footer"><a href="">Hats</a> \ <a href="">Movies & TV Shows</a> \ <a href="">Breaking Bad</a> \ <a href="">"Walter game"</a></footer>
		    </div>
		    <div class="col-lg-auto">
		      <h6>$64.99</h6>
		      <select class="form-control" id="exampleFormControlSelect1">
			    <option>1</option>
			    <option>2</option>
			    <option>3</option>
			    <option>4</option>
			    <option>5</option>
			    <option>6</option>
			</select>
		    </div>
		  </div>
		  <!-- Check out -->
		  <div class="row justify-content-end mt-4">
		    <div class="col text-right col-lg-3">
		      <h5>Your order total</h5>
		      <p><h6>Subtotal:</h6> $174.98</p>
		      <p><h6>Shipping:</h6> $4.99</p>
		      <p><h6>Total:</h6> $179.97</p>
				<div class="input-group mb-3">
				  <input type="text" class="form-control" placeholder="Promo code" aria-label="Promo code" aria-describedby="basic-addon2">
				  <div class="input-group-append">
				    <button class="btn btn-outline-secondary" type="button">Apply</button>
				  </div>
				</div>
				<div>
					<button class="btn btn-secondary w-50" type="button">Checkout</button>
					<img class="w-25" src="images/verisign-secured-logo.png">
				</div>
		    </div>
		 </div>
		<!-- Frequently bought together -->
		<div class="container my-5">
			<div class="row">
		 	<div class="col text-left font-weight-normal my-3 col-lg-auto">
		      <h3>Frequently bought together</h3>
		    </div>
		 </div>
			<div class="row">
				<div class="text-center col-sm">
					<div class="card" style="width: 18rem;">
					  <img class="card-img-top rounded mx-auto d-block w-50" src="images/images_cart/might_like_jay.png" alt="Jay">
					  <div class="card-body">
					    <h5 class="card-title">Jay</h5>
					    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					    tempor incididunt ut labore et dolore magna aliqua.</p>
					  </div>
					  <div class="card-body">
					    <h5>$5</h5>
					    <a href="#" class="card-link"><i class="fas fa-lg fa-cart-plus"></i></a>
					  </div>
					</div>
					</div>
					<div class="text-center col-sm">
						<div class="card" style="width: 18rem;">
						  <img class="card-img-top rounded mx-auto d-block w-50" src="images/images_cart/might_like_goldfinch.png" alt="Goldfinch">
						  <div class="card-body">
						    <h5 class="card-title">Goldfinch</h5>
						    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						    tempor incididunt ut labore et dolore magna aliqua.</p>
						  </div>
						  <div class="card-body">
						    <h5>$3</h5>
						    <a href="#" class="card-link"><i class="fas fa-lg fa-cart-plus"></i></a>
						  </div>
						</div>
					</div>
					<div class="text-center col-sm">
						<div class="card" style="width: 18rem;">
						  <img class="card-img-top rounded mx-auto d-block w-50" src="images/images_cart/might_like_box.jpg" alt="Peakaboo mini box">
						  <div class="card-body">
						    <h5 class="card-title">Peakaboo mini box</h5>
						    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						    tempor incididunt ut labore et dolore magna aliqua.</p>
						  </div>
						  <div class="card-body">
						    <h5>$8</h5>
						    <a href="#" class="card-link"><i class="fas fa-lg fa-cart-plus"></i></a>
						  </div>
						</div>
					</div>
			</div>
		</div>
		<!-- Scroll-top -->
		<i onclick="topFunction()" id="scrollTop" title="Haut de page"></i>
		<!--  -->

		<!-- Scroll-top scripts -->
		<script type="text/javascript">
		window.onscroll = function() {scrollFunction()};

		function scrollFunction() {
		  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
		    document.getElementById("scrollTop").style.display = "block";
		  } else {
		    document.getElementById("scrollTop").style.display = "none";
		  }
		}

		function topFunction() {
		  document.body.scrollTop = 0; // For Safari
		  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
		}
		</script>
		<!--  -->
	</div>
</div>

	<?php show_footer(); ?>
</body>
</html>