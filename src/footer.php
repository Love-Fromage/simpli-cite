<footer>
	<div class="cont-scroll" onclick="gotoTop()">
		<span onclick="gotoTop()"></span>
		<p id="scroll-btn" onclick="gotoTop()"><?php lang('RETOUR', 'RETURN'); ?></p>
	</div>
	<div class="rm-cont-mobile">
		<h2><?php lang('Contactez-nous', 'Contact-us'); ?></h2>
		<ul>
			<li>
				<img src="./images/location.svg" alt="location-icon" />
				<p>
					1410 Boul. Taschereau, <br />
					La Prairie, QC J5R 4E8
				</p>
			</li>
			<li>
				<img src="./images/phone.svg" alt="phone-icon" />
				<p><a href="tel:4509071596">(450) 907-1596</a></p>
			</li>
			<li>
				<img src="./images/email.svg" alt="email-icon" />
				<p>info@simplicitelocation.com</p>
			</li>
		</ul>
		<div class="hour">
			<h2><?php lang("Heures d'ouverture", "Opening hours"); ?></h2>
			<p><?php lang('Lundi/ Vendredi', 'Monday/ Friday'); ?> : 9am - 5pm</p>
		</div>
		<div class="cont-footer-line">
			<span class="footer-line-rm"></span>
			<a href="./remarketing.php<?php lang('?lang=fr', '?lang=en'); ?>">REMARKETING</a>
		</div>
		<div class="cont-linkedin">
			<a href="https://www.linkedin.com/company/simplicityfleet/"><img src="./images/linkedin.svg" alt="linkedin-icon" /></a>
			<span></span>
		</div>
	</div>
	<div class="cont-flex-t">
		<div class="col-1">
			<h2><?php lang('Contactez-nous', 'Contact-us'); ?></h2>
			<ul>
				<li>
					<img src="./images/location.svg" alt="location-icon" />
					<p>
						1410 Boul. Taschereau, <br />
						La Prairie, QC J5R 4E8
					</p>
				</li>
				<li>
					<img src="./images/phone.svg" alt="phone-icon" />
					<p><a href="tel:4509071596">(450) 907-1596</a></p>
				</li>
				<li>
					<img src="./images/email.svg" alt="email-icon" />
					<p>info@simplicitelocation.com</p>
				</li>
			</ul>
		</div>
		<div class="col-2">
			<div class="hour">
				<h2><?php lang("Heures d'ouverture", "Opening hours"); ?></h2>
				<p><?php lang('Lundi/ Vendredi', 'Monday/ Friday'); ?> : 9am - 5pm</p>
			</div>
			<div class="cont-footer-line">
				<span class="footer-line-rm"></span>
				<a href="./remarketing.php<?php lang('?lang=fr', '?lang=en') ?>">REMARKETING</a>
			</div>
			<div class="cont-linkedin">
				<a href="https://www.linkedin.com/company/simplicityfleet/"><img src="./images/linkedin.svg" alt="linkedin-icon" /></a>
			</div>
		</div>
	</div>
	<span class="separator"></span>

	<div class="cont-petit-lien">
		<div class="flex-t">
			<div class="row-1">
				<div>
					<a href="#"><?php lang('Mentions légales', 'Legal mentions'); ?></a><span>&nbsp | &nbsp </span>
					<a href="#"><?php lang('Politique de confidentialité', 'Privacy policy'); ?></a>
					<span>&nbsp | &nbsp</span>
				</div>

				<p>
					@2022 - Simpli-Cité Location - <?php lang('Tous droits réservés', 'All rights reserved'); ?>
				</p>
			</div>
			<div class="row-2">
				<p class="bda">
					<?php lang('Site réalisé par', 'Website made by'); ?>
					<a href="https://blackduckagency.com">Black Duck Agency</a>
				</p>
			</div>
		</div>
		<div class="flex-mobile">
			<img src="./images/simplicite-logo.svg" alt="logo-footer" onclick="gotoTop()" />
			<div>
				<a href="#"><?php lang('Mentions légales', 'Legal mentions'); ?></a> <span>|</span>
				<a href="#"><?php lang('Politique de confidentialité', 'Privacy policy'); ?></a>
			</div>

			<p>@2022 - Simpli-Cité Location - <?php lang('Tous droits réservés', 'All rights reserved'); ?></p>
			<p class="bda">
				<?php lang('Site réalisé par', 'Website made by'); ?>
				<a href="https://blackduckagency.com">Black Duck Agency</a>
			</p>
		</div>
		<img src="./images/simplicite-logo.svg" alt="logo-footer" onclick="gotoTop()" class="tablette" />
	</div>
</footer>
<script>
	const gotoTop = () => {
		window.scrollTo({
			top: 0,
			left: 0,
			behavior: "smooth",
		});
	};
</script>
<?php if ($vehicules) : ?>
	<!-- Swiper JS -->
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

	<!-- Initialize Swiper -->
	<script>
		let prev = document.getElementById("prev");
		let next = document.getElementById("next");
		var swiper = new Swiper(".swiper", {
			spaceBetween: 10,
			navigation: {
				nextEl: "#next",
				prevEl: "#prev",
			},
			breakpoints: {
				320: {
					slidesPerView: 1,
					spaceBetween: 25,
				},
				768: {
					slidesPerView: 2,
					spaceBetween: 25,
				},
				1280: {
					slidesPerView: 3,
					spaceBetween: 25,
				},
			},
			on: {
				reachBeginning: () => {
					prev.classList.add("f-s");
				},
				reachEnd: () => {
					next.classList.add("f-s");
				},
				slideChange: () => {
					if (swiper.activeIndex > 0) {
						prev.classList.remove("f-s");
					}
					if (swiper.activeIndex <= 2) {
						next.classList.remove("f-s");
					}
				},
			},
		});
	</script>
<?php endif ?>
<?php if ($customer) : ?>
	<!-- Swiper JS -->
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

	<!-- Initialize Swiper -->
	<script>
		// let prev = document.getElementById("prev");
		// let next = document.getElementById("next");
		var swiper = new Swiper(".swiper", {
			spaceBetween: 10,
			loop: true,
			navigation: {
				nextEl: "#next",
				prevEl: "#prev",
			},
			breakpoints: {
				320: {
					slidesPerView: 1,
					spaceBetween: 25,
				},
				1280: {
					slidesPerView: 3,
					spaceBetween: 25,
				},
			},
		});
		var swiper = new Swiper(".swiper2", {
			spaceBetween: 10,
			loop: true,
			navigation: {
				nextEl: "#next",
				prevEl: "#prev",
			},
			breakpoints: {
				320: {
					slidesPerView: 1,
					spaceBetween: 25,
				},
			},
		});
	</script>
<?php endif ?>
<?php if ($contact) : ?><script defer>
		if (window.innerWidth <= 767) {
			console.log("on est sur moobile");
			document.querySelector(".last-li").classList.add("activePage");
		}
	</script><?php endif; ?>
</body>