<section class="col-8 my-3">
    <article class="card shadow-sm">
        <img src="<?php echo $img; ?>" class="card-img-top" alt="">
        <section class="card-body">
            <h4 class="card-title text-center"><a href="<?php echo view("product-detail.php?id={$id}"); ?>" target="_steamfa_product"><?php echo $name; ?></a></h4>
            <p class="card-text">بازی : دوتا 2</p>
            <p class="card-text">هیرو : <?php echo $hero_id; ?></p>
            <p class="card-text">سطح نادر بودن : <?php echo $rarity; ?></p>
            <p class="card-text">کیفیت : <?php echo $quality; ?></p>
        </section>
        <section class="card-footer">
            <?php // if admin ?>
            <a href="" class="mx-1 btn btn-outline-danger ">حذف</a>
            <a href="<?php echo account("edit-item.php?id={$id}"); ?>" class="mx-1 btn btn-outline-warning">ویرایش</a>
            <?php // if user ?>
            <!--a href="" class="btn btn-primary">افزودن به سبد خرید</a-->
        </section>
    </article>
</section>