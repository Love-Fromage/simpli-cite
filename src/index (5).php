<?php
include("./header2.php");
?>
<!DOCTYPE html>
<html lang="<?= $lang; ?>">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="shortcut icon" href="./images/270.286528372.ico" />
		<title>Tunnelw</title>

		<link rel="stylesheet" href="./css/normalize.css" />
		<link rel="stylesheet" href="./css/main.css" />

		<script
			src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
			integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
			crossorigin="anonymous"
			referrerpolicy="no-referrer"
		></script>
		<!-- <script src="js/script.js" defer></script> -->
	</head>
	<body>
    <!-- <a class="lnk<?= ($lang == 'fr')? ' active' : ''; ?> fr" href="?lang=fr">FR</a>/ -->
    <!-- <a class="lnk<?= ($lang == 'en')? ' active' : ''; ?> en" href="?lang=en">EN</a> -->
	<?php lang("<a class=\"lnk<?= ($lang == 'en')? ' active' : ''; ?> en\" href=\"?lang=en\"><div class='lang-switch2'>EN</div></a>","<a class=\"lnk<?= ($lang == 'fr')? ' active' : ''; ?> en\" href=\"?lang=fr\"><div class='lang-switch2'>FR</div></a>"); ?>
		<div class="gros-background">
			<div class="bg-noir">
				<div class="cont-logo">
					<img src="./images/logo-blanc.svg" alt="logo-blanc" />
				</div>
				<div class="cont-droit-d">
					<h1><?php lang('Location de véhicules à moyens termes','anglais'); ?></h1>
					<span class="ligne"></span>
					<a href="./home.php<?php lang('?lang=fr','?lang=en'); ?>" class="btn-color btn-l-r"><?php lang('Consulter','Consult'); ?></a>
					
					<h1><?php lang('Remarketing','Remarketing'); ?></h1>
					<span class="ligne"></span>
					<a href="./remarketing.php<?php lang('?lang=fr','?lang=en'); ?>" class="btn-color btn-l-r2"><?php lang('Consulter','Consult'); ?></a>
				</div>
			</div>
		</div>
	</body>
</html>

