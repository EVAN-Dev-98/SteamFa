<?php
if ($attr_name == "attr_dota2"){
    ?>
    <section class="col-lg-3 col-md-4 col-sm-6 my-3">
        <article class="card shadow-sm p-card">
            <a href="<?php echo view("product-detail.php?id={$id}"); ?>" class="p-img" style="background-image: url(<?php echo $img; ?>)"></a>
            <section class="card-body">
                <h4 class="card-title text-center"><a href="<?php echo view("product-detail.php?id={$id}"); ?>" target="_steamfa_product"><?php echo $name; ?></a></h4>
                <p class="card-text">بازی : دوتا 2</p>
                <section class="p-price mb-2">
                    <p>قیمت :<span class="p-price-n mx-2">12500</span>تومان</p>
                </section>
                <a href="#" class="btn btn-outline-primary">افزودن به سبد خرید</a>
            </section>
            <?php if ( Authentication::check() ) { ?>
                <?php if ( $owner_id == Authentication::uid() ) { ?>
                    <section class="card-footer">
                        <?php if (Authorization::check("ItemDelete")) { ?>
                            <a href="#" class="btn btn-outline-danger mx-2">حذف</a>
                        <?php } ?>
                        <?php if (Authorization::check("ItemEdit")) { ?>
                            <a href="#" class="btn btn-outline-warning mx-2">ویرایش</a>
                        <?php } ?>
                    </section>
                <?php }
                elseif (Authorization::check("ItemDeleteOther") || Authorization::check("ItemEditOther")) { ?>
                    <section class="card-footer">
                        <?php
                        if (Authorization::check("ItemDeleteOther")){ ?>
                            <a href="#" class="btn btn-outline-danger mx-2">حذف</a>
                        <?php }
                        if (Authorization::check("ItemEditOther")){ ?>
                            <a href="#" class="btn btn-outline-warning mx-2">ویرایش</a>
                        <?php } ?>
                    </section>
                <?php } } ?>
        </article>
    </section>
<?php
}
if ($attr_name == "attr_csgo"){
    ?>
    <section class="col-lg-3 col-md-4 col-sm-6 my-3">
        <article class="card shadow-sm p-card">
            <a href="<?php echo view("product-detail.php?id={$id}"); ?>" class="p-img" style="background-image: url(<?php echo $img; ?>)"></a>
            <section class="card-body">
                <h4 class="card-title text-center"><a href="<?php echo view("product-detail.php?id={$id}"); ?>" target="_steamfa_product"><?php echo $name; ?></a></h4>
                <p class="card-text">بازی : کانتر</p>
                <section class="p-price mb-2">
                    <p>قیمت :<span class="p-price-n mx-2">12500</span>تومان</p>
                </section>
                <a href="#" class="btn btn-outline-primary">افزودن به سبد خرید</a>
            </section>
            <?php if ( Authentication::check() ) { ?>
                <?php if ( $owner_id == Authentication::uid() ) { ?>
                    <section class="card-footer">
                        <?php if (Authorization::check("ItemDelete")) { ?>
                            <a href="#" class="btn btn-outline-danger mx-2">حذف</a>
                        <?php } ?>
                        <?php if (Authorization::check("ItemEdit")) { ?>
                            <a href="#" class="btn btn-outline-warning mx-2">ویرایش</a>
                        <?php } ?>
                    </section>
                <?php }
                elseif (Authorization::check("ItemDeleteOther") || Authorization::check("ItemEditOther")) { ?>
                        <section class="card-footer">
                            <?php
                                if (Authorization::check("ItemDeleteOther")){ ?>
                                    <a href="#" class="btn btn-outline-danger mx-2">حذف</a>
                                <?php }
                                if (Authorization::check("ItemEditOther")){ ?>
                                    <a href="#" class="btn btn-outline-warning mx-2">ویرایش</a>
                                <?php } ?>
                        </section>
                <?php } } ?>
        </article>
    </section>
<?php
}
?>