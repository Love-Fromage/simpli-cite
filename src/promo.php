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
<div class="swiper">

    <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="./images/promo-m-1.png" alt="promo1"></div>
        <div class="swiper-slide"><img src="./images/promo-1.png" alt="promo2"></div>
        <div class="swiper-slide"><img src="./images/promo-1.png" alt="promo3"></div>
    </div>
</div>
</div>
<section class="veh-carousel">
    <div class="cont-nav-carou">
        <img src="./images/fleche-carou.svg" alt="prev" class="f-s" id="prev" />
        <img src="./images/fleche-carou.svg" alt="next" class="" id="next" />
    </div>

</section>



<script defer>
    const swiper4 = new Swiper('.swiper', {
        navigation: {
            nextEl: '#next',
            prevEl: '#prev',
        }
    });
</script>
<?php
include('footer.php');
?>