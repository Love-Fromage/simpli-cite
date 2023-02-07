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
            img1.src = "./images/promo-m-1.png";
            img2.src = "./images/promo-m-2.png";
            img3.src = "./images/promo-m-3.png";
        } else if (screen >= 768) {
            console.log('tablette at', screen);
            img1.src = "./images/promo-tab-1.png";
            img2.src = "./images/promo-tab-2.png";
            img3.src = "./images/promo-tab-3.png";
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
<section class="promoContact">
    <p>pour toute <span>question</span> ou <br><span>renseignement</span> : </p>


</section>
<a href="tel:4509071596" class="promoNumber">(450) 907-1596</a>



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