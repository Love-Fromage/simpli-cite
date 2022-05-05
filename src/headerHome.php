<?php 
    include("./header2.php");
?>
<!DOCTYPE html>
<html lang="<?= $lang; ?>">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title><?php lang('À Propos','About Us'); ?></title>
		<link rel="shortcut icon" href="./images/270.286528372.ico" />
		<link rel="stylesheet" href="css/normalize.css" />
		<link rel="stylesheet" href="css/main.css" />

		<script
			src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
			integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
			crossorigin="anonymous"
			referrerpolicy="no-referrer"
		></script>
		<script
			src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/ScrollMagic.min.js"
			integrity="sha512-8E3KZoPoZCD+1dgfqhPbejQBnQfBXe8FuwL4z/c8sTrgeDMFEnoyTlH3obB4/fV+6Sg0a0XF+L/6xS4Xx1fUEg=="
			crossorigin="anonymous"
			referrerpolicy="no-referrer"
		></script>
		<!-- <script
			src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"
			integrity="sha512-VEBjfxWUOyzl0bAwh4gdLEaQyDYPvLrZql3pw1ifgb6fhEvZl9iDDehwHZ+dsMzA0Jfww8Xt7COSZuJ/slxc4Q=="
			crossorigin="anonymous"
			referrerpolicy="no-referrer"
		></script> -->

		<script src="js/script.js" defer></script>
	</head>
    <body>
    <div class="bg-home">
			<header>
				<nav>
					<div class="nav-m">
						<a href="./home.html">
							<img
								src="./images/logo-blanc.svg"
								alt="logo-blanc"
								id="logo-nav-m"
							/>
						</a>
						<div class="cont-ham">
							<span id="pain1"></span>
							<span id="pain2"></span>
						</div>
					</div>
					<div class="toggle-off" id="ham">
						<nav>
							<ul>
								<li class="activePage">
									<a href="./home.html">À propos</a>
								</li>
								<li>
									<a href="./vehicules.html"
										>Véhicules disponibles</a
									>
								</li>
								<li>
									<a href="./customer.html"
										>customer services</a
									>
								</li>
								<li>
									<a href="./career.html">carrières</a>
								</li>
								<li>
									<a href="./contact.html">contact</a>
								</li>
							</ul>
						</nav>
						<a href="#" class="lang">EN</a>
					</div>
					<div class="nav-d">
						<div class="cont-logo">
							<a href="./home.html">
								<img
									src="./images/logo-blanc.svg"
									alt="logo-blanc"
									id="logo-nav-d"
								/>
							</a>
						</div>
						<div class="cont-nav">
							<nav>
								<ul id="scrolled">
									<li class="magic-line magic-line1"></li>
									<li class="active-nav li-1">
										<a href="./home.php"><?php lang('à propos','About us'); ?></a>
									</li>

									<li class="li-2">
										<a href="./vehicules.php"
											>véhicules disponibles</a
										>
									</li>
									<li class="li-3">
										<a href="./customer.html"
											>nos clients</a
										>
									</li>
									<li class="li-4">
										<a href="./career.html">carrières</a>
									</li>

									<li class="last-li-d li-5">
										<a href="./contact.html"
											><div>
												<img
													src="./images/contact.svg"
													alt="contact"
												/>

												contact
											</div>
										</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</nav>
			</header>
			<?php lang("<a class=\"lnk<?= ($lang == 'en')? ' active' : ''; ?> en\" href=\"?lang=en\"><div class='lang-switch'>EN</div></a>","<a class=\"lnk<?= ($lang == 'fr')? ' active' : ''; ?> en\" href=\"?lang=fr\"><div class='lang-switch'>FR</div></a>"); ?>
			<div class="hero">
				<div class="hero-d">
					<div class="frame-d">
						<h1>
							Choisir Simpli-Cité, c’est choisir la tranquillité
							d’esprit.
						</h1>
						<a
							href="tel:4509071596"
							class="home-call btn-color btn-l-r"
							>Appelez-nous</a
						>
					</div>
					<span class="home-scroll-down"></span>
				</div>
			</div>
		</div>
        
    

