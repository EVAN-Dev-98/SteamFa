<section class="col-md-3 my-3">
    <article class="card shadow-sm">
        <img src="<?php echo $img; ?>" class="card-img-top" alt="hero-image">
        <section class="card-body">
            <h4 class="card-title text-center"><?php echo $name; ?></h4>
            <p class="card-text"><img src="<?php echo assets("images/hero_{$category}"); ?>" width="32" height="32" alt="hero_category"> <?php echo $category; ?></p>
        </section>
    </article>
</section>