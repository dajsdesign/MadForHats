<?php
	/* Fonction head, elle affiche le contenu du head lorsqu'elle est appelée */
	function show_head() {
		echo 
		'<!-- Head -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Mad For Hats - Accueil</title>
		<!-- Import JS -->
		<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js" integrity="sha256-xNjb53/rY+WmG+4L6tTl9m6PpqknWZvRt0rO1SRnJzw=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
		<script src="https://kit.fontawesome.com/25b1c8146d.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
		<!-- Import CSS -->
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" integrity="sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=" crossorigin="anonymous" />';
	}
	/* Fonction navbar, affiche la navbar lorsqu'elle est appelée */
	function show_navbar() {
		echo '
		<!-- Navbar -->
			<header class="pb-4">
				<nav class="navbar navbar-expand-lg navbar-light bg-light m-b-3">
				  <a class="navbar-brand" href="index.php"><img class="logo_black" src="images/logo_black.png"></a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="">Expand</span>
				  </button>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#browse" aria-controls="browse" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="">Browse</span>
				  </button>
				  <div class="collapse navbar-collapse" id="menu">
					<div class="input-group mx-auto ml-auto">
					  <div class="input-group-prepend">
					    <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
					  </div>
					  <input type="text" class="form-control" placeholder="" aria-label="Rechercher" aria-describedby="basic-addon1">
					</div>
				    <div class="navbar-nav ml-auto">
				      <a class="nav-item nav-link" href="member.php"><i class="fas fa-user fa-lg"></i></a>
				      <a class="nav-item nav-link" href="cart.php"><i class="fas fa-shopping-basket fa-lg"></i></a>
				      <a class="nav-item nav-link" href="#"><i class="fas fa-question-circle fa-lg"></i></a>
				    </div>
				  </div>
				</nav>

				<nav class="collapse navbar-collapse navbar-dark bg-dark" id="browse">
				    <div class="navbar-nav mx-auto ml-auto">
				      <!-- Liens -->
				      <a class="nav-item nav-link" href="#">Shop for hats</a>
				      <!-- Dropdown by lifestyle -->
				      <li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				          Shop by lifestyle
				        </a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				          <a class="dropdown-item" href="#">Mad for Hats everyday</a>
				          <a class="dropdown-item" href="#">Heritage</a>
				          <a class="dropdown-item" href="#">Int he open</a>
				          <a class="dropdown-item" href="#">Old south</a>
				          <a class="dropdown-item" href="#">Hats in the city</a>
				          <a class="dropdown-item" href="#">Mad for Hats\'s cut & sew</a>
				        </div>
				      </li>

				      <!-- Dropdown by shape -->
				      <li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				          Shop by shape
				        </a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				          <a class="dropdown-item" href="#">Ball cup & Trucker</a>
				          <a class="dropdown-item" href="#">Bowler & Top hat</a>
				          <a class="dropdown-item" href="#">Cadet</a>
				          <a class="dropdown-item" href="#">Cloche</a>
				          <a class="dropdown-item" href="#">Fascinator & Pillbox</a>
				          <a class="dropdown-item" href="#">Flatcap & Gatsby</a>
				          <a class="dropdown-item" href="#">Floppy</a>
				          <a class="dropdown-item" href="#">Outback & Western</a>
				          <a class="dropdown-item" href="#">Straw & Panama</a>
				          <a class="dropdown-item" href="#">XXL</a>
				          <a class="dropdown-item" href="#">Kids + Hats extras, accessories for you and your hat</a>
				        </div>
				      </li>

				      <!-- Dropdown shop whats -->
				      <li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				          Shop by what\'s
				        </a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				          <a class="dropdown-item" href="#">Hats</a>
				          <a class="dropdown-item" href="#">Caps</a>
				          <a class="dropdown-item" href="#">Accessories</a>
				        </div>
				      </li>
				      <!-- Liens -->
				      <a class="nav-item nav-link" href="#">Sales</a>
				      <a class="nav-item nav-link" href="#">Our shops</a>
				      <a class="nav-item nav-link" href="#">Our history</a>
				    </div>
				</nav>

				<!-- Show on PC --> 
				<nav class="navbar navbar-dark bg-dark navbar-expand-lg d-none d-lg-block" id="browse">
				    <div class="navbar-nav mx-auto ml-auto">
				      <!-- Liens -->
				      <a class="nav-item nav-link" href="#">Shop for hats</a>
				      <!-- Dropdown by lifestyle -->
				      <li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				          Shop by lifestyle
				        </a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				          <a class="dropdown-item" href="#">Mad for Hats everyday</a>
				          <a class="dropdown-item" href="#">Heritage</a>
				          <a class="dropdown-item" href="#">Int he open</a>
				          <a class="dropdown-item" href="#">Old south</a>
				          <a class="dropdown-item" href="#">Hats in the city</a>
				          <a class="dropdown-item" href="#">Mad for Hats\'s cut & sew</a>
				        </div>
				      </li>

				      <!-- Dropdown by shape -->
				      <li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				          Shop by shape
				        </a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				          <a class="dropdown-item" href="#">Ball cup & Trucker</a>
				          <a class="dropdown-item" href="#">Bowler & Top hat</a>
				          <a class="dropdown-item" href="#">Cadet</a>
				          <a class="dropdown-item" href="#">Cloche</a>
				          <a class="dropdown-item" href="#">Fascinator & Pillbox</a>
				          <a class="dropdown-item" href="#">Flatcap & Gatsby</a>
				          <a class="dropdown-item" href="#">Floppy</a>
				          <a class="dropdown-item" href="#">Outback & Western</a>
				          <a class="dropdown-item" href="#">Straw & Panama</a>
				          <a class="dropdown-item" href="#">XXL</a>
				          <a class="dropdown-item" href="#">Kids + Hats extras, accessories for you and your hat</a>
				        </div>
				      </li>

				      <!-- Dropdown shop whats -->
				      <li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				          Shop by what\'s
				        </a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				          <a class="dropdown-item" href="#">Hats</a>
				          <a class="dropdown-item" href="#">Caps</a>
				          <a class="dropdown-item" href="#">Accessories</a>
				        </div>
				      </li>
				      <!-- Liens -->
				      <a class="nav-item nav-link" href="#">Sales</a>
				      <a class="nav-item nav-link" href="#">Our shops</a>
				      <a class="nav-item nav-link" href="#">Our history</a>
				    </div>
				</nav>
			</header>
		';
	}

	/* Fonction footer, affiche le footer lorsqu'elle est appelée */
	function show_footer() {
		echo '
		<!-- Footer -->
	<footer class="pt-4">
	<div class="container" id="footer">
	  <div class="row">
	    <div class="col-sm text-center my-auto">
	      <div class="col-sm align-middle text-center">
				<div class="list-unstyled quick-links" id="contact">
					<h5>Contact</h5>
					<i class="fas fa-map-marker-alt"></i><a href="https://www.google.com/maps/place/9+Rue+Quebec,+10430+Rosi%C3%A8res-pr%C3%A9s-Troyes/@48.2692903,4.0773498,17z/data=!3m1!4b1!4m5!3m4!1s0x47ee990d1c7f84a3:0x737735ec593e713f!8m2!3d48.2692868!4d4.0795385"> 9 rue de Québec, Troyes</a><br>
					<i class="fas fa-phone"></i><a href="tel:+33325252525"> +33 (0)3 25 25 25 25</a><br>
					<i class="fas fa-mobile-alt"></i><a href="tel:+33626242421"> +33 (0)6 26 24 24 21</a><br>
					<i class="far fa-envelope"></i><a href="mailto:hello@madforhats.fr"> hello@madforhats.fr</a><br>
				</div>
			</div>
	    </div>
	    <div class="col-sm text-center my-auto">
	    	<a href="#"><img class="logo_black" src="images/logo_black.png"></a>
	      	<h5>Other links</h5>
			<ul class="list-unstyled quick-links">
				<li><a href="#"><i class="fa fa-angle-double-right"></i>Lifestyles</a></li>
				<li><a href="#"><i class="fa fa-angle-double-right"></i>More styles</a></li>
				<li><a href="#"><i class="fa fa-angle-double-right"></i>Shapes</a></li>
				<li><a href="#"><i class="fa fa-angle-double-right"></i>Help</a></li>
				<li><a href="#"><i class="fa fa-angle-double-right"></i>About</a></li>
			</ul>
	    </div>
	    <div class="col-sm text-center my-auto" id="social">
	      	<h5>Social medias</h5>
			<ul class="list-unstyled quick-links">
				<li><a href="javascript:void();"><i class="fab fa-twitter-square"></i>
				<li><a href="javascript:void();"><i class="fab fa-facebook-square"></i>
				<li><a href="javascript:void();"><i class="fab fa-pinterest-square"></i>
			</ul>
	    </div>
	</div>
	<div class="col-sm text-center my-auto">
			<ul class="list-unstyled quick-links">
				<li><a href="#"><i class="fa fa-angle-double-right"></i>Log-in</a></li>
				<li><a href="#"><i class="fa fa-angle-double-right"></i>Cart</a></li>
				<li><a href="#"><i class="fa fa-angle-double-right"></i>Wish list</a></li>
				<li><a href="#"><i class="fa fa-angle-double-right"></i>Subscribe</a></li>
				<li><a href="#"><i class="fa fa-angle-double-right"></i>Privacy</a></li>
				<li><a href="#"><i class="fa fa-angle-double-right"></i>Terms & conditions</a></li>
			</ul>
	    </div>
	<div id="copyright" class="text-center">
	   	Copyright 2019 &copy;<a href="index.php">MadForHats</a> 
	</div>
	</footer>
<!--  -->
		';
	}
 ?>