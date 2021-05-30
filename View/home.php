<?php
/* Created By Evan ( Sajad Gholami ) */
include "__php__.php";

if ($FirstTime){
    include $Model . "setup.php";
    exit();
}

$title = "صفحه اصلی | استیم فارسی";
get_template("master", null, $title);
function main(){
    $alerts = Alert::alerts();
    if ($alerts) { ?>
        <section class="container">
            <?php echo $alerts; ?>
        </section>
    <?php }
}