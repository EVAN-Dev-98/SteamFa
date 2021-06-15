<?php
/* Created By Evan ( Sajad Gholami ) */
include "__php__.php";

$db = new DB();
$p_csgo = Product::find_join("attr_csgo");
$p_dota2 = Product::find_join("attr_dota2");
$p_all = array_merge($p_csgo,$p_dota2);
$alerts = Alert::alerts();
?>
<section class="container mt-5">
    <?php if ($alerts) { ?><section> <?php echo $alerts; ?> </section><?php } ?>
    <section class="row">
        <?php
        $count = 0;
        foreach ($p_all as $row){
            get_template_part("product","template",$row);
            $count++;
        }
        ?>
    </section>
<?php if ($count == 0 ){ ?> <h3 class="text-center">متاسفانه محصولی برای نمایش وجود ندارد</h3> <?php } ?>
</section>