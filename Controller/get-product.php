<?php

include "__php__.php";

include $inc . "settings.php";
include $inc . "functions.php";

$db = new DB();
$table = Product::find();
$alerts = alerts();

?>
<section class="container mt-5">
    <section class="row">
<?php
$count = 0;
foreach ($table as $row){
    get_view("product","template");
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