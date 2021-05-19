<?php
/* Created By Evan ( Sajad Gholami ) */

include "__php__.php";

if ($FirstTime){
    include $Model . "setup.php";
    exit();
}
$title = "صفحه اصلی | استیم فارسی";
get_template("header","",$title);
get_template("showcase");

$alerts = Alert::alerts();
if ($alerts){
    ?>
    <section class="home-alerts">
        <?php echo $alerts; ?>
    </section>
    <?php
}

get_template("footer");