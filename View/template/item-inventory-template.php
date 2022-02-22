<?php
$game = 'کانتر';
$price_usd = $price / 100;
$price_irt = $price_usd * 26000;
?>
<section class="col-lg-3 col-md-4 col-sm-6 my-3">
    <article class="card shadow-sm p-card">
        <a href="" class="p-img"></a>
        <section class="card-body">
            <h4 class="card-title text-center"><a href="" target="_steamfa_product"><?php echo $name; ?></a></h4>
            <p class="card-text">بازی : <?php echo $game; ?></p>
            <p class="card-text">نوع آیتم : <?php echo $type; ?></p>
            <section class="p-price mb-2">
                <p>قیمت :<span class="p-price-n mx-2"><?php echo $price_irt; ?></span>تومان</p>
                <p>قیمت :<span class="p-price-n mx-2"><?php echo $price_usd; ?></span>دلار</p>
            </section>
            <a href="#" class="btn btn-outline-primary">افزودن به سبد خرید</a>
    </article>
</section>