<?php
/* Created By Evan ( Sajad Gholami ) */
include "__php__.php";

$db = new DB();
$products = Product::find_join("Product_Bookmark");
$alerts = Alert::alerts();
?>
<section class="container mt-5" id="Products">
    <?php if ($alerts) { ?><section> <?php echo $alerts; ?> </section><?php } ?>
    <section class="row">
        <?php
        $count = 0;
        foreach ($products as $row){
            $row['id'] = $row['product_id'];
            get_template_part("product","template",$row);
            $count++;
        }
        ?>
    </section>
    <?php if ($count == 0 ){ ?> <h3 class="text-center">متاسفانه محصولی برای نمایش وجود ندارد</h3> <?php } ?>
</section>