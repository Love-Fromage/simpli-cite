<?php
$page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'],'/') + 1);
$page = str_replace('.php', '', $page);

$lang = (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'en' : 'fr';
function lang($frn, $eng) {
    echo ($GLOBALS['lang'] == 'en') ?  $eng : $frn;
}
include("./header.php");
?>
<!DOCTYPE html>
<html lang="<?= $lang; ?>">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="shortcut icon" href="./images/270.286528372.ico" />
		<title>Tunnelw</title>

		<link rel="stylesheet" href="css/normalize.css" />
		<link rel="stylesheet" href="css/main.css" />

		<script
			src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
			integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
			crossorigin="anonymous"
			referrerpolicy="no-referrer"
		></script>
		<script src="js/script.js" defer></script>
	</head>
	<body>
    <a class="lnk<?= ($lang == 'fr')? ' active' : ''; ?> fr" href="?lang=fr">FR</a>/
    <a class="lnk<?= ($lang == 'en')? ' active' : ''; ?> en" href="?lang=en">EN</a>
		<div class="gros-background">
			<div class="bg-noir">
				<div class="cont-logo">
					<img src="./images/logo-blanc.svg" alt="logo-blanc" />
				</div>
				<div class="cont-droit-d">
					<h1><?php lang('Location de véhicules à moyens termes','anglais'); ?></h1>
					<span class="ligne"></span>
					<a href="./home.html">Consulter</a>
					<h1><?php echo $page2 ?></h1>
					<!-- <h1>Remarketing</h1> -->
					<span class="ligne"></span>
					<a href="./remarketing.html">Consulter</a>
				</div>
			</div>
		</div>
	</body>
</html>

