<?php $category = strtolower($category); ?>
<section class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-6 my-2">
    <article class="card shadow-sm">
        <a href="" class="hero-card">
            <img src="<?php echo $img; ?>" class="card-img-top hero-img" alt="hero-image">
            <p class="card-text text-white hero-cat"><img src="<?php echo assets("images/hero_{$category}.png"); ?>" width="32" height="32" alt="hero_category"> <?php echo $category; ?></p>
            <h4 class="text-center fs-6 pt-2 hero-title"><?php echo $name; ?></h4>
        </a>
    </article>
</section>