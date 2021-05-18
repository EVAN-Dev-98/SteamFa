<?php

include "__php__.php";

$db = new DB();
$table = Product::find();
$alerts = Alert::alerts();

?>
<section class="container mt-5">
    <section class="row">
<?php
$count = 0;
foreach ($table as $row){
    if ($row["attr_name"] == "attr_dota2"){
        $attr = attr_dota2::find("product_id = {$row["id"]}");
        $row2 = $attr[0];
        unset($row2["product_id"]);
        $row = array_merge($row,$row2);
    }
    if ($row["attr_name"] == "attr_csgo"){
        $attr = attr_csgo::find("product_id = {$row["id"]}");
        $row2 = $attr[0];
        unset($row2["product_id"]);
        $row = array_merge($row,$row2);
    }
    get_template_part("product","template",$row);
    $count++;
}
?>
    </section>
<?php
if ($count == 0 ){
    ?>
        <h3 class="text-center">متاسفانه محصولی برای نمایش وجود ندارد</h3>
    <?php
}
?>
</section>