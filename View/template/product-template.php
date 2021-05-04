<section class="col-3 my-3">
<article class="card shadow-sm">
    <img src="<?php echo $row['img'] ?>" class="card-img-top">
    <section class="card-body">
        <h4 class="card-title text-center"><a href=""><?php echo $row['name'] ?></a></h4>
        <p class="card-text">بازی : <?php echo $row['game'] ?></p>
        <p class="card-text">نوع : <?php echo $row['type'] ?></p>
        <p class="card-text">کیفیت : <?php echo $row['quality'] ?></p>
        <p class="card-text">تعداد : <?php echo $row['number'] ?></p>
    </section>
    <section class="card-footer">
        <?php // if admin ?>
        <a href="" class="mx-1 btn btn-outline-danger ">حذف</a>
        <a href="<?php echo account("edit-product.php?id={$row['ID']}"); ?>" class="mx-1 btn btn-outline-warning">ویرایش</a>
        <?php // if user ?>
        <!--a href="" class="btn btn-primary">افزودن به سبد خرید</a-->
    </section>
</article>
</section>