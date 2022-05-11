<?php
include("./header.php");
?>
<div class="veh-hero"></div>
<section class="veh-carousel">
	<div class="cont-title">
		<span></span>
		<h1><?php lang('Nos véhicules', 'Our vehicules'); ?></h1>
	</div>

	<div class="swiper">
		<div class="swiper-wrapper">
			<div class="swiper-slide">
				<div class="cont-img">
					<img src="./images/dodge.webp" alt="dodge" class="veh-carou-img" />
				</div>
				<div class="carte-grise">
					<h4>DODGE</h4>
					<p><?php lang("VUS", "SUV"); ?></p>
				</div>
			</div>
			<div class="swiper-slide">
				<div class="cont-img">
					<img src="./images/chevrolet.webp" alt="chevrolet" class="veh-carou-img" />
				</div>
				<div class="carte-grise">
					<h4>chevrolet</h4>
					<p><?php lang("VUS, Pick-Up", "SUV, Pick-Up"); ?></p>
				</div>
			</div>
			<div class="swiper-slide">
				<div class="cont-img">
					<img src="./images/jeep.webp" alt="jeep" class="veh-carou-img" />
				</div>
				<div class="carte-grise">
					<h4>jeep</h4>
					<p><?php lang("VUS", "SUV"); ?></p>
				</div>
			</div>
			<div class="swiper-slide">
				<div class="cont-img">
					<img src="./images/ram.webp" alt="mercedes" class="veh-carou-img" />
				</div>
				<div class="carte-grise">
					<h4>ram</h4>
					<p><?php lang("Pick-Up, Fourgons Utilitaires", "Pick-Up, Commercials Trucks"); ?></p>
				</div>
			</div>
			<div class="swiper-slide">
				<div class="cont-img">
					<img src="./images/hyundai.webp" alt="hyundai" class="veh-carou-img" />
				</div>
				<div class="carte-grise">
					<h4>hyundai</h4>
					<p><?php lang("VUS, Compact, Berline", "SUV, Compact, Berline"); ?></p>
				</div>
			</div>
			<div class="swiper-slide">
				<div class="cont-img">
					<img src="./images/gmc.webp" alt="gmc" class="veh-carou-img" />
				</div>
				<div class="carte-grise">
					<h4>gmc</h4>
					<p><?php lang("VUS, Pick-up", "SUV, Pick-Up"); ?></p>
				</div>
			</div>
		</div>
	</div>
	<div class="cont-nav-carou">
		<img src="./images/fleche-carou.svg" alt="prev" class="f-s" id="prev" />
		<img src="./images/fleche-carou.svg" alt="next" id="next" />
	</div>
</section>
<section class="veh-extra">
	<div class="veh-cont-gris">
		<h3>
			<?php lang('pour toute <span>question</span> ou
					<span>renseignement</span>', 'For any <span>question</span> or <span>information</span>'); ?> :
		</h3>
		<span class="veh-sep"></span>
	</div>
	<div class="veh-btn-contact btn-color btn-l-r">
		<a href="tel:4509073411" class="veh-btn-contact"><?php lang('contactez-nous', 'contact us'); ?></a>
	</div>
</section>
<?php include("./footer.php");
