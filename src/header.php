<?php
include("./header2.php");

?>
<!DOCTYPE html>
<html lang="<?= $lang ?>">

<head>
	<link rel="shortcut icon" href="./images/270.286528372.ico" />
	<title><?php
			if ($vehicules) {

				lang('Véhicules', 'Vehicules');
			}
			if ($customer) {
				lang('Nos Clients', 'Our customers');
			}
			if ($career) {
				lang('Carrières', 'Careers');
			}
			if ($contact) {
				lang('Contact', 'Contact');
			}
			?></title>
	<link rel="stylesheet" href="css/normalize.css" />
	<link rel="stylesheet" href="css/main.css" />
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
	<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
	<script src="js/script.js" defer></script>
	<script src="js/carousel.js" defer></script>

</head>

<body>
	<div class="cont-header">
		<header>
			<nav>
				<div class="nav-m blanc-nav">
					<a href="./home.php<?php lang('?lang=fr', '?lang=en'); ?>">
						<img src="./images/logo-noir.svg" alt="logo-noir" id="logo-nav-m" />
					</a>
					<div class="cont-ham">
						<span id="pain1" class="pain2"></span>
						<span id="pain2" class="pain2"></span>
					</div>
				</div>
				<div class="toggle-off" id="ham">
					<nav>
						<ul>
							<li>
								<a href="./home.php<?php lang('?lang=fr', '?lang=en') ?>"><?php lang('À propos', 'About us'); ?></a>
							</li>
							<li class="<?php if ($vehicules) : ?>activePage<?php endif; ?>">
								<a href="./vehicules.php<?php lang('?lang=fr', '?lang=en') ?>"><?php lang('Véhicules disponibles', 'Available vehicules'); ?></a>
							</li>
							<li class="<?php if ($customer) : ?> activePage<?php endif; ?>">
								<a href="./customer.php<?php lang('?lang=fr', '?lang=en') ?>"><?php lang('nos clients', 'our clients'); ?></a>
							</li>
							<li class="<?php if ($career) : ?> activePage<?php endif; ?>">
								<a href="./career.php<?php lang('?lang=fr', '?lang=en') ?>"><?php lang('carrières', 'careers'); ?></a>
							</li>
							<li class="last-li">
								<a href="./contact.php<?php lang('?lang=fr', '?lang=en') ?>">contact</a>
							</li>
						</ul>
					</nav>
					<!-- <a href="#" class="lang">EN</a> -->
					<?php lang("<a class=\"lnk<?= ($lang == 'en')? ' active' : ''; ?> en focus\" href=\"?lang=en\"><div class='lang'>EN</div></a>", "<a class=\"lnk<?= ($lang == 'fr')? ' active' : ''; ?> en\" href=\"?lang=fr\"><div class='lang'>FR</div></a>"); ?>
				</div>
				<div class="nav-d blanc-nav">
					<div class="cont-logo">
						<a href="./home.php<?php lang('?lang=fr', '?lang=en') ?>">
							<img src="./images/logo-noir-d.svg" alt="logo-blanc" id="logo-nav-d" />
						</a>
					</div>
					<div class="cont-nav">
						<nav>
							<ul id="scrolled" class="scrolled">
								<li class="magic-line <?php if ($vehicules) : ?>magic-line2 <?php endif ?>
                                    <?php if ($customer) : ?> magic-line3<?php endif ?>
                                    <?php if ($career) : ?> magic-line4 <?php endif; ?>"></li>
								<li class="<?php if ($home) : ?> active-nav<?php endif; ?> li-1">
									<a href="./home.php<?php lang('?lang=fr', '?lang=en'); ?>"><?php lang('à propos', 'about us'); ?></a>
								</li>

								<li class="<?php if ($vehicules) : ?> active-nav<?php endif; ?> li-2">
									<a href="./vehicules.php<?php lang('?lang=fr', '?lang=en'); ?>"><?php lang('véhicules disponibles', 'available vehicules'); ?></a>
								</li>
								<li class="<?php if ($customer) : ?> active-nav<?php endif; ?> li-3">
									<a href="./customer.php<?php lang('?lang=fr', '?lang=en'); ?>"><?php lang('nos clients', 'our clients'); ?></a>
								</li>
								<li class="<?php if ($career) : ?> active-nav<?php endif; ?> li-4">
									<a href="./career.php<?php lang('?lang=fr', '?lang=en'); ?>"><?php lang('carrières', 'careers'); ?></a>
								</li>
								<li class="last-li-d">
									<a href="./contact.php<?php lang('?lang=fr', '?lang=en'); ?>">
										<div>
											<img src="./images/contact.svg" alt="contact" />
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
		<?php lang("<a class=\"lnk<?= ($lang == 'en')? ' active' : ''; ?> en\" href=\"?lang=en\"><div class='lang-switch'>EN</div></a>", "<a class=\"lnk<?= ($lang == 'fr')? ' active' : ''; ?> en\" href=\"?lang=fr\"><div class='lang-switch'>FR</div></a>"); ?>
	</div>