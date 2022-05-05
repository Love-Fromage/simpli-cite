<?php
include("./header.php");
?>
<div class="carr-hero"></div>
		<div class="carr-cont-title">
			<span></span>
			<h1>Rejoignez-nous</h1>
		</div>

		<section class="carr-info-cpt">
			<div class="carr-petite-boite-grise">
				<h1>
					nous <span>recherchons</span> <br />
					constamment de <br />
					nouveaux talents !
				</h1>
				<div class="carr-cont-croix">
					<span class="horizontal"></span>
					<span class="vertical"></span>
				</div>
			</div>
			<div class="carr-actual-content">
				<div class="chapeau"></div>
				<img src="../images/madame-phone-d.webp" alt="madame-phone" />
				<div class="carr-cont-cpt">
					<div class="carr-cpt-bloc">
						<h4>Lorem ipsum H/F</h4>
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
						</p>
					</div>
					<span class="ligne-dotted"></span>
					<div class="carr-cpt-bloc">
						<h4>Lorem ipsum H/F</h4>
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
						</p>
					</div>
				</div>
			</div>
		</section>
		<section class="formulaire">
			<div class="carr-para-form">
				<p>
					L’équipe de Simpli-Cité est toujours à la recherche de
					nouveaux talents. Nous sommes fiers de savoir recruter des
					gens d’exceptions issus de tous les milieux et de différents
					champs de compétence. Envoyez-nous votre C.V. si vous voulez
					faire partie d’une équipe dynamique et atteindre votre plein
					potentiel.
				</p>
				<p>
					Chez Simpli-Cité nous offrons beaucoup d’avantages aux
					membres de notre équipe. En plus de d’offrir l’accès à un
					programme d’assurance collective, nous offrons l’accès à une
					salle d’entraînement et les services d’un entraîneur
					personnel pour vous aider à atteindre vos objectifs santé.
					Vous pourrez également profiter des services de notre chef
					cuisinier pour vos dîners.
				</p>
				<p>
					Nous savons également que dans la vie il n’y a pas que le
					travail qui compte et c’est pourquoi nous organisons souvent
					des activités telles que des 5 à 7, BBQ, activités de groupe
					et party pour les fêtes saisonnières. Une équipe soudé est
					le secret du succès.
				</p>
			</div>
			<div class="carr-cont-form">
				<form action="">
					<label for="name">Nom et prénom *</label>
					<input type="text" name="name" id="name" required />

					<label for="email">courriel *</label>
					<input type="email" name="email" id="email" required />
					<label for="phone">numéro de téléphone *</label>
					<input type="tel" name="phone" id="phone" required />
					<label for="message">MESSAGE</label>
					<textarea name="message" id="message"></textarea>
					<div class="carr-cont-last-bit">
						<div class="carr-last-bit">
							<div class="carr-last-bit-t">
								<p>
									Veuillez joindre votre CV et lettre de
									présentation
								</p>
								<label for="file" class="file-label"
									><input
										name="file"
										type="file"
										id="file"
										accept=".pdf, .docx, .txt"
									/>AJOUTER
								</label>
							</div>

							<button
								type="submit"
								value="ENVOYER"
								class="carr-send-btn btn-color btn-l-r"
							>
								ENVOYER
							</button>
						</div>
					</div>
				</form>
			</div>
		</section>
        <?php
        include("./footer.php");
        ?>