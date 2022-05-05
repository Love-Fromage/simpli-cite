<?php
include("./header2.php");
$vehicules = false;
$home = false;
$career = false;
$customer = false;
if($page2== "vehicules"){
    $vehicules = true;
    $home = false;
$career = false;
$customer = false;
}
if($page2== "home"){
    $home = true;
    $vehicules = false;
$career = false;
$customer = false;
}
if($page2== "customer"){
    $customer = true;
    $home = false;
$career = false;
$vehicules = false;
}
if($page2== "career"){
    $career = true;
    $home = false;
$vehicules = false;
$customer = false;
}
?>
<!DOCTYPE html>
<html lang="<?= $lang ?>">
	<head>
		<link rel="shortcut icon" href="./images/270.286528372.ico" />
		<title><?php lang('Véhicules','Vehicules'); ?></title>
		<link rel="stylesheet" href="css/normalize.css" />
		<link rel="stylesheet" href="css/main.css" />
		<link
			rel="stylesheet"
			href="https://unpkg.com/swiper/swiper-bundle.min.css"
		/>
		<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<script
			src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
			integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
			crossorigin="anonymous"
			referrerpolicy="no-referrer"
		></script>
		<script src="js/script.js" defer></script>
		<script src="js/carousel.js" defer></script>
	</head>
    <body>
		<header>
			<nav>
				<div class="nav-m blanc-nav">
					<img
						src="../images/logo-noir.svg"
						alt="logo-noir"
						id="logo-nav-m"
					/>
					<div class="cont-ham">
						<span id="pain1" class="pain2"></span>
						<span id="pain2" class="pain2"></span>
					</div>
				</div>
				<div class="toggle-off" id="ham">
					<nav>
						<ul>
							<li class="active-nav">
								<a href="./home.php<?php lang('?lang=fr','?lang=en') ?>"><?php lang('À propos','About us'); ?></a>
							</li>
							<li>
								<a href="./vehicules.php<?php lang('?lang=fr','?lang=en') ?>"
									><?php lang('Véhicules disponibles','Available vehicules'); ?></a
								>
							</li>
							<li>
								<a href="./customer.php">customer services</a>
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
				<div class="nav-d blanc-nav">
					<div class="cont-logo">
						<a href="./home.html">
							<img
								src="../images/logo-noir-d.svg"
								alt="logo-blanc"
								id="logo-nav-d"
							/>
						</a>
					</div>
					<div class="cont-nav">
						<nav>
							<ul id="scrolled" class="scrolled">
								<li class="magic-line magic-line2"></li>
								<li class="<?php if($home): ?> active-nav<?php endif; ?> li-1">
									<a href="./home.html">à propos</a>
								</li>

								<li class="<?php if($vehicules): ?> active-nav<?php endif; ?> li-2">
									<a href="./vehicules.html"
										>véhicules disponibles</a
									>
								</li>
								<li class="li-3">
									<a href="./customer.html">nos clients</a>
								</li>
								<li class="li-4">
									<a href="./career.html">carrières</a>
								</li>
								<li class="last-li-d">
									<a href="./contact.html"
										><div>
											<img
												src="../images/contact.svg"
												alt="contact"
											/>
											contact
										</div></a
									>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</nav>
		</header>