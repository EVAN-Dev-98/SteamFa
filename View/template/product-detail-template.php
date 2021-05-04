<section class="col my-3">
<article class="card shadow-sm">
    <h2 class="card-header card-title">نام آیتم : <?php echo $name; ?></h2>
    <section class="card-body">
        <img src="<?php echo $img; ?>" class="card-img-top mb-3">
        <p class="card-text">بازی : <?php echo $game; ?></p>
        <p class="card-text">نوع : <?php echo $type; ?></p>
        <p class="card-text">کیفیت : <?php echo $quality; ?></p>
        <p class="card-text">تعداد : <?php echo $number; ?></p>
    </section>
    <section class="card-footer">
        <?php // if admin ?>
        <a href="" class="mx-1 btn btn-outline-danger ">حذف</a>
        <a href="<?php echo account("edit-product.php?id={$ID}"); ?>" class="mx-1 btn btn-outline-warning">ویرایش</a>
        <?php // if user ?>
        <!--a href="" class="btn btn-primary">افزودن به سبد خرید</a-->
    </section>
</article>
</section>