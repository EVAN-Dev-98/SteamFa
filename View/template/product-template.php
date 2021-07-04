<?php
switch ($attr_name){
    case "attr_dota2":
        $game = "دوتا 2";
        break;
    case "attr_csgo":
        $game = "کانتر";
        break;
    default:
        $game = "نعریف نشده!";
}
?>
<section class="col-lg-3 col-md-4 col-sm-6 my-3">
    <article class="card shadow-sm p-card">
        <a href="<?php echo view("product-detail.php?id={$id}"); ?>" class="p-img" style="background-image: url(<?php echo $img; ?>)"></a>
        <section class="card-body">
            <h4 class="card-title text-center"><a href="<?php echo view("product-detail.php?id={$id}"); ?>" target="_steamfa_product"><?php echo $name; ?></a></h4>
            <p class="card-text">بازی : <?php echo $game; ?></p>
            <section class="p-price mb-2">
                <p>قیمت :<span class="p-price-n mx-2">Automatic</span>تومان</p>
            </section>
            <a href="#" class="btn btn-outline-primary">افزودن به سبد خرید</a>
            <section class="d-flex mt-3">
                <?php
                if (Authentication::check()){
                    $user_id = Authentication::uid();
                    $like_table = Product_Like::find("user_id = {$user_id} AND product_id = {$id}");
                    $bookmark_table = Product_Bookmark::find("user_id = {$user_id} AND product_id = {$id}");
                }
                if ( isset($like_table[0]) ){ ?>
                    <a href="<?php echo controller("do-product-like.php?id={$id}"); ?>" class="fas fa-heart btn-lg me-auto icon liked"></a>
                <?php }
                else { ?>
                    <a href="<?php echo controller("do-product-like.php?id={$id}"); ?>" class="far fa-heart btn-lg me-auto icon like"></a>
                <?php }
                if ( isset($bookmark_table[0]) ){ ?>
                <a href="<?php echo controller("do-product-bookmark.php?id={$id}"); ?>" class="fas fa-bookmark btn-lg icon bookmarked"></a>
                <?php }
                else { ?>
                <a href="<?php echo controller("do-product-bookmark.php?id={$id}"); ?>" class="fal fa-bookmark btn-lg icon bookmark"></a>
                <?php } ?>
            </section>
        </section>
        <?php if ( Authentication::check() ) { ?>
            <?php if ( $owner_id == Authentication::uid() ) { ?>
                <section class="card-footer">
                    <?php if (Authorization::check("ItemDelete")) { ?>
                        <a href="<?php echo controller("do-delete-item.php?id={$id}"); ?>" class="btn btn-outline-danger mx-2">حذف</a>
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
                        <a href="<?php echo controller("do-delete-item.php?id={$id}"); ?>" class="btn btn-outline-danger mx-2">حذف</a>
                    <?php }
                    if (Authorization::check("ItemEditOther")){ ?>
                        <a href="#" class="btn btn-outline-warning mx-2">ویرایش</a>
                    <?php } ?>
                </section>
            <?php } } ?>
    </article>
</section>