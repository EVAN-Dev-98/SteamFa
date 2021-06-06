<?php $category = strtolower($category);
?>
<a href="#" class="hero-img" style="background-image: url(<?php echo $img; ?>)">
    <section class="hero-name">
        <img src="<?php echo assets("images/hero_{$category}.png"); ?>" alt="hero_category">
        <p><?php echo $name; ?></p>
    </section>
</a>