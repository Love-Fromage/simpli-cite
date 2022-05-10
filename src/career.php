<?php
include("./header.php");


function test_input($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if (substr($_SERVER['REQUEST_URI'], strpos($_SERVER['REQUEST_URI'], '&') + 1) === 'success=true') {
	// error_log('yes');
	$mailEnvoyer = "<div class='mail-sent' style='margin: auto;'>
<p style='color:black; margin-inline: auto; font-size: 1.5rem; text-transform: uppercase;'>";
} else {
	// error_log(substr($_SERVER['REQUEST_URI'], strpos($_SERVER['REQUEST_URI'], '&') + 1));
}
// $val = strval('&');
// $mailing = "./mailer.php?form=career" . $val . "";
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$name = $message = $phone = $visitor_email = "";
$phoneError = $nameError = $formError = $emailError = "";
if (empty($_POST['name'])) {
	$nameError = 'Ce champ est requis';
} else {
	$name = trim(htmlspecialchars($_POST['name']));
}


if (empty($_POST['email'])) {
	$emailError = 'Ce champ est requis';
} else {
	//$visitor_email = trim(htmlspecialchars($_POST['email']));
	$visitor_email = test_input($_POST["email"]);
	if (!filter_var($visitor_email, FILTER_VALIDATE_EMAIL)) {
		$emailErr = "Invalid email format";
	}
}



if (empty($_POST['phone'])) {
	$phoneError = "Ce champ est requis";
} else {
	$phone = $_POST['phone'];
}

if (empty($_POST['message'])) {

	$message = "";
} else {

	$message = $_POST['message'];
}

if (empty($visitor_email) || empty($name) || empty($phone)) {
	$formError = "Veuillez remplir les champs requis.";
} else {
	// ./mailer.php?form=career&lang=fr


	// include("./mailer.php?form=career&lang=fr");
	$mailEnvoyer = "<div class='mail-sent' style='margin: auto; margin-top: 5vh; position:absolute'>
<p style='color:white; margin: auto; font-size: 1.5rem; text-transform: uppercase;'>Merci de nous avoir contactés.</p>
</div>";
}
// }
?>
<div class="carr-hero"></div>
<?php if (isset($mailEnvoyer)) : ?>
	<div id="cont-confirm">
		<?php echo $mailEnvoyer; ?>
		<?php lang('Merci de nous avoir contactés.', 'Thank you for contacting us.'); ?>
		</p>
	</div>
<?php endif ?>
</div>
<div class="carr-cont-title">
	<span></span>
	<h1><?php lang("Rejoignez-nous", "Join us"); ?></h1>
</div>

<section class="carr-info-cpt">
	<div class="carr-petite-boite-grise">
		<h1>
			<?php lang("nous <span>recherchons</span> <br />
					constamment de <br />
					nouveaux talents !", "We are always <br /> on the <span>lookout</span> <br /> for new talent."); ?>
		</h1>
		<div class="carr-cont-croix">
			<span class="horizontal"></span>
			<span class="vertical"></span>
		</div>
	</div>
	<div class="carr-actual-content">
		<div class="chapeau"></div>
		<img src="./images/madame-phone-d.webp" alt="madame-phone" />
		<div class="carr-cont-cpt">
			<div class="carr-cpt-bloc">

				<!-- <h4>Lorem ipsum H/F</h4> -->
				<!-- <p>
					Lorem ipsum dolor sit amet, consectetur adipiscing
					elit, sed do eiusmod tempor incididunt ut labore et
					dolore magna aliqua. Ut enim ad minim veniam, quis
					nostrud exercitation ullamco laboris nisi ut aliquip
					ex ea commodo consequat. Duis aute irure dolor in
					reprehenderit in voluptate velit esse cillum dolore
					eu fugiat nulla pariatur. Excepteur sint occaecat
					cupidatat non proident, sunt in culpa qui officia
					deserunt mollit anim id est laborum.
				</p> -->
			</div>
			<!-- <span class="ligne-dotted"></span> -->
			<div class="carr-cpt-bloc">
				<!-- <h4>Lorem ipsum H/F</h4>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing
					elit, sed do eiusmod tempor incididunt ut labore et
					dolore magna aliqua. Ut enim ad minim veniam, quis
					nostrud exercitation ullamco laboris nisi ut aliquip
					ex ea commodo consequat. Duis aute irure dolor in
					reprehenderit in voluptate velit esse cillum dolore
					eu fugiat nulla pariatur. Excepteur sint occaecat
					cupidatat non proident, sunt in culpa qui officia
					deserunt mollit anim id est laborum.
				</p> -->
			</div>
		</div>
	</div>
</section>
<section class="formulaire">
	<div class="carr-para-form">
		<p>
			<?php lang("L’équipe de Simpli-Cité est toujours à la recherche de
					nouveaux talents. Nous sommes fiers de savoir recruter des
					gens d’exceptions issus de tous les milieux et de différents
					champs de compétence. Envoyez-nous votre C.V. si vous voulez
					faire partie d’une équipe dynamique et atteindre votre plein
					potentiel.", "We are proud to be able to recruit exceptional people from all walks of life and from different fields of expertise.
					Send us your resume if you want to be part of a dynamic team and reach your full potential
					"); ?>
		</p>
		<p>
			<?php lang("Chez Simpli-Cité nous offrons beaucoup d’avantages aux
					membres de notre équipe. En plus de d’offrir l’accès à un
					programme d’assurance collective, nous offrons l’accès à une
					salle d’entraînement et les services d’un entraîneur
					personnel pour vous aider à atteindre vos objectifs santé.
					Vous pourrez également profiter des services de notre chef
					cuisinier pour vos dîners.", "At Simpli-Cité, we offer many benefits to our team members. 
					In addition to offering access to a group insurance program, we offer access to a training room and the services of a personal trainer to help you achieve your health and fitness goals. 
					You can also take advantage of the services of our chef for your dinners.
					"); ?>
		</p>
		<p>
			<?php lang("Nous savons également que dans la vie il n’y a pas que le
					travail qui compte et c’est pourquoi nous organisons souvent
					des activités telles que des 5 à 7, BBQ, activités de groupe
					et party pour les fêtes saisonnières. Une équipe soudé est
					le secret du succès.", "We know that in life it is not only work that counts! That is why we often organize activities such as 5 to 7, BBQ, group activities, and parties for seasonal holidays.

					A close-knit team is the secret to our success.
					"); ?>
		</p>
	</div>
	<div class="carr-cont-form">
		<form id="form1" action="./mailer.php?form=career<?php lang('&lang=fr', '&lang=en'); ?>" method="POST" enctype="multipart/form-data">
			<label for="name"><?php lang("Nom et prénom", "First and last name"); ?> *</label>
			<input type="text" name="name" id="name" required />

			<label for="email"><?php lang("courriel", "e-mail"); ?> *</label>
			<input type="email" name="email" id="email" required />
			<label for="phone"><?php lang("numéro de téléphone", "phone number"); ?> *</label>
			<input type="tel" name="phone" id="phone" required />
			<label for="message">MESSAGE</label>
			<textarea name="message" id="message"></textarea>
			<div class="carr-cont-last-bit">
				<div class="carr-last-bit">
					<div class="carr-last-bit-t">
						<div style="position: relative;">
							<p>
								<?php lang("Veuillez joindre votre CV", "Please attach your resume"); ?>
							</p>
							<div id="fichier1" style="
							position:absolute;
							top:25px;
							left:0%;"></div>
							<label for="file" class="file-label"><input name="file-upload-cv" type="file" id="file" accept=".pdf, .docx, .txt"><?php lang("AJOUTER", "ADD"); ?>
							</label>
						</div>
						<div style="position: relative;">
							<p>
								<?php lang("Veuillez joindre votre lettre de
									présentation", "Please attach your presentation letter"); ?>
							</p>
							<div id="fichier2" style="
							position:absolute;
							top:25px;
							left:0%;"></div>
							<label for="file2" class="file-label"><input name="file-upload-letter" type="file" id="file2" accept=".pdf, .docx, .txt"><?php lang("AJOUTER", "ADD"); ?>
							</label>
						</div>
					</div>

					<button id="submit1" type="submit" value="ENVOYER" class="carr-send-btn btn-color btn-l-r">
						<?php lang("ENVOYER", "SEND"); ?>
					</button>

				</div>
			</div>
		</form>
	</div>
</section>

<?php
include("./footer.php");
?>