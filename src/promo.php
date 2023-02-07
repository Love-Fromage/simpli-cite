<?php
include('header.php');
?>
<link rel="stylesheet" href="">
<div class="promoChapeau"></div>
<div class="promoHero"></div>
<div class="promo-cont-title">
    <span></span>
    <h1><?php lang('Promotions', 'Promotions'); ?></h1>
</div>
<script defer>
    document.addEventListener('DOMContentLoaded', () => {

        const img1 = document.getElementById('img1');
        const img2 = document.getElementById('img2');
        const img3 = document.getElementById('img3');
        let screen = window.outerWidth;

        if (screen < 767) {
            console.log('mobile');
            if (window.location.search === "?lang=en") {

                img1.src = "./images/promo-en-1.jpg";
                img2.src = "./images/promo-en-2.jpg";
                img3.src = "./images/promo-en-3.jpg";
            } else {
                img1.src = "./images/promo-m-1.png";
                img2.src = "./images/promo-m-2.png";
                img3.src = "./images/promo-m-3.png";

            }
        } else if (screen >= 768) {
            console.log('tablette at', screen);

            if (window.location.search === "?lang=en") {

                img1.src = "./images/promo-en-1.jpg";
                img2.src = "./images/promo-en-2.jpg";
                img3.src = "./images/promo-en-3.jpg";
            } else {
                img1.src = "./images/promo-tab-1.png";
                img2.src = "./images/promo-tab-2.png";
                img3.src = "./images/promo-tab-3.png";

            }
            // img1.src = "./images/promo-tab-1.png";
            // img2.src = "./images/promo-tab-2.png";
            // img3.src = "./images/promo-tab-3.png";
        }
    });
</script>
<div class="Promoswiper swiper">

    <div class="swiper-wrapper">
        <div class="swiper-slide"><img id="img1" src="" alt=""></div>
        <div class="swiper-slide"><img id="img2" src="" alt=""></div>
        <div class="swiper-slide"><img id="img3" src="" alt=""></div>
    </div>
</div>
</div>
<section class="veh-carousel">
    <div class="cont-nav-carou cont-nav-carou2">
        <img src="./images/fleche-carou.svg" alt="prev" class="" id="prev" />
        <img src="./images/fleche-carou.svg" alt="next" class="" id="next" />
    </div>

</section>
<section class="promo-mobile">

    <section class="promoContact">
        <p><?php lang("pour toute ", "for any "); ?><span>question</span> <?php lang("ou", "or"); ?> <br><span><?php lang("renseignement", "information"); ?></span> : </p>


    </section>
    <a href="tel:4509071596" class="promoNumber">(450) 907-1596</a>
</section>
<section class="promo-desk">
    <!-- <div class="promoContact">
        <p>pour toute <span>question</span> ou <span>renseignement</span> : </p>
    </div>
    <a href="tel:4509071596" class="promoNumber veh-btn-contact btn-color btn-l-r">(450) 907-1596</a> -->
    <section class="veh-extra">
        <div class="veh-cont-gris">
            <h3>
                <?php lang('pour toute <span>question</span> ou
					<span>renseignement</span>', 'For any <span>question</span> or <span>information</span>'); ?> :
            </h3>
            <span class="veh-sep"></span>
        </div>
        <div class="veh-btn-contact btn-color btn-l-r">
            <a href="tel:4509071596" class="veh-btn-contact">(450) 907-1596</a>
        </div>
    </section>
</section>



<script defer>
    const swiper4 = new Swiper('.Promoswiper', {
        navigation: {
            nextEl: '#next',
            prevEl: '#prev',
        }
    });
</script>
<?php
include('footer.php');
?>